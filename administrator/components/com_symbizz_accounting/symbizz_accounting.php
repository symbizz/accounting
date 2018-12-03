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
use Joomla\CMS\MVC\Controller\BaseController;

defined('_JEXEC') or die;

// Access check.
if (!Factory::getUser()->authorise('core.manage', 'com_symbizz_accounting'))
{
	throw new InvalidArgumentException(Text::_('JERROR_ALERTNOAUTHOR'), 404);
}

// Require the helper
require_once JPATH_COMPONENT_ADMINISTRATOR . '/helpers/symbizz_accounting.php';

// Execute the task
$controller = BaseController::getInstance('symbizz_accounting');
$controller->execute(Factory::getApplication()->input->get('task'));
$controller->redirect();
