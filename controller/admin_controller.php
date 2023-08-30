<?php
/**
* @package phpBB Extension - Smilie Signs
* @copyright (c) 2019 Sniper_E - http://sniper-e.com
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*/

namespace sniper\smiliesigns\controller;

class admin_controller
{
	/** @var \phpbb\template\template */
	protected $template;
	/** @var \phpbb\user */
	protected $user;
	/** @var \phpbb\auth\auth */
	protected $auth;
	/** @var \phpbb\request\request */
	protected $request;
	/** @var \phpbb\config\config */
	protected $config;
	/** @var \phpbb\log\log */
	protected $log;

	/**
	* Constructor
	*
	* @param \phpbb\template\template    $template
	* @param \phpbb\user                 $user
	* @param \phpbb\auth\auth            $auth
	* @param \phpbb\request\request      $request
	* @param \phpbb\config\config        $config
	* @param \phpbb\log\log              $log

	*
	*/
	public function __construct(
		\phpbb\template\template $template,
		\phpbb\user $user,
		\phpbb\auth\auth $auth,
		\phpbb\request\request $request,
		\phpbb\config\config $config,
		\phpbb\log\log $log
	)
	{
		$this->template  = $template;
		$this->user      = $user;
		$this->auth      = $auth;
		$this->request 	 = $request;
		$this->config    = $config;
		$this->log       = $log;
	}

	public function display_options()
	{
		add_form_key('acp_smiliesigns');

		// Is the form being submitted to us?
		if ($this->request->is_set_post('submit'))
		{
			if (!check_form_key('acp_smiliesigns'))
			{
				trigger_error('FORM_INVALID');
			}

			// Set the options the user configured
			$this->set_options();

			// Add option settings change action to the admin log
			$this->log->add('admin', $this->user->data['user_id'], $this->user->ip, 'LOG_SMILIESIGNS_SAVED');

			trigger_error($this->user->lang('SMILIESIGNS_SAVED') . adm_back_link($this->u_action));
		}

		$this->template->assign_vars(array(
			'SMILIESIGNS_ALLOW'    => $this->config['smiliesigns_allow'],
			'SMILIESIGNS_VALUE'    => $this->config['smiliesigns_value'],
			'SMILIESIGNS_WIDTH'    => $this->config['smiliesigns_width'],
			'SMILIESIGNS_HEIGHT'   => $this->config['smiliesigns_height'],
			'SMILIESIGNS_VERSION'  => $this->config['smiliesigns_version'],
			'U_ACTION'             => $this->u_action,
		));
	}

	protected function set_options()
	{
		$this->config->set('smiliesigns_allow',  $this->request->variable('smiliesigns_allow', ''));
		$this->config->set('smiliesigns_value',  $this->request->variable('smiliesigns_value', ''));
		$this->config->set('smiliesigns_width',  $this->request->variable('smiliesigns_width', ''));
		$this->config->set('smiliesigns_height', $this->request->variable('smiliesigns_height', ''));
	}

	public function set_page_url($u_action)
	{
		$this->u_action = $u_action;
	}
}
