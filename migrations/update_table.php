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
				'bbcode_tpl'			=> '<div style="text-align: center;padding: 0;display: inline-block;" class="sign-wrap">
<div style="padding: 14px;margin: 0;-webkit-border-radius: 20px;-o-border-radius: 20px;-moz-border-radius: 20px;border-radius: 20px;" class="forabg sign-head">
<div style="padding: 6px 10px;margin: 0;-webkit-border-radius: 10px;-o-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;" class="panel sign-inner">{TEXT}</div>
</div>
<div style="padding: 0;background-size: 6px 42px;background-repeat: no-repeat;background-color: transparent;background-position: center top;" class="forumbg sign-img"><img src="{ROOT_PATH}ext/sniper/smiliesigns/images/sign_{SIMPLETEXT}.gif" alt="" /></div>
</div>',
			),
		);

		global $db, $request, $user;
		$acp_manager = new \sniper\smiliesigns\includes\acp_manager($db, $request, $user, $this->phpbb_root_path, $this->php_ext);
		$acp_manager->install_bbcodes($bbcode_data);
	}
}