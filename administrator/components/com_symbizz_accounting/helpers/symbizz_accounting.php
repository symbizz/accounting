<?php
/**
 * @package    symbizz_accounting
 *
 * @author     herma <your@email.com>
 * @copyright  A copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://your.url.com
 */

use Joomla\CMS\Language\Text;

defined('_JEXEC') or die;

/**
 * Symbizz_accounting helper.
 *
 * @package     A package name
 * @since       1.0
 */
class Symbizz_accountingHelper
{
	/**
	 * Render submenu.
	 *
	 * @param   string  $vName  The name of the current view.
	 *
	 * @return  void.
	 *
	 * @since   1.0
	 */
	public function addSubmenu($vName)
	{
		JHtmlSidebar::addEntry(Text::_('COM_SYMBIZZ_ACCOUNTING'), 'index.php?option=com_symbizz_accounting&view=symbizz_accounting', $vName == 'symbizz_accounting');
	}
}
