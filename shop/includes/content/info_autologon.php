<?php
/* ----------------------------------------------------------------------
   $Id: info_autologon.php 407 2013-06-11 14:57:53Z r23 $

   MyOOS [Shopsystem]
   http://www.oos-shop.de/

   Copyright (c) 2003 - 2013 by the MyOOS Development Team.
   ----------------------------------------------------------------------
   Based on:

   File: info_autologon.php,v 1.01 2002/10/08 12:00:00
   ----------------------------------------------------------------------
   osCommerce, Open Source E-Commerce Solutions
   http://www.oscommerce.com

   Copyright (c) 2002 osCommerce
   Copyright (c) 2002 HMCservices
   ----------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------- */


  $aOption['info_autologon'] = $sTheme . '/system/info_autologon.tpl';

  //smarty
  require_once MYOOS_INCLUDE_PATH . '/includes/classes/class_template.php';
  $oSmarty =& new Template;

  $oSmarty->setCaching(true);
  $info_autologon_id = $sTheme . '|info_autologon|' . $sLanguage;

  if (!$oSmarty->isCached($aOption['info_autologon'], $info_autologon_id )) {
    require_once MYOOS_INCLUDE_PATH . '/includes/languages/' . $sLanguage . '/main_info_autologon.php';

    // assign Smarty variables;
    $oSmarty->assign('oos_base', (($request_type == 'SSL') ? OOS_HTTPS_SERVER : OOS_HTTP_SERVER) . OOS_SHOP);
    $oSmarty->assign('lang', $aLang);
    $oSmarty->assign('theme_image', 'themes/' . $sTheme . '/images');
    $oSmarty->assign('theme_css', 'themes/' . $sTheme);
  }

// display the template
  $oSmarty->display($aOption['info_autologon'], $info_autologon_id);
?>
