<?php
/**
 * Tg Framework 
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @copyright  Copyright (c) 2009 Thomas Garrood (http://www.garrood.com)
 * @license    New BSD License
 */


class Tg_Content_Capture_Element_Date extends Tg_Content_Capture_Element_Abstract {	
	
	function __construct (&$content, $xmlNode) {
		parent::__construct ($content, $xmlNode);	
	}
	
	function HTML () {
		return trim($this->value);
	}
	
	function toXML () {
		return '<field type="string" name="'.$this->name.'">'.$this->value.'</field>'."\n";
	}
	
	function debug () {
		echo '&nbsp;&nbsp;&nbsp;CMSFieldString [id:'.$this->name.', type:'.$this->type.']<br>';
		echo '&nbsp;&nbsp;&nbsp;&nbsp;value: '.$this->value.'<br>';
	}
}
?>