<?php
/**
 * Simple helper functions for the demo web application.
 * This file is intentionally minimal so it can be reused by the public/index.php.
 */

if (!function_exists('app_get_info')) {
	/**
	 * Return application info and a greeting for a given name.
	 *
	 * @param string|null $name
	 * @return array{
	 *   greeting: string,
	 *   php_version: string,
	 *   server_time: string,
	 * }
	 */
	function app_get_info($name = null)
	{
		$name = $name ? trim($name) : '';
		$safeName = $name !== '' ? htmlspecialchars($name, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') : 'Guest';

		return [
			'greeting' => "Hello, {$safeName}!",
			'php_version' => PHP_VERSION,
			'server_time' => date('Y-m-d H:i:s'),
		];
	}
}

if (!function_exists('app_render_greeting')) {
	/**
	 * Render a small HTML fragment with greeting and info.
	 *
	 * @param string|null $name
	 * @return string
	 */
	function app_render_greeting($name = null)
	{
		$info = app_get_info($name);
		$html = "<div class=\"card\">";
		$html .= "<h2>{$info['greeting']}</h2>";
		$html .= "<p><strong>Server time:</strong> {$info['server_time']}</p>";
		$html .= "<p><strong>PHP:</strong> {$info['php_version']}</p>";
		$html .= "</div>";

		return $html;
	}
}

// End of Testing.php

