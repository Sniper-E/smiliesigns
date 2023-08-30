<?php
/**
* @package phpBB Extension - Smilie Signs
* @copyright (c) 2015 Sniper_E - http://sniper-e.com
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
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

$lang = array_merge($lang, [
	'SMILIESIGNS_TITLE'          => 'Smilie Signs',
	'SMILIESIGNS_DEMO'           => '[sign=this]This is a smilie sign demo for ',
	'SMILIESIGNS_DEMO_CLOSE'     => '[/sign]',
	'SMILIESIGNS_ALLOW'          => 'Activate Smilie Signs',
	'SMILIESIGNS_ALLOW_EXPLAIN'  => 'Activate/Deactivate Smilie Signs',
	'SMILIESIGNS_DENY'           => 'Deactivate Smilie Signs',
	'SMILIESIGNS_ACTIVATE'       => 'Activate',
	'SMILIESIGNS_DEACTIVATE'     => 'Deactivate',
	'SMILIESIGNS_POPUP'          => 'Popup window',
	'SMILIESIGNS_VALUE'          => 'Pagination',
	'SMILIESIGNS_VALUE_EXPLAIN'  => 'Number of signs per page. (29, 38, 57, 114)',
	'SMILIESIGNS_WIDTH'          => 'Popup width',
	'SMILIESIGNS_WIDTH_EXPLAIN'  => 'Width of popup window. (500 to 1920)',
	'SMILIESIGNS_HEIGHT'         => 'Popup height',
	'SMILIESIGNS_HEIGHT_EXPLAIN' => 'Height of popup window. (300 to 1080)',
	'SMILIESIGNS_PER'            => 'signs per page',
	'SMILIESIGNS_PX'             => 'px',
	'SMILIESIGNS_SAVED'          => 'Smilie Signs settings saved.',
	'SUBMIT_CHANGES'             => 'Submit changes',
]);
