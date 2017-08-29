<?php
/**
* @package Smilie Signs
* @copyright (c) 2015 Sniper_E - http://sniper-e.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*/

namespace sniper\smiliesigns;

/**
* Extension class for custom enable/disable/purge actions
*/

class ext extends \phpbb\extension\base
{
	/**
	* Enable extension if phpBB version requirement is met
	*
	* @return bool
	* @access public
	*/
	public function is_enableable()
	{
		$config = $this->container->get('config');
		return version_compare($config['version'], '>=3.1.2');
	}
}