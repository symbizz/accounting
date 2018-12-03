<?php
/**
 * @package    symbizz_accounting
 *
 * @author     herma <your@email.com>
 * @copyright  A copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://your.url.com
 */

use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;
use Joomla\CMS\MVC\View\HtmlView;

defined('_JEXEC') or die;

/**
 * Symbizz_accounting view.
 *
 * @package  symbizz_accounting
 * @since    1.0
 */
class Symbizz_accountingViewSymbizz_accounting extends HtmlView
{
	/**
	 * Symbizz_accounting helper
	 *
	 * @var    Symbizz_accountingHelper
	 * @since  1.0
	 */
	protected $helper;

	/**
	 * The sidebar to show
	 *
	 * @var    string
	 * @since  1.0
	 */
	protected $sidebar = '';

	/**
	 * Execute and display a template script.
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  mixed  A string if successful, otherwise a JError object.
	 *
	 * @see     fetch()
	 * @since   1.0
	 */
	public function display($tpl = null)
	{
		// Show the toolbar
		$this->toolbar();

		// Show the sidebar
		$this->helper = new Symbizz_accountingHelper;
		$this->helper->addSubmenu('symbizz_accounting');
		$this->sidebar = JHtmlSidebar::render();

		// Display it all
		return parent::display($tpl);
	}

	/**
	 * Displays a toolbar for a specific page.
	 *
	 * @return  void.
	 *
	 * @since   1.0
	 */
	private function toolbar()
	{
		JToolBarHelper::title(Text::_('COM_SYMBIZZ_ACCOUNTING'), '');

		// Options button.
		if (Factory::getUser()->authorise('core.admin', 'com_symbizz_accounting'))
		{
			JToolBarHelper::preferences('com_symbizz_accounting');
		}
	}
}
