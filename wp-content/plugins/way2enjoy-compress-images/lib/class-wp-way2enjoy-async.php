<?php

require_once 'wp-async-way2enjoy.php';

if ( ! class_exists( 'WpWay2enjoyParallel' ) ) {

	class WpWay2enjoyParallel extends WP_Parallel_Way2enjoy {


		protected $argument_count = 2;
		protected $priority = 12;
		protected $action = 'wp_generate_attachment_metadata';
 
		protected function prepare_data( $data ) {
			//We don't have the data, bail out
			if ( empty( $data ) ) {
				return $data;
			}

			//Return a associative array
			$image_meta             = array();
			$image_meta['metadata'] = ! empty( $data[0] ) ? $data[0] : '';
			$image_meta['id']       = ! empty( $data[1] ) ? $data[1] : '';

			return $image_meta;
	
			
		}

		protected function run_action() {

			$metadata = ! empty( $_POST['metadata'] ) ? $_POST['metadata'] : '';
			$id       = ! empty( $_POST['id'] ) ? $_POST['id'] : '';
//
			$image_url_way2 = wp_get_attachment_url( $id );
			$filename1_way2 = basename( $image_url_way2 );
			$ext_way2enjoy2=wp_check_filetype($filename1_way2);
			$ext_way2enjoy_final=$ext_way2enjoy2['ext'];



//			//Get metadata from $_POST
//		if ( ! empty( $metadata ) && wp_attachment_is_image( $id ) ) {
//	disabled this check as it was not allowing pdf and svg to be optimized	

//	if ( ! empty( $metadata ) ) {

				// Allow the Asynchronous task to run
				do_action( "wp_async_$this->action", $id );
		//	}
		}
	}
	class WpWay2enjoyEditorParallel extends WP_Parallel_Way2enjoy {

		protected $argument_count = 2;
		protected $priority = 12;
			protected $action = 'wp_save_image_editor_file';

			protected function prepare_data( $data ) {
			//Store the post data in $data variable
			if ( ! empty( $data ) ) {
				$data = array_merge( $data, $_POST );
			}

			//Store the image path
			$data['filepath'] = !empty( $data[1] ) ? $data[1] : '';
			$data['wp-action'] = !empty( $data['action'] ) ? $data['action'] : '';
			unset( $data['action'], $data[1] );
			return $data;
		}

		protected function run_action() {

			if ( isset( $_POST['wp-action'], $_POST['do'], $_POST['postid'] )
			     && 'image-editor' === $_POST['wp-action']
			     && check_ajax_referer( 'image_editor-' . $_POST['postid'] )
			     && 'open' != $_POST['do']
			) {
				$postid = ! empty( $_POST['postid'] ) ? $_POST['postid'] : '';
		//	$postid = '55';
				// Allow the Asynchronous task to run
				do_action( "wp_async_$this->action", $postid, $_POST );
			}
		}

	}
}