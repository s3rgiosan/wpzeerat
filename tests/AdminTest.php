<?php

namespace s3rgiosan\WP\Plugin\Zeerat\Tests;

use s3rgiosan\WP\Plugin\Zeerat\Admin;
use s3rgiosan\WP\Plugin\Zeerat\Plugin;

class AdminTest extends \WP_UnitTestCase {

	public $admin;

	function setUp() {
		parent::setUp();

		$plugin      = new Plugin( 'wpzeerat', '1.0.0' );
		$this->admin = new Admin( $plugin );
	}

	function test_settings_name() {
		$actual = $this->admin->get_settings_name();
		$this->assertEquals( 'zeerat_settings', $actual );
	}
}
