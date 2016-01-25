<?php
/**
* @package Smilie Signs
* @copyright (c) 2015 Sniper_E - http://sniper-e.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*/

namespace sniper\smiliesigns\migrations;

class update_table extends \phpbb\db\migration\migration
{

	public function update_data()
	{
		return array(
		 array('custom', array(array($this, 'install_bbcode_for_smiliesigns'))),
		);
	}

	public function install_bbcode_for_smiliesigns()
	{

		$bbcode_data = array(
			'sign=' => array(
				'bbcode_helpline'		=> 'Smilie sign: [sign=name]text[/sign]',
				'bbcode_match'			=> '[sign={SIMPLETEXT}]{TEXT}[/sign]',
				'bbcode_tpl'			=> '<div style="display: inline-block;text-align: center">
<div style="background: transparent url(./ext/sniper/smiliesigns/styles/all/theme/images/wood.gif);padding: 6px;margin: 0;border: 1px solid #000000;-webkit-border-radius: 28px;-o-border-radius: 28px;-moz-border-radius: 28px;border-radius: 28px;">
<div class="signs" style="background: transparent url(./ext/sniper/smiliesigns/styles/all/theme/images/wood.jpg);color: #211200;font-size: 1em;font-weight: bold;text-align: left;padding: 10px;margin: 0;border: 1px solid #522601;-webkit-border-radius: 26px;-o-border-radius: 26px;-moz-border-radius: 26px;border-radius: 26px;">{TEXT}</div>
</div>
<div><img src="./ext/sniper/smiliesigns/styles/all/theme/images/wood_pole_{SIMPLETEXT}.gif" alt="" style="margin-top: -1px;" /></div>
</div>',
			),
		);

		global $db, $request, $user;
		$acp_manager = new \sniper\smiliesigns\includes\acp_manager($db, $request, $user, $this->phpbb_root_path, $this->php_ext);
		$acp_manager->install_bbcodes($bbcode_data);
	}
}