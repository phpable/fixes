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

if (!function_exists('array_merge_recursive_distinct')) {

	/**
	 * @param array $Original
	 * @param array $Source
	 * @return array
	 */
	function array_merge_recursive_distinct(array $Original, array $Source): array {
		foreach ($Source as $key => $value) {
			if (is_array($value) && isset($Original[$key]) && is_array($Original[$key])) {
				$Original[$key] = array_merge_recursive_distinct($Original[$key], $value);
			} elseif (is_numeric($key)) {
				array_push($Original, $value);
			} else {
				$Original[$key] = $value;
			}
		}

		return $Original;
	}
}

if (!function_exists('file_purge')) {

	/**
	 * @param string $filename
	 * @param int $flags
	 * @param resource|null $context
	 *
	 * @return false|int
	 */
	function file_purge(string $filename, int $flags = 0, $context = null): false|int {
		return file_put_contents($filename, '', $flags & ~FILE_APPEND, $context);
	}
}
