<?php
/**
* @package phpBB Extension - Smilie Signs
* @copyright (c) 2015 Sniper_E - http://sniper-e.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*/

namespace sniper\smiliesigns\migrations;

use phpbb\db\migration\migration;

class smiliesigns_schema extends migration
{
	public function update_data()
	{
		return array(
			// Add configs
			array('config.add', array('smiliesigns_allow', 1)),
			array('config.add', array('smiliesigns_value', 57)),
			array('config.add', array('smiliesigns_width', 960)),
			array('config.add', array('smiliesigns_height', 490)),
			array('config.add', array('smiliesigns_version', '1.0.5')),

			// Insert BBcode
			array('custom', array(
				array(&$this, 'install_smilie_signs_bbcodes'),
			)),

			// Insert sample data
			array('custom', array(
				array(&$this, 'insert_sample_data'),
			)),

			// Permission
			array('permission.add', array('u_use_smilie_signs_bbcode', true)),
			// Set Permission
			array('permission.permission_set', array('ADMINISTRATORS', 'u_use_smilie_signs_bbcode', 'group', true)),

			// ACP module
			['module.add', [
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_SMILIESIGNS_TITLE'
			]],
			['module.add', [
				'acp',
				'ACP_SMILIESIGNS_TITLE',
				[
					'module_basename'	=> '\sniper\smiliesigns\acp\acp_smiliesigns_module',
				],
			]],
		);
	}

	public function update_schema()
	{
		return array(
			'add_tables'	=> array(
				$this->table_prefix . 'smiliesigns'	=> array(
					'COLUMNS'	=> array(
					'smilie_id'	=> array('UINT', null, 'auto_increment'),
					'smilie_name' => array('VCHAR', ''),
				),
				'PRIMARY_KEY' => 'smilie_id',
			),
		));
	}

	public function revert_schema()
	{
		return array(
			'drop_tables'	=> array(
				$this->table_prefix . 'smiliesigns',
			),
		);
	}

	public function revert_data()
	{
		return array(
			array('custom', array(
				array(&$this, 'smilie_signs_bbcodes_behind')
			)),
		);
	}

	public function smilie_signs_bbcodes_behind($bbcode_tags)
	{
		$bbcode_tags = array('sign');

		$sql = 'UPDATE ' . BBCODES_TABLE . '
			SET display_on_posting = 0
			WHERE ' . $this->db->sql_in_set('bbcode_tag', $bbcode_tags);
		$this->db->sql_query($sql);
	}

	public function install_smilie_signs_bbcodes($bbcode_data)
	{
		if (!class_exists('acp_bbcodes'))
		{
			include($this->phpbb_root_path . 'includes/acp/acp_bbcodes.' . $this->php_ext);
		}

		$bbcode_tool = new \acp_bbcodes();

		$bbcode_data = array(
			'sign=' => array(
				'bbcode_match'        => '[sign={SIMPLETEXT}]{TEXT}[/sign]',
				'bbcode_tpl'          => '<div style="display: inline-block;padding: 4px 2px 18px;cursor:pointer;" class="sign-wrap">
<div style="padding: 6px;margin: 0;border-radius: 10px;" class="forabg sign-head">
<div style="padding: 2px 6px 4px;margin: 0;text-align: center;font-size: 1.0em;box-shadow: none;" class="panel sign-inner col2">{TEXT}</div>
</div>
<div style="text-align:center;padding: 0;margin-top: 0;border: none;box-shadow: none;background-size: 6px 28px;background-repeat: no-repeat;background-color: transparent;background-position: center top;margin-bottom: -14px;" class="forumbg sign-img">
<img src="{BOARD_URL}ext/sniper/smiliesigns/images/sign_{SIMPLETEXT}.gif" alt="" style="margin-top: -14px;" class="smilie-img" /></div>
</div>',
				'bbcode_helpline'     => 'Smilie sign: [sign=smilie-name]message[/sign]',
				'display_on_posting'  => 0,
			),
		);
		foreach ($bbcode_data as $bbcode_name => $bbcode_array)
		{
			$data = $bbcode_tool->build_regexp($bbcode_array['bbcode_match'], $bbcode_array['bbcode_tpl'], $bbcode_array['bbcode_helpline']);
			$bbcode_array += array(
				'bbcode_tag'          => $data['bbcode_tag'],
				'first_pass_match'    => $data['first_pass_match'],
				'first_pass_replace'  => $data['first_pass_replace'],
				'second_pass_match'   => $data['second_pass_match'],
				'second_pass_replace' => $data['second_pass_replace']
			);

			$sql = 'SELECT bbcode_id
				FROM ' . BBCODES_TABLE . "
				WHERE LOWER(bbcode_tag) = '" . strtolower($bbcode_name) . "'
				OR LOWER(bbcode_tag) = '" . strtolower($bbcode_array['bbcode_tag']) . "'";
			$result = $this->db->sql_query($sql);
			$row_exists = $this->db->sql_fetchrow($result);
			$this->db->sql_freeresult($result);

			if ($row_exists)
			{
				$bbcode_id = $row_exists['bbcode_id'];
				$sql = 'UPDATE ' . BBCODES_TABLE . '
					SET ' . $this->db->sql_build_array('UPDATE', $bbcode_array) . '
					WHERE bbcode_id = ' . $bbcode_id;
				$this->db->sql_query($sql);
			}
			else
			{
				$sql = 'SELECT MAX(bbcode_id) AS max_bbcode_id
					FROM ' . BBCODES_TABLE;
				$result = $this->db->sql_query($sql);
				$max_bbcode_id = $this->db->sql_fetchfield('max_bbcode_id');
				$this->db->sql_freeresult($result);

				if ($max_bbcode_id)
				{
					$bbcode_id = $max_bbcode_id + 1;

					if ($bbcode_id <= NUM_CORE_BBCODES)
					{
						$bbcode_id = NUM_CORE_BBCODES + 1;
					}
				}
				else
				{
					$bbcode_id = NUM_CORE_BBCODES + 1;
				}

				if ($bbcode_id <= BBCODE_LIMIT)
				{
					$bbcode_array['bbcode_id'] = (int) $bbcode_id;
					$bbcode_array['display_on_posting'] = ((int) $bbcode_array['display_on_posting']);
					$this->db->sql_query('INSERT INTO ' . BBCODES_TABLE . ' ' . $this->db->sql_build_array('INSERT', $bbcode_array));
				}
			}
		}
	}

	public function insert_sample_data()
	{
		if ($this->db_tools->sql_table_exists($this->table_prefix . 'smiliesigns'))
		{
			$sql_ary = array(
				array( 'smilie_id' => null, 'smilie_name' => 'acute', ),
				array( 'smilie_id' => null, 'smilie_name' => 'aggressive', ),
				array( 'smilie_id' => null, 'smilie_name' => 'agree', ),
				array( 'smilie_id' => null, 'smilie_name' => 'aikido', ),
				array( 'smilie_id' => null, 'smilie_name' => 'airkiss', ),
				array( 'smilie_id' => null, 'smilie_name' => 'bananas', ),
				array( 'smilie_id' => null, 'smilie_name' => 'banghead', ),
				array( 'smilie_id' => null, 'smilie_name' => 'bb', ),
				array( 'smilie_id' => null, 'smilie_name' => 'bdaycake', ),
				array( 'smilie_id' => null, 'smilie_name' => 'bdaycandle', ),
				array( 'smilie_id' => null, 'smilie_name' => 'beach', ),
				array( 'smilie_id' => null, 'smilie_name' => 'beee', ),
				array( 'smilie_id' => null, 'smilie_name' => 'beer', ),
				array( 'smilie_id' => null, 'smilie_name' => 'beg', ),
				array( 'smilie_id' => null, 'smilie_name' => 'bigboss', ),
				array( 'smilie_id' => null, 'smilie_name' => 'biggrin', ),
				array( 'smilie_id' => null, 'smilie_name' => 'blackeye', ),
				array( 'smilie_id' => null, 'smilie_name' => 'blahblah', ),
				array( 'smilie_id' => null, 'smilie_name' => 'blind', ),
				array( 'smilie_id' => null, 'smilie_name' => 'blink', ),
				array( 'smilie_id' => null, 'smilie_name' => 'blush', ),
				array( 'smilie_id' => null, 'smilie_name' => 'boredom', ),
				array( 'smilie_id' => null, 'smilie_name' => 'borgdrone', ),
				array( 'smilie_id' => null, 'smilie_name' => 'bow', ),
				array( 'smilie_id' => null, 'smilie_name' => 'buba', ),
				array( 'smilie_id' => null, 'smilie_name' => 'bye', ),
				array( 'smilie_id' => null, 'smilie_name' => 'byebye', ),
				array( 'smilie_id' => null, 'smilie_name' => 'cheers', ),
				array( 'smilie_id' => null, 'smilie_name' => 'clapping', ),
				array( 'smilie_id' => null, 'smilie_name' => 'club', ),
				array( 'smilie_id' => null, 'smilie_name' => 'coffee', ),
				array( 'smilie_id' => null, 'smilie_name' => 'cold', ),
				array( 'smilie_id' => null, 'smilie_name' => 'confused', ),
				array( 'smilie_id' => null, 'smilie_name' => 'cool', ),
				array( 'smilie_id' => null, 'smilie_name' => 'crap', ),
				array( 'smilie_id' => null, 'smilie_name' => 'crazy', ),
				array( 'smilie_id' => null, 'smilie_name' => 'cry', ),
				array( 'smilie_id' => null, 'smilie_name' => 'crybye', ),
				array( 'smilie_id' => null, 'smilie_name' => 'dance', ),
				array( 'smilie_id' => null, 'smilie_name' => 'doh', ),
				array( 'smilie_id' => null, 'smilie_name' => 'drag', ),
				array( 'smilie_id' => null, 'smilie_name' => 'eek', ),
				array( 'smilie_id' => null, 'smilie_name' => 'evil', ),
				array( 'smilie_id' => null, 'smilie_name' => 'facepalm', ),
				array( 'smilie_id' => null, 'smilie_name' => 'fart', ),
				array( 'smilie_id' => null, 'smilie_name' => 'flagwave', ),
				array( 'smilie_id' => null, 'smilie_name' => 'focus', ),
				array( 'smilie_id' => null, 'smilie_name' => 'friends', ),
				array( 'smilie_id' => null, 'smilie_name' => 'fright', ),
				array( 'smilie_id' => null, 'smilie_name' => 'giveheart', ),
				array( 'smilie_id' => null, 'smilie_name' => 'giverose', ),
				array( 'smilie_id' => null, 'smilie_name' => 'glasses', ),
				array( 'smilie_id' => null, 'smilie_name' => 'good', ),
				array( 'smilie_id' => null, 'smilie_name' => 'grin', ),
				array( 'smilie_id' => null, 'smilie_name' => 'high5', ),
				array( 'smilie_id' => null, 'smilie_name' => 'howdy', ),
				array( 'smilie_id' => null, 'smilie_name' => 'idk', ),
				array( 'smilie_id' => null, 'smilie_name' => 'jaw', ),
				array( 'smilie_id' => null, 'smilie_name' => 'joking', ),
				array( 'smilie_id' => null, 'smilie_name' => 'king', ),
				array( 'smilie_id' => null, 'smilie_name' => 'lol', ),
				array( 'smilie_id' => null, 'smilie_name' => 'lol2', ),
				array( 'smilie_id' => null, 'smilie_name' => 'mad', ),
				array( 'smilie_id' => null, 'smilie_name' => 'mad2', ),
				array( 'smilie_id' => null, 'smilie_name' => 'mail', ),
				array( 'smilie_id' => null, 'smilie_name' => 'mexwave', ),
				array( 'smilie_id' => null, 'smilie_name' => 'moon', ),
				array( 'smilie_id' => null, 'smilie_name' => 'morning', ),
				array( 'smilie_id' => null, 'smilie_name' => 'mrgreen', ),
				array( 'smilie_id' => null, 'smilie_name' => 'nono', ),
				array( 'smilie_id' => null, 'smilie_name' => 'ok', ),
				array( 'smilie_id' => null, 'smilie_name' => 'oldtimer', ),
				array( 'smilie_id' => null, 'smilie_name' => 'order', ),
				array( 'smilie_id' => null, 'smilie_name' => 'pardon', ),
				array( 'smilie_id' => null, 'smilie_name' => 'poke', ),
				array( 'smilie_id' => null, 'smilie_name' => 'pokeeye', ),
				array( 'smilie_id' => null, 'smilie_name' => 'pump', ),
				array( 'smilie_id' => null, 'smilie_name' => 'razz', ),
				array( 'smilie_id' => null, 'smilie_name' => 'read', ),
				array( 'smilie_id' => null, 'smilie_name' => 'redface', ),
				array( 'smilie_id' => null, 'smilie_name' => 'rofl', ),
				array( 'smilie_id' => null, 'smilie_name' => 'rolleyes', ),
				array( 'smilie_id' => null, 'smilie_name' => 'rotfl', ),
				array( 'smilie_id' => null, 'smilie_name' => 'rules', ),
				array( 'smilie_id' => null, 'smilie_name' => 'scared', ),
				array( 'smilie_id' => null, 'smilie_name' => 'scout', ),
				array( 'smilie_id' => null, 'smilie_name' => 'scratch', ),
				array( 'smilie_id' => null, 'smilie_name' => 'search', ),
				array( 'smilie_id' => null, 'smilie_name' => 'secret', ),
				array( 'smilie_id' => null, 'smilie_name' => 'shock', ),
				array( 'smilie_id' => null, 'smilie_name' => 'shout', ),
				array( 'smilie_id' => null, 'smilie_name' => 'sleeping', ),
				array( 'smilie_id' => null, 'smilie_name' => 'sleepy', ),
				array( 'smilie_id' => null, 'smilie_name' => 'sorry', ),
				array( 'smilie_id' => null, 'smilie_name' => 'taunt', ),
				array( 'smilie_id' => null, 'smilie_name' => 'tease', ),
				array( 'smilie_id' => null, 'smilie_name' => 'think', ),
				array( 'smilie_id' => null, 'smilie_name' => 'this', ),
				array( 'smilie_id' => null, 'smilie_name' => 'thumbsdown', ),
				array( 'smilie_id' => null, 'smilie_name' => 'thumbsup', ),
				array( 'smilie_id' => null, 'smilie_name' => 'tongue', ),
				array( 'smilie_id' => null, 'smilie_name' => 'twisted', ),
				array( 'smilie_id' => null, 'smilie_name' => 'unsure', ),
				array( 'smilie_id' => null, 'smilie_name' => 'vinsent', ),
				array( 'smilie_id' => null, 'smilie_name' => 'wacko', ),
				array( 'smilie_id' => null, 'smilie_name' => 'warning', ),
				array( 'smilie_id' => null, 'smilie_name' => 'wave', ),
				array( 'smilie_id' => null, 'smilie_name' => 'wavehat', ),
				array( 'smilie_id' => null, 'smilie_name' => 'weirdo', ),
				array( 'smilie_id' => null, 'smilie_name' => 'wink', ),
				array( 'smilie_id' => null, 'smilie_name' => 'write', ),
				array( 'smilie_id' => null, 'smilie_name' => 'yahoo', ),
				array( 'smilie_id' => null, 'smilie_name' => 'yes', ),
				array( 'smilie_id' => null, 'smilie_name' => 'zchair', ),
			);
			$this->db->sql_multi_insert($this->table_prefix . 'smiliesigns', $sql_ary);
		}
	}
}
