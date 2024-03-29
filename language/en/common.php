<?php
/**
 * @package Smilie Signs
 * @copyright (c) 2015 Sniper_E - http://sniper-e.com
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'SMILIE_SIGNS_CEDIT'   => 'Smilie Signs BBCode',
	'SMILIE_SIGNS_CREDIT'  => 'by Sniper_E @ sniper-e.net',
	'SMILIE_SIGNS_TITLE'   => 'Smilie Signs',
	'SMILIESIGNS_NOACCESS' => 'You don’t have access to this section',
	'SMILIESIGNS_DISABLE'  => 'Smilie Signs disabled',
	'SMILIESIGNS_COUNT'    => 'One smilie',
	'SMILIESIGNS_COUNTS'   => '<b>%d Smilie Signs</b>',
	'SMILIESIGNS_MESSAGE'  => 'message',
	'SMILIE_SIGNS_HELP'    => 'Smilie signs: [sign=smilie-name]message[/sign]',
	'SMILIE_SIGNS_ICONS'   => 'Smilies per page',
	'SMILIE_SIGNS_POPUP'   => 'Popup size',
	'SMILIESIGNS_PX'       => 'px',
));
