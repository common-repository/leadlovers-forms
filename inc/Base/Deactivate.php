<?php
/**
 * @package  LeadloversPlugin
 */
namespace LeadloversInc\Base;

class Deactivate
{
	public static function deactivate() {
		flush_rewrite_rules();
	}
}