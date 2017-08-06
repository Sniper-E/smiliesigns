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

//
// English language file
//
$lang = array_merge(
	$lang, array(
		'SIGN_BBODES'						=> 'Sign= Smilies',
		'SMILIESIGNS_BBCODE_HELP'			=> 'Show Sign= Smilies',
		'SMILIES_BBCODE_HELP'				=> 'Show Smilies',
		'SIGN_EXAMPLE_BBODES'				=> 'Smilie Signs Examples',
		'SMILIESIGNS_EXAMPLE_BBCODE_HELP'	=> 'Show Examples',
		'SMILIES_EXAMPLE_BBCODE_HELP'		=> 'Hide Examples',

/**
 * Sign titles
*/
		'ACUTE_TITLE'			=> 'Acute',
		'AGGRESSIVE_TITLE'		=> 'Aggressive',
		'AGREE_TITLE'			=> 'Agree',
		'AIKIDO_TITLE'			=> 'Aikido',
		'AIRKISS_TITLE'			=> 'Airkiss',
		'BANANAS_TITLE'			=> 'Bananas',
		'BANGHEAD_TITLE'		=> 'BangHead',
		'BB_TITLE'				=> 'Bb',
		'BDAYCAKE_TITLE'		=> 'BdayCake',
		'BDAYCANDLE_TITLE'		=> 'BdayCandle',
		'BEACH_TITLE' 			=> 'Beach',
		'BEEE_TITLE' 			=> 'Beee',
		'BEER_TITLE' 			=> 'Beer',
		'BEG_TITLE' 			=> 'Beg',
		'BIGBOSS_TITLE'			=> 'Bigboss',
		'BIGGRIN_TITLE'			=> 'Biggrin',
		'BLACKEYE_TITLE'		=> 'BlackEye',
		'BLAHBLAH_TITLE'		=> 'BlahBlah',
		'BLIND_TITLE'			=> 'Blind',
		'BLINK_TITLE'			=> 'Blink',
		'BLUSH_TITLE'			=> 'Blush',
		'BORDOM_TITLE'			=> 'Bordom',
		'BORGDRONE_TITLE'		=> 'BorgDrone',
		'BUBA_TITLE'			=> 'Buba',
		'BYE_TITLE'				=> 'Bye',
		'BYEBYE_TITLE'			=> 'ByeBye',
		'CHEERS_TITLE'			=> 'Cheers',
		'CLAPPING_TITLE'		=> 'Clapping',
		'CLUB_TITLE'			=> 'Club',
		'COFFEE_TITLE'			=> 'Coffee',
		'COLD_TITLE'			=> 'Cold',
		'CONFUSED_TITLE'		=> 'Confused',
		'COOL_TITLE'			=> 'Cool',
		'CRAP_TITLE' 			=> 'Crap',
		'CRAZY_TITLE' 			=> 'Crazy',
		'CRY_TITLE' 			=> 'Cry',
		'CRYBYE_TITLE' 			=> 'Crybye',
		'DANCE_TITLE'			=> 'Dance',
		'DOH_TITLE'				=> 'Doh',
		'DRAG_TITLE'			=> 'Drag',
		'EEK_TITLE'				=> 'Eek',
		'EVIL_TITLE'			=> 'Evil',
		'FACEPALM_TITLE'		=> 'Facepalm',
		'FART_TITLE'			=> 'Fart',
		'FLAGWAVE_TITLE'		=> 'Flagwave',
		'FOCUS_TITLE'			=> 'Focus',
		'FRIENDS_TITLE'			=> 'Friends',
		'FRIGHT_TITLE'			=> 'Fright',
		'GIVEHEART_TITLE'		=> 'GiveHeart',
		'GIVEROSE_TITLE' 		=> 'GiveRose',
		'GLASSES_TITLE'			=> 'Glasses',
		'GOOD_TITLE'			=> 'Good',
		'GRIN_TITLE'			=> 'Grin',
		'HOWDY_TITLE' 			=> 'Howdy',
		'IDK_TITLE'				=> 'IDK',
		'JAW_TITLE'				=> 'Jaw',
		'JOKING_TITLE'			=> 'Joking',
		'KING_TITLE'			=> 'King',
		'LOL_TITLE'				=> 'Lol',
		'LOL2_TITLE'			=> 'Lol2',
		'MAD_TITLE'				=> 'Mad',
		'MAD2_TITLE'			=> 'Mad2',
		'MAIL_TITLE'			=> 'Mail',
		'MEXWAVE_TITLE'			=> 'Mexwave',
		'MOON_TITLE'			=> 'Moon',
		'MORNING_TITLE'			=> 'Morning',
		'MRGREEN_TITLE'			=> 'Mrgreen',
		'NONO_TITLE'			=> 'NoNo',
		'OK_TITLE'				=> 'Ok',
		'OLDTIMER_TITLE'		=> 'Oldtimer',
		'ORDER_TITLE' 			=> 'Order',
		'PARDON_TITLE'			=> 'Pardon',
		'POKE_TITLE'			=> 'Poke',
		'POKEEYE_TITLE'			=> 'Pokeeye',
		'PUMP_TITLE'			=> 'Pump',
		'RAZZ_TITLE'			=> 'Razz',
		'READ_TITLE'			=> 'Read',
		'REDFACE_TITLE'			=> 'Redface',
		'ROFL_TITLE'			=> 'Rofl',
		'ROLLEYES_TITLE'		=> 'Rolleyes',
		'ROTFL_TITLE'			=> 'Rotfl',
		'RULES2_TITLE'			=> 'Rules',
		'SCARED_TITLE'			=> 'Scared',
		'SCOUT_TITLE'			=> 'Scout',
		'SCRATCH_TITLE'			=> 'Scratch',
		'SEARCH2_TITLE'			=> 'Search',
		'SECRET_TITLE'			=> 'Secret',
		'SHOCK_TITLE'			=> 'Shock',
		'SHOUT_TITLE'			=> 'Shout',
		'SLEEPING_TITLE'		=> 'Sleeping',
		'SLEEPY_TITLE'			=> 'Sleepy',
		'SORRY_TITLE'			=> 'Sorry',
		'TAUNT_TITLE'			=> 'Taunt',
		'TEASE_TITLE'			=> 'Tease',
		'THINK_TITLE'			=> 'Think',
		'THIS_TITLE'			=> 'This',
		'THUMBSDOWN_TITLE'		=> 'Thumbsdown',
		'THUMBSUP_TITLE'		=> 'Thumbsup',
		'TONGUE_TITLE'			=> 'Tongue',
		'TWISTED_TITLE'			=> 'Twisted',
		'UNSURE_TITLE'			=> 'Unsure',
		'WACKO_TITLE'			=> 'Wacko',
		'WARNING_TITLE'			=> 'Warning',
		'WAVE_TITLE'			=> 'Wave',
		'WAVEHAT_TITLE'			=> 'Wavehat',
		'WEIRDO_TITLE'			=> 'Weirdo',
		'WINK_TITLE'			=> 'Wink',
		'WRITE_TITLE'			=> 'Write',
		'YAHOO_TITLE'			=> 'Yahoo',
		'YES2_TITLE'			=> 'Yes',
		'ZCHAIR_TITLE'			=> 'Zchair',

/**
 * Sign examples title
*/
		'ACUTE'					=> '[sign=acute]text[/sign]',
		'AGGRESSIVE'			=> '[sign=aggressive]text[/sign]',
		'AGREE'					=> '[sign=agree]text[/sign]',
		'AIKIDO'				=> '[sign=aikido]text[/sign]',
		'AIRKISS'				=> '[sign=airkiss]text[/sign]',
		'BANANAS'				=> '[sign=bananas]text[/sign]',
		'BANGHEAD'				=> '[sign=banghead]text[/sign]',
		'BB'					=> '[sign=bb]text[/sign]',
		'BDAYCAKE'				=> '[sign=bdaycake]text[/sign]',
		'BDAYCANDLE'			=> '[sign=bdaycandle]text[/sign]',
		'BEACH' 				=> '[sign=beach]text[/sign]',
		'BEEE' 					=> '[sign=beee]text[/sign]',
		'BEER' 					=> '[sign=beer]text[/sign]',
		'BEG' 					=> '[sign=beg]text[/sign]',
		'BIGBOSS'				=> '[sign=bigboss]text[/sign]',
		'BIGGRIN'				=> '[sign=biggrin]text[/sign]',
		'BLACKEYE'				=> '[sign=blackeye]text[/sign]',
		'BLAHBLAH'				=> '[sign=blahblah]text[/sign]',
		'BLIND'					=> '[sign=blind]text[/sign]',
		'BLINK'					=> '[sign=blink]text[/sign]',
		'BLUSH'					=> '[sign=blush]text[/sign]',
		'BOREDOM'				=> '[sign=boredom]text[/sign]',
		'BORGDRONE'				=> '[sign=borgdrone]text[/sign]',
		'BUBA'					=> '[sign=buba]text[/sign]',
		'BYE'					=> '[sign=bye]text[/sign]',
		'BYEBYE'				=> '[sign=byebye]text[/sign]',
		'CHEERS'				=> '[sign=cheers]text[/sign]',
		'CLAPPING'				=> '[sign=clapping]text[/sign]',
		'CLUB'					=> '[sign=club]text[/sign]',
		'COFFEE'				=> '[sign=coffee]text[/sign]',
		'COLD'					=> '[sign=cold]text[/sign]',
		'CONFUSED'				=> '[sign=confused]text[/sign]',
		'COOL'					=> '[sign=cool]text[/sign]',
		'CRAP' 					=> '[sign=crap]text[/sign]',
		'CRAZY' 				=> '[sign=crazy]text[/sign]',
		'CRY' 					=> '[sign=cry]text[/sign]',
		'CRYBYE' 				=> '[sign=crybye]text[/sign]',
		'DANCE'					=> '[sign=dance]text[/sign]',
		'DOH'					=> '[sign=doh]text[/sign]',
		'DRAG'					=> '[sign=drag]text[/sign]',
		'EEK'					=> '[sign=eek]text[/sign]',
		'EVIL'					=> '[sign=evil]text[/sign]',
		'FACEPALM'				=> '[sign=facepalm]text[/sign]',
		'FART'					=> '[sign=fart]text[/sign]',
		'FLAGWAVE'				=> '[sign=flagwave]text[/sign]',
		'FOCUS'					=> '[sign=focus]text[/sign]',
		'FRIENDS'				=> '[sign=friends]text[/sign]',
		'FRIGHT'				=> '[sign=fright]text[/sign]',
		'GIVEHEART'				=> '[sign=giveheart]text[/sign]',
		'GIVEROSE' 				=> '[sign=giverose]text[/sign]',
		'GLASSES'				=> '[sign=glasses]text[/sign]',
		'GOOD'					=> '[sign=good]text[/sign]',
		'GRIN'					=> '[sign=grin]text[/sign]',
		'HOWDY' 				=> '[sign=howdy]text[/sign]',
		'IDK'					=> '[sign=idk]text[/sign]',
		'JAW'					=> '[sign=jaw]text[/sign]',
		'JOKING'				=> '[sign=joking]text[/sign]',
		'KING'					=> '[sign=king]text[/sign]',
		'LOL'					=> '[sign=lol]text[/sign]',
		'LOL2'					=> '[sign=lol2]text[/sign]',
		'MAD'					=> '[sign=mad]text[/sign]',
		'MAD2'					=> '[sign=mad2]text[/sign]',
		'MAIL'					=> '[sign=mail]text[/sign]',
		'MEXWAVE'				=> '[sign=mexwave]text[/sign]',
		'MOON'					=> '[sign=moon]text[/sign]',
		'MORNING'				=> '[sign=morning]text[/sign]',
		'MRGREEN'				=> '[sign=mrgreen]text[/sign]',
		'NONO'					=> '[sign=nono]text[/sign]',
		'OK'					=> '[sign=ok]text[/sign]',
		'OLDTIMER'				=> '[sign=oldtimer]text[/sign]',
		'ORDER' 				=> '[sign=order]text[/sign]',
		'PARDON'				=> '[sign=pardon]text[/sign]',
		'POKE'					=> '[sign=poke]text[/sign]',
		'POKEYE'				=> '[sign=pokeeye]text[/sign]',
		'PUMP'					=> '[sign=pump]text[/sign]',
		'RAZZ'					=> '[sign=razz]text[/sign]',
		'READ'					=> '[sign=read]text[/sign]',
		'REDFACE'				=> '[sign=redface]text[/sign]',
		'ROFL'					=> '[sign=rofl]text[/sign]',
		'ROLLEYES'				=> '[sign=rolleyes]text[/sign]',
		'ROTFL'					=> '[sign=rotfl]text[/sign]',
		'RULES2'				=> '[sign=rules]text[/sign]',
		'SCARED'				=> '[sign=scared]text[/sign]',
		'SCOUT'					=> '[sign=scout]text[/sign]',
		'SCRATCH'				=> '[sign=scratch]text[/sign]',
		'SEARCH2'				=> '[sign=search]text[/sign]',
		'SECRET'				=> '[sign=secret]text[/sign]',
		'SHOCK'					=> '[sign=shock]text[/sign]',
		'SHOUT'					=> '[sign=shout]text[/sign]',
		'SLEEPING'				=> '[sign=sleeping]text[/sign]',
		'SLEEPY'				=> '[sign=sleepy]text[/sign]',
		'SORRY'					=> '[sign=sorry]text[/sign]',
		'TAUNT'					=> '[sign=taunt]text[/sign]',
		'TEASE'					=> '[sign=tease]text[/sign]',
		'THINK'					=> '[sign=think]text[/sign]',
		'THIS'					=> '[sign=this]text[/sign]',
		'THUMBSDOWN'			=> '[sign=thumbsdown]text[/sign]',
		'THUMBSUP'				=> '[sign=thumbsup]text[/sign]',
		'TONGUE'				=> '[sign=tongue]text[/sign]',
		'TWISTED'				=> '[sign=twisted]text[/sign]',
		'UNSURE'				=> '[sign=unsure]text[/sign]',
		'WACKO'					=> '[sign=wacko]text[/sign]',
		'WARNING'				=> '[sign=warning]text[/sign]',
		'WAVE'					=> '[sign=wave]text[/sign]',
		'WAVEHAT'				=> '[sign=wavehat]text[/sign]',
		'WEIRDO'				=> '[sign=weirdo]text[/sign]',
		'WINK'					=> '[sign=wink]text[/sign]',
		'WRITE'					=> '[sign=write]text[/sign]',
		'YAHOO'					=> '[sign=yahoo]text[/sign]',
		'YES2'					=> '[sign=yes]text[/sign]',
		'ZCHAIR'				=> '[sign=zchair]text[/sign]',
	)
);
