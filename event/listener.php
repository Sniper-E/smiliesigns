<?php
/**
* @package phpBB Extension - Smilie Signs
* @copyright (c) 2015 Sniper_E - http://sniper-e.com
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*/

namespace sniper\smiliesigns\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	/** @var \phpbb\auth\auth */
	protected $auth;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	/** @var \phpbb\request\request */
	protected $request;

	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\controller\helper */
	protected $controller_helper;

	/**
	* Constructor
	*
	* @param \phpbb\auth\auth					$auth
	* @param \phpbb\template\template			$template
	* @param \phpbb\user						$user
	* @param \phpbb\db\driver\driver_interface	$db
	* @param \phpbb\request\request				$request
	* @param \phpbb\config\config				$config
	* @param \phpbb\controller\helper			$controller_helper
	*
	*/
	public function __construct(
		\phpbb\auth\auth $auth,
		\phpbb\template\template $template,
		\phpbb\user $user,
		\phpbb\db\driver\driver_interface $db,
		\phpbb\request\request $request,
		\phpbb\config\config $config,
		\phpbb\controller\helper $controller_helper
	)
	{
		$this->auth 					= $auth;
		$this->template 				= $template;
		$this->user 					= $user;
		$this->db 						= $db;
		$this->request 					= $request;
		$this->config 					= $config;
		$this->controller_helper 		= $controller_helper;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.adm_page_header'          => 'adm_page_header',
			'core.page_header'              => 'page_header',
			'core.permissions'              => 'permissions',
		);
	}

	public function adm_page_header($event)
	{
		$this->user->add_lang_ext('sniper/smiliesigns', 'common');

		$this->template->assign_vars(array(
			'U_SMILIESIGNS'             => $this->controller_helper->route('sniper_smiliesigns_controller'),
			'SMILIESIGNS_WIDTH'         => $this->config['smiliesigns_width'],
			'SMILIESIGNS_HEIGHT'        => $this->config['smiliesigns_height'],
		));
	}

	public function page_header($event)
	{
		$this->user->add_lang_ext('sniper/smiliesigns', 'common');

		$this->template->assign_vars(array(
			'U_SMILIESIGNS'             => $this->controller_helper->route('sniper_smiliesigns_controller'),
			'SMILIESIGNS_VALUE'         => $this->config['smiliesigns_value'],
			'SMILIESIGNS_WIDTH'         => $this->config['smiliesigns_width'],
			'SMILIESIGNS_HEIGHT'        => $this->config['smiliesigns_height'],
			'U_USE_SMILIE_SIGNS_BBCODE' => $this->auth->acl_get('u_use_smilie_signs_bbcode') ? true : false,
		));
	}

	public function permissions($event)
	{
		$permissions = $event['permissions'];
		$permissions['u_use_smilie_signs_bbcode'] = array('lang' => 'ACL_U_USE_SMILIE_SIGNS_BBCODE', 'cat' => 'post');
		$event['permissions'] = $permissions;
	}
}
