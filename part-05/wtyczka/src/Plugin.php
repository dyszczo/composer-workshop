<?php

/**
 * Bardzo prosta klasa pluginu która dodaje element menu.
 */
class Plugin {
	public static function run() {
		$self = new self();
		$self->add_wordpress_menu();
	}

	private function add_wordpress_menu() {
		add_action( 'admin_menu', function () {
			add_menu_page( "Hello", "A - wtyczka", 'manage_options', self::class, function () {
				echo 'Hello world';
			} );
		} );
	}
}