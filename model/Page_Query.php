<?php
/**
 * This file is part of OpenClinic
 *
 * Copyright (c) 2002-2005 jact
 * Licensed under the GNU GPL. For full terms see the file LICENSE.
 *
 * $Id: Page_Query.php,v 1.2 2005/06/14 16:51:08 jact Exp $
 */

/**
 * Page_Query.php
 *
 * Contains the class Page_Query (pagination methods)
 *
 * Author: jact <jachavar@gmail.com>
 * Author: Jorge L�pez Herranz <lopez.herranz@gmail.com>
 */

require_once("../classes/Query.php");

/**
 * Page_Query contains pagination methods and properties
 *
 * @author jact <jachavar@gmail.com>
 * @author Jorge L�pez Herranz <lopez.herranz@gmail.com>
 * @access public
 * @see OPEN_SETTING_ITEMS_PER_PAGE
 * @since 0.8
 *
 * Methods:
 *  void setItemsPerPage(int $value)
 *  int getCurrentRow(void)
 *  int getRowCount(void)
 *  int getPageCount(void)
 */
class Page_Query extends Query
{
  // (These variables are 'protected'. Only can be used by inherited classes)
  var $_itemsPerPage = OPEN_SETTING_ITEMS_PER_PAGE;
  var $_rowNumber = 0;
  var $_currentRow = 0;
  var $_currentPage = 0;
  var $_rowCount = 0;
  var $_pageCount = 0;

  /**
   * void setItemsPerPage(int $value)
   *
   * @param int $value
   * @access public
   */
  function setItemsPerPage($value)
  {
    $this->_itemsPerPage = intval($value);
  }

  /**
   * int getCurrentRow(void)
   *
   * @return int
   * @access public
   */
  function getCurrentRow()
  {
    return intval($this->_currentRow);
  }

  /**
   * int getRowCount(void)
   *
   * @return int
   * @access public
   */
  function getRowCount()
  {
    return intval($this->_rowCount);
  }

  /**
   * int getPageCount(void)
   *
   * @return int
   * @access public
   */
  function getPageCount()
  {
    return intval($this->_pageCount);
  }
} // end class
?>