<?php
/**
* @package phpBB Extension - Smilie Signs
* @copyright (c) 2015 Sniper_E - http://sniper-e.com
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*/

namespace sniper\smiliesigns\controller;

class smiliesigns
{
	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/** @var \phpbb\auth\auth */
	protected $auth;

	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	/** @var \phpbb\request\request */
	protected $request;

	/** @var \phpbb\pagination */
	protected $pagination;

	/** @var \phpbb\controller\helper */
	protected $helper;

	/** @var \phpbb\config\config */
	protected $config;

	/**
	* The database tables
	*
	* @var string
	*/
	protected $smiliesigns_table;

	/**
	* Constructor
	*
	* @param \phpbb\template\template			$template
	* @param \phpbb\user						$user
	* @param \phpbb\auth\auth					$auth
	* @param \phpbb\db\driver\driver_interface	$db
	* @param \phpbb\request\request				$request
	* @param \phpbb\pagination					$pagination
	* @param \phpbb\controller\helper			$helper
	* @param \phpbb\config\config				$config
	* @param string								$fontawesome_table
	*
	*/
	public function __construct(
		\phpbb\template\template $template,
		\phpbb\user $user,
		\phpbb\auth\auth $auth,
		\phpbb\db\driver\driver_interface $db,
		\phpbb\request\request $request,
		\phpbb\pagination $pagination,
		\phpbb\controller\helper $helper,
		\phpbb\config\config $config,
		$smiliesigns_table
	)
	{
		$this->template 				= $template;
		$this->user 					= $user;
		$this->auth 					= $auth;
		$this->db 						= $db;
		$this->request 					= $request;
		$this->pagination 				= $pagination;
		$this->helper 					= $helper;
		$this->config 					= $config;
		$this->smiliesigns_table    	= $smiliesigns_table;
	}

	public function handle_smiliesigns()
	{
		// Add lang file
		$this->user->add_lang_ext('sniper/smiliesigns', 'common');

		if (!$this->config['smiliesigns_allow'])
		{
			throw new \phpbb\exception\http_exception(400, 'SMILIESIGNS_DISABLE');
		}

		if (!$this->auth->acl_get('u_use_smilie_signs_bbcode'))
		{
			throw new \phpbb\exception\http_exception(403, 'SMILIESIGNS_NOACCESS');
		}
		else
		{
			$fileid = $this->request->variable('file', 0);
			$start = $this->request->variable('start', 0);

			// Pagination number from ACP
			$dll = $this->config['smiliesigns_value'];

			// Generate pagination
			$sql = 'SELECT COUNT(smilie_id) AS total_smiliesigns
				FROM ' . $this->smiliesigns_table;
			$result = $this->db->sql_query($sql);
			$total_smiliesigns = $this->db->sql_fetchfield('total_smiliesigns');
			$this->db->sql_freeresult($result);

			$sql = 'SELECT smilie_name
				FROM ' . $this->smiliesigns_table . '
				ORDER BY smilie_name';
			$top_result = $this->db->sql_query_limit($sql, $dll, $start);

			while ($row = $this->db->sql_fetchrow($top_result))
			{
				$this->template->assign_block_vars('smiliesigns', array(
					'SMILIE_NAME' => $row['smilie_name'],
				));
			}
			$this->db->sql_freeresult($top_result);
		}

		$pagination_url = $this->helper->route('sniper_smiliesigns_controller');

		//Start pagination
		$this->pagination->generate_template_pagination($pagination_url, 'pagination', 'start', $total_smiliesigns, $dll, $start);
		$this->template->assign_vars(array(
			'SMILIESIGNS_COUNT'    => ($total_smiliesigns == 1) ? $this->user->lang['SMILIESIGNS_COUNT'] : $this->user->lang('SMILIESIGNS_COUNTS', $total_smiliesigns),
			'SMILIESIGNS_VERSION'  => $this->config['smiliesigns_version'],
		));

		return $this->helper->render('smiliesigns.html', $this->user->lang('SMILIE_SIGNS_TITLE'));
	}
}
