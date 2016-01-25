<?php
/**
* @package Smilie Signs
* @copyright (c) 2015 Sniper_E - http://sniper-e.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Translated By : Bassel Taha Alhitary - www.alhitary.net
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

$lang = array_merge(
	$lang, array(
//
// Arabic language file
//
		'BBCODE_SIGN_HELP'			=> 'كود الإبتسامة : [sign=name]النص[/sign]',
		'SIGN_BBODES'				=> 'لوحة الإبتسامات',
		'ACUTE_TITLE'				=> 'ذكي',
		'AIKIDO_TITLE'				=> 'قتال',
		'BANANAS_TITLE'				=> 'الموز',
		'BANGHEAD_TITLE'			=> 'يدق رأسه',
		'BDAYCAKE_TITLE'			=> 'كيك عيد الميلاد',
		'BDAYCANDLE_TITLE'			=> 'اطفاء الشمع',
		'BEACH_TITLE' 				=> 'على الشاطي',
		'BEER_TITLE' 				=> 'شراب',
		'BEG_TITLE' 				=> 'يتوسل',
		'BIG_BOSS_TITLE'			=> 'المدير',
		'BLACKEYE_TITLE'			=> 'العين السوداء',
		'BLAHBLAH_TITLE'			=> 'كلام فارغ',
		'BLUSH_TITLE' 				=> 'يخجل',
		'BORG_DRONE_TITLE'			=> 'عالة',
		'BYEBYE_TITLE'				=> 'مع السلامة',
		'CHEERS_TITLE'				=> 'بصحتك',
		'CLAPPING_TITLE'			=> 'يصفق',
		'CLUB_TITLE'				=> 'هراوة',
		'COFFEE_TITLE'				=> 'قهوة',
		'COOL_TITLE'				=> 'أنيق',
		'COOL2_TITLE'				=> 'أنيق2',
		'CRAP_TITLE' 				=> 'نفاية',
		'CRAZY_TITLE' 				=> 'مجنون',
		'CRY_TITLE' 				=> 'يبكي',
		'CRYBYE_TITLE' 				=> 'بكاء الوداع',
		'DOH_TITLE'					=> 'يتذكر',
		'DRAG_TITLE'				=> 'مُدمن',
		'FOCUS_TITLE'				=> 'يحترق',
		'FRIENDS_TITLE'				=> 'أصدقاء',
		'FRIGHT_TITLE'				=> 'يخاف',
		'GIVE_HEART_TITLE'			=> 'يعطي قلب',
		'GIVE_ROSE_TITLE' 			=> 'يعطي وردة',
		'GOOD_TITLE'				=> 'جيد',
		'GRIN_TITLE'				=> 'يكشر',
		'HOWDY_TITLE' 				=> 'ترحيب بالقبعة',
		'IDK_TITLE'					=> 'لا يعلم',
		'JAW_TITLE'					=> 'مندهش',
		'KING_TITLE'				=> 'الملك',
		'LOL_TITLE'					=> 'يضحك',
		'MAD_TITLE'					=> 'غاضب',
		'MAIL_TITLE'				=> 'مسمار',
		'MEXWAVE_TITLE'				=> 'امواج',
		'MOON_TITLE'				=> 'خلفيه',
		'NONO_TITLE'				=> 'لا لا',
		'OK_TITLE'					=> 'تمام',
		'ORDER_TITLE' 				=> 'يأمر',
		'PARDON_TITLE'				=> 'يتآسف',
		'POKE_TITLE'				=> 'ينكز',
		'PUMP_TITLE'				=> 'يضخ',
		'READ_TITLE'				=> 'يقرأ',
		'ROFL_TITLE'				=> 'يموت ضحك',
		'ROLLEYES_TITLE'			=> 'يدور عيونه',
		'ROTFL_TITLE'				=> 'يضحك بقوة',
		'RULES2_TITLE'				=> 'قوانين',
		'SCARED_TITLE'				=> 'خائف',
		'SCOUT_TITLE'				=> 'يستكشف',
		'SCRATCH_TITLE'				=> 'يحك رأسه',
		'SEARCH2_TITLE'				=> 'يبحث',
		'SECRET_TITLE'				=> 'سري',
		'SHOCK_TITLE'				=> 'مصدوم',
		'SHOUT_TITLE'				=> 'يصرخ',
		'SLEEPING_TITLE'			=> 'نائم',
		'SORRY_TITLE'				=> 'متأسف',
		'TAUNT_TITLE'				=> 'توبيخ ساخر',
		'TEASE_TITLE'				=> 'مُضايقة',
		'THINK_TITLE'				=> 'تفكير',
		'THIS_TITLE'				=> 'هذا',
		'TONGUE_TITLE'				=> 'لسان',
		'UNSURE_TITLE'				=> 'غير متأكد',
		'WACKO_TITLE'				=> 'مدوخ',
		'WARNING_TITLE'				=> 'كرت أصفر',
		'WAVE_TITLE'				=> 'يلوح بيده',
		'WEIRDO_TITLE'				=> 'غريب الأطوار',
		'WINK_TITLE'				=> 'غمزة',
		'YAHOO_TITLE'				=> 'فرحان',
		'YES2_TITLE'				=> 'نعم',
		'ZCHAIR_TITLE'				=> 'شخير',
//
// Do Not Edit Below This Line
//
		'ACUTE'						=> 'acute',
		'AIKIDO'					=> 'aikido',
		'BANANAS'					=> 'bananas',
		'BANGHEAD'					=> 'banghead',
		'BDAYCAKE'					=> 'bdaycake',
		'BDAYCANDLE'				=> 'bdaycandle',
		'BEACH' 					=> 'beach',
		'BEER' 						=> 'beer',
		'BEG' 						=> 'beg',
		'BIG_BOSS'					=> 'big_boss',
		'BLACKEYE'					=> 'blackeye',
		'BLAHBLAH'					=> 'blahblah',
		'BLUSH' 					=> 'blush',
		'BORG_DRONE'				=> 'borg_drone',
		'BYEBYE'					=> 'byebye',
		'CHEERS'					=> 'cheers',
		'CLAPPING'					=> 'clapping',
		'CLUB'						=> 'club',
		'COFFEE'					=> 'coffee',
		'COOL'						=> 'cool',
		'COOL2'						=> 'cool2',
		'CRAP' 						=> 'crap',
		'CRAZY' 					=> 'crazy',
		'CRY' 						=> 'cry',
		'CRYBYE' 					=> 'crybye',
		'DOH'						=> 'doh',
		'DRAG'						=> 'drag',
		'FOCUS'						=> 'focus',
		'FRIENDS'					=> 'friends',
		'FRIGHT'					=> 'fright',
		'GIVE_HEART'				=> 'give_heart',
		'GIVE_ROSE' 				=> 'give_rose',
		'GOOD'						=> 'good',
		'GRIN'						=> 'grin',
		'HOWDY' 					=> 'howdy',
		'IDK'						=> 'idk',
		'JAW'						=> 'jaw',
		'KING'						=> 'king',
		'LOL'						=> 'lol',
		'MAD'						=> 'mad',
		'MAIL'						=> 'mail',
		'MEXWAVE'					=> 'mexwave',
		'MOON'						=> 'moon',
		'NONO'						=> 'nono',
		'OK'						=> 'ok',
		'ORDER' 					=> 'order',
		'PARDON'					=> 'pardon',
		'POKE'						=> 'poke',
		'PUMP'						=> 'pump',
		'READ'						=> 'read',
		'ROFL'						=> 'rofl',
		'ROLLEYES'					=> 'rolleyes',
		'ROTFL'						=> 'rotfl',
		'RULES2'					=> 'rules2',
		'SCARED'					=> 'scared',
		'SCOUT'						=> 'scout',
		'SCRATCH'					=> 'scratch',
		'SEARCH2'					=> 'search2',
		'SECRET'					=> 'secret',
		'SHOCK'						=> 'shock',
		'SHOUT'						=> 'shout',
		'SLEEPING'					=> 'sleeping',
		'SORRY'						=> 'sorry',
		'TAUNT'						=> 'taunt',
		'TEASE'						=> 'tease',
		'THINK'						=> 'think',
		'THIS'						=> 'this',
		'TONGUE'					=> 'tongue',
		'UNSURE'					=> 'unsure',
		'WACKO'						=> 'wacko',
		'WARNING'					=> 'warning',
		'WAVE'						=> 'wave',
		'WEIRDO'					=> 'weirdo',
		'WINK'						=> 'wink',
		'YAHOO'						=> 'yahoo',
		'YES2'						=> 'yes2',
		'ZCHAIR'					=> 'zchair',
	)
);
