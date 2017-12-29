<?php

namespace repat\CommandlineBell;

class CommandlineBell {

	const ASCII_BEL = "\x07";

	public static function flash() {
		if (function_exists("ncurses_flash")) {
			ncurses_flash();
		} else {
			self::bell();
		}
	}
	public static function bell() {
		if (function_exists("ncurses_beep")) {
			ncurses_beep();
		} else {
			echo self::ASCII_BEL;
		}
	}
}