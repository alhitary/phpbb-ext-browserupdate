<?php
/**
 *
 * @package phpBB Extension - Browser Update
 * @author Darrell Dudics (a.k.a HoLyCoW, a.k.a HoLyCoWzOrZ) me@holycowzorz.com
 * @copyright (c) 2015 Darrell Dudics
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	// ACP Module
	'ACP_BROWSERUPDATE'					=> 'Browser Update',
	'ACP_BROWSERUPDATE_SETTINGS'		=> 'Notification Settings',

	// ACP Logs
	'ACP_BROWSERUPDATE_UPDATE_LOG'		=> '<strong>Altered Browser Update settings</strong>',
));
