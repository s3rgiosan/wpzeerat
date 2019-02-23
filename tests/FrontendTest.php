<?php

namespace s3rgiosan\WP\Plugin\Zeerat\Tests;

use s3rgiosan\WP\Plugin\Zeerat\Frontend;
use s3rgiosan\WP\Plugin\Zeerat\Plugin;

class FrontendTest extends \WP_UnitTestCase {

	public $frontend;

	function setUp() {
		parent::setUp();

		$plugin         = new Plugin( 'wpzeerat', '1.0.0' );
		$this->frontend = new Frontend( $plugin );
	}

	function test_if_recording_is_disabled() {
		$post_id = $this->factory->post->create();

		update_post_meta( $post_id, 'zeerat_disable_rec', true );

		$actual = $this->frontend->is_recording_disabled( $post_id );
		$this->assertTrue( $actual );
	}
}
