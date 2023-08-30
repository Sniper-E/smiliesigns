<?php
/**
* @package phpBB Extension - Smilie Signs
* @copyright (c) 2015 Sniper_E - http://sniper-e.com
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*/

namespace sniper\smiliesigns\acp;

class acp_smiliesigns_info
{
	function module()
	{
		return [
			'filename'	=> '\sniper\smiliesigns\acp\acp_smiliesigns_module',
			'title'		=> 'ACP_SMILIESIGNS_TITLE',
			'modes'		=> [
			'settings'	=> ['title' => 'ACP_SMILIESIGNS_SETTINGS', 'auth' => 'ext_sniper/smiliesigns && acl_a_board', 'cat' => ['ACP_SMILIESIGNS_TITLE']],
			],
		];
	}
}
