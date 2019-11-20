<?php

namespace Wtyczka2;

/**
 * Bardzo prosta klasa pluginu która pokazuje notice.
 */
class Plugin {
	public static function run() {
		$self = new self();
		$self->show_notice();
	}

	/**
	 * Tutaj umieść kod służący do pokazania notice.
	 */
	private function show_notice() {
	}
}