<?php
/**
 * @package    symbizz_accounting
 *
 * @author     herma <your@email.com>
 * @copyright  A copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://your.url.com
 */

use Joomla\CMS\Table\Table;

defined('_JEXEC') or die;

/**
 * Symbizz_accounting table.
 *
 * @since       1.0
 */
class TableSymbizz_accounting extends Table
{
	/**
	 * Constructor
	 *
	 * @param   JDatabaseDriver  $db  Database driver object.
	 *
	 * @since   1.0
	 */
	public function __construct(JDatabaseDriver $db)
	{
		parent::__construct('#__symbizz_accounting_items', 'item_id', $db);
	}
}