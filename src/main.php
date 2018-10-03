<?php
if (!function_exists('preg_count')) {

	/**
	 * @param string $pattern
	 * @param string $subject
	 * @return int
	 */
	function preg_count(string $pattern, string $subject): int {
		preg_replace($pattern, '', $subject, -1, $count);
		return $count;
	}
}
