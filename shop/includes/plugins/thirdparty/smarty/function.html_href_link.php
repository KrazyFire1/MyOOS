<?php
/* ----------------------------------------------------------------------
   $Id: function.html_href_link.php,v 1.1 2007/06/08 13:34:16 r23 Exp $

   OOS [OSIS Online Shop]
   http://www.oos-shop.de/

   Copyright (c) 2003 - 2007 by the OOS Development Team.
   ----------------------------------------------------------------------
   Based on:

   File: html_output.php,v 1.49 2003/02/11 01:31:02 hpdl 
   ----------------------------------------------------------------------
   osCommerce, Open Source E-Commerce Solutions
   http://www.oscommerce.com

   Copyright (c) 2003 osCommerce
   ----------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------- */
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */


/**
 * Smarty {html_href_link} function plugin
 *
 * Type:     function
 * Name:     html_href_link
 * @Version:  $Revision: 1.1 $ - changed by $Author: r23 $ on $Date: 2007/06/08 13:34:16 $
 * -------------------------------------------------------------
 */

function smarty_function_html_href_link($params, &$smarty)
{
    global $oEvent, $spider_kill_sid;

    require_once $smarty->_get_plugin_filepath('shared','escape_special_chars');

    $modul = '';
    $file = '';
    $parameters = '';
    $connection = 'NONSSL';
    $add_session_id = 'true';
    $search_engine_safe = 'true';

    foreach($params as $_key => $_val) {
      switch($_key) {
        case 'modul':
          if(!is_array($_val)) {
            $$_key = smarty_function_escape_special_chars($_val);
          } else {
            $smarty->trigger_error("html_href_link: Unable to determine the page link!", E_USER_NOTICE);
          }
          break;

        case 'file':
          if(!is_array($_val)) {
            $$_key = smarty_function_escape_special_chars($_val);
          } else {
            $smarty->trigger_error("html_href_link: Unable to determine the page link!", E_USER_NOTICE);
          }
          break;

        case 'oos_get':
        case 'addentry_id': 
        case 'connection':
        case 'add_session_id':
        case 'search_engine_safe':
            $$_key = (string)$_val;
            break;

        case 'anchor':
            $anchor = smarty_function_escape_special_chars($_val);
            break;

        default:
          if(!is_array($_val)) {
            $parameters .= $_key.'='.smarty_function_escape_special_chars($_val).'&amp;';
          } else {
            $smarty->trigger_error("html_href_link: parameters '$_key' cannot be an array", E_USER_NOTICE);
          }
          break;
       }
    }


    if (empty($modul)) {
      $smarty->trigger_error("html_href_link: Unable to determine the page link!", E_USER_NOTICE);
    }

    if (empty($file)) {
      $smarty->trigger_error("html_href_link: Unable to determine the page link!", E_USER_NOTICE);
    }

    if (isset($addentry_id)) {
      $addentry_id = $addentry_id + 2;
      $parameters .= 'entry_id='.$addentry_id.'&amp;';
    }
    if (isset($oos_get)) {
      $parameters .= $oos_get;
    }

    $file = trim($file);

    if ($connection == 'NONSSL') {
      $link = OOS_HTTP_SERVER . OOS_SHOP;
    } elseif ($connection == 'SSL') {
      if (ENABLE_SSL == 'true') {
        $link = OOS_HTTPS_SERVER . OOS_SHOP;
      } else {
        $link = OOS_HTTP_SERVER . OOS_SHOP;
      }
    } else {
      $smarty->trigger_error("html_href_link: Unable to determine the page link!", E_USER_NOTICE);
    }

    if (isset($parameters)) {
      $link .= 'index.php?mp=' . $modul . '&amp;file=' . $file . '&amp;' . oos_output_string($parameters);
    } else {
      $link .= 'index.php?mp=' . $modul . '&amp;file=' . $file;
    }

    $separator = '&amp;';

    while ( (substr($link, -5) == '&amp;') || (substr($link, -1) == '?') ) {
      if (substr($link, -1) == '?') {
        $link = substr($link, 0, -1);
      } else {
        $link = substr($link, 0, -5);
      }
    }

    if (isset($anchor)) {
      $link .= '#' . $anchor;
    }


// Add the session ID when moving from HTTP and HTTPS servers or when SID is defined
    if ( (ENABLE_SSL == 'true' ) && ($connection == 'SSL') && ($add_session_id == 'true') ) {
      $_sid = oos_session_name() . '=' . oos_session_id();
    } elseif ( ($add_session_id == 'true') && (oos_is_not_null(SID)) ) {
      $_sid = SID;
    }

    if ( $spider_kill_sid == 'true') $_sid = NULL;


    if ( ($search_engine_safe == 'true') &&  $oEvent->installed_plugin('sefu') ) {
      $link = str_replace(array('?', '&amp;', '='), '/', $link);

      $separator = '?';

      $pos = strpos ($link, 'action');
      if ($pos === false) {
        $url_rewrite = new url_rewrite;
        $link = $url_rewrite->transform_uri($link);
      }
    }

    if (isset($_sid)) {
      $link .= $separator . oos_output_string($_sid);
    }


    return $link;
  }

?>