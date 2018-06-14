<?php
    if ( ! defined( 'ABSPATH' ) ) {
        exit;
    }

    class Way2enjoywebDeactivate{
        ////////////////////////////////////////////////////////////////////////////////////////
        // Events                                                                             //
        ////////////////////////////////////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////////////
        // Constants                                                                          //
        ////////////////////////////////////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////////////
        // Variables                                                                          //
        ////////////////////////////////////////////////////////////////////////////////////////
		public $deactivate_reasons = array();
		public $config;
		// Reason IDs
		const REASON_PLUGIN_IS_HARD_TO_USE_TECHNICAL_PROBLEMS = "reason_plugin_is_hard_to_use_technical_problems";
		const REASON_FREE_VERSION_IS_LIMITED = "reason_free_version_limited";	
		const REASON_PRO_EXPENSIVE = "reason_premium_expensive";	
		const REASON_UPGRADING_TO_PAID_VERSION = "reason_upgrading_to_paid_version";		
		const REASON_TEMPORARY_DEACTIVATION = "reason_temporary_deactivation";

        ////////////////////////////////////////////////////////////////////////////////////////
        // Constructor & Destructor                                                           //
        ////////////////////////////////////////////////////////////////////////////////////////
        public function __construct( $config = array() ) {
        	$this->config = $config;
			$way2_options = $this->config;
 
			$this->deactivate_reasons = array(
				1 => array(
					'id'    => self::REASON_PLUGIN_IS_HARD_TO_USE_TECHNICAL_PROBLEMS,
					'text'  => __( 'Technical problems / hard to use - Report Bug & get 10000 Credit free', $way2_options->prefix ),	
				),
				2 => array(
					'id'    => self::REASON_FREE_VERSION_IS_LIMITED,
					'text'  => __( 'Free version is limited.', $way2_options->prefix ),	
				),
				3 => array(
					'id'    => self::REASON_PRO_EXPENSIVE,
					'text'  => __( 'Premium is expensive', $way2_options->prefix ),	
				),				
				4 => array(
					'id'    => self::REASON_UPGRADING_TO_PAID_VERSION,
					'text'  => __( 'Upgrading to paid version', $way2_options->prefix ),	
				),
				5 => array(
					'id'    => self::REASON_TEMPORARY_DEACTIVATION,
					'text'  => __( 'Temporary deactivation', $way2_options->prefix ),	
				),					
			);
			
			add_action( 'admin_footer', array( $this, 'add_deactivation_feedback_dialog_box' ) );	
			add_action( 'admin_init', array( $this, 'submit_and_deactivate' ) );	
			
		
			add_action( 'admin_enqueue_scripts', array( $this, 'scripts' ) );
			
			
					

        }
        ////////////////////////////////////////////////////////////////////////////////////////
        // Public Methods                                                                     //
        ////////////////////////////////////////////////////////////////////////////////////////
        public function add_deactivation_feedback_dialog_box(){
			$deactivate_reasons = $this->deactivate_reasons;
			$way2_options =  $this->config;
			
			?>
				<script>
				jQuery(document).ready(function () {
					wdReady("<?php echo $way2_options->prefix; ?>");
				});
				</script>
			<?php

					$deactivate_url =
						add_query_arg(
							array(
								'action' => 'deactivate',
								'plugin' => plugin_basename( $way2_options->plugin_main_file ),
								'_wpnonce' => wp_create_nonce( 'deactivate-plugin_' . plugin_basename( $way2_options->plugin_main_file ) )
							),
							admin_url( 'plugins.php' )
						);
					
					require ( $way2_options->way2_dir_templates . '/display_deactivation_popup.php' );
		}


		
		public function scripts(){
			$way2_options =  $this->config;
			wp_enqueue_style( 'wd-deactivate-popup', $way2_options->way2_url_css . '/deactivate_popup.css', array(), get_option($way2_options->prefix . "_version" ) );
			wp_enqueue_script( 'wd-deactivate-popup', $way2_options->way2_url_js . '/deactivate_popup.js', array(), get_option($way2_options->prefix . "_version" ));
		
			$admin_data = wp_get_current_user();
		    wp_localize_script(  'wd-deactivate-popup', $way2_options->prefix . 'WDDeactivateVars' , array(
				"prefix" => $way2_options->prefix ,
				"deactivate_class" => $way2_options->prefix . '_deactivate_link',
				"email" => $admin_data->data->user_email,
				"plugin_way2_url" => $way2_options->plugin_way2_url,
			));

			 
		}
		public function submit_and_deactivate(){
			$way2_options =  $this->config;
			if( isset( $_POST[$way2_options->prefix . "_submit_and_deactivate"] ) ){
				
				if( $_POST[$way2_options->prefix . "_submit_and_deactivate"] == 2 || $_POST[$way2_options->prefix . "_submit_and_deactivate"] == 3 ){
					$api = new Way2enjoywebApi( $way2_options );	
					$hash = $api->get_hash();
					if($hash != null){
						$data = array();
						
						$data["reason"] = isset($_POST[$way2_options->prefix . "_reasons"]) ? $_POST[$way2_options->prefix . "_reasons"] : "";
						$data["site_url"] = site_url();
						$data["plugin_id"] = $way2_options->way2_plugin_id;
						
						$data["additional_details"] = isset($_POST[$way2_options->prefix . "_additional_details"]) ? $_POST[$way2_options->prefix . "_additional_details"] : "";
						$admin_data = wp_get_current_user();
						$data["email"] = isset($_POST[$way2_options->prefix . "_email"]) ? $_POST[$way2_options->prefix . "_email"] : $admin_data->data->user_email;
						$user_first_name = get_user_meta( $admin_data->ID, "first_name", true );
						$user_last_name = get_user_meta( $admin_data->ID, "last_name", true );
						
						$data["name"] = $user_first_name || $user_last_name ? $user_first_name . " " . $user_last_name : $admin_data->data->user_login;							
						$data["hash"] = $hash;

//
//	//way2enjoy test starts here
//$djmkkkvgtgtt= print_r($data, true);
//$pathhhuu='/home/garamtea/wp.garamtea.com/wp-content/plugins/way2enjoy-compress-images/way2'.rand(99,999999).'.txt';
//file_put_contents($pathhhuu,$djmkkkvgtgtt);
//// way2enjoy test ends here



						$response = wp_remote_post( "http://way2enjoy.com/modules/compress-png/deactivatereasons.php", array(
							'method' => 'POST',
							'timeout' => 45,
							'redirection' => 5,
							'httpversion' => '1.0',
							'blocking' => true,
							'headers' => array(),
							'body' => json_encode($data),
							'cookies' => array()
							)
						);


						$response_body = (!is_wp_error($response) && isset( $response["body"] )) ? json_decode( $response["body"], true ) : null;
						if( is_array( $response_body ) && $response_body["body"]["msg"] == "Access" )	{
							 
						}						
					}	
				} 
				if($_POST[$way2_options->prefix . "_submit_and_deactivate"] == 2 || $_POST[$way2_options->prefix . "_submit_and_deactivate"] == 1 ){
					$deactivate_url = 
						add_query_arg(
							array(
								'action' => 'deactivate',
								'plugin' => plugin_basename( $way2_options->plugin_main_file ),		
								'_wpnonce' => wp_create_nonce( 'deactivate-plugin_' . plugin_basename( $way2_options->plugin_main_file ) )
							),
							admin_url( 'plugins.php' )
						);  
				    echo '<script>window.location.href="' . $deactivate_url . '";</script>';					
				}

			}
		}
		
        ////////////////////////////////////////////////////////////////////////////////////////
        // Getters & Setters                                                                  //
        ////////////////////////////////////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////////////
        // Private Methods                                                                    //
        ////////////////////////////////////////////////////////////////////////////////////////
        
        ////////////////////////////////////////////////////////////////////////////////////////
        // Listeners                                                                          //
        ////////////////////////////////////////////////////////////////////////////////////////

    }

	
