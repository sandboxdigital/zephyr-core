<?php
/**
 * Tg Site Page Database Gateway Class 
 *
 * @copyright  Copyright (c) 2009 Thomas Garrood (http://www.garrood.com)
 *
 */

require_once 'Zend/Db/Table/Abstract.php';

class Tg_Site_Db_PageRoles extends Tg_Db_Table
{
	protected $_name = 'site_page_role';
	protected $_sequence = true;
}
?>