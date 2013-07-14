<?php
/* ----------------------------------------------------------------------
   $Id: info_shopping_cart.php 407 2013-06-11 14:57:53Z r23 $

   MyOOS [Shopsystem]
   http://www.oos-shop.de/

   Copyright (c) 2003 - 2013 by the MyOOS Development Team.
   ----------------------------------------------------------------------
   Based on:

   File: info_shopping_cart.php,v 1.19 2003/02/13 03:01:48 hpdl 
   ----------------------------------------------------------------------
   osCommerce, Open Source E-Commerce Solutions
   http://www.oscommerce.com

   Copyright (c) 2003 osCommerce
   ----------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------- */


  $aOption['info_shopping_cart'] = $sTheme . '/system/info_shopping_cart.tpl';

  //smarty
  require_once MYOOS_INCLUDE_PATH . '/includes/classes/class_template.php';
  $oSmarty =& new Template;

  $oSmarty->setCaching(true);
  $info_shopping_cart_id = $sTheme . '|info_shopping_cart|' . $sLanguage;

  if (!$oSmarty->isCached($aOption['info_shopping_cart'], $info_shopping_cart_id )) {
    require_once MYOOS_INCLUDE_PATH . '/includes/languages/' . $sLanguage . '/main_info_shopping_cart.php';

    // assign Smarty variables;
    $oSmarty->assign('oos_base', (($request_type == 'SSL') ? OOS_HTTPS_SERVER : OOS_HTTP_SERVER) . OOS_SHOP);
    $oSmarty->assign('lang', $aLang);
    $oSmarty->assign('theme_image', 'themes/' . $sTheme . '/images');
    $oSmarty->assign('theme_css', 'themes/' . $sTheme);
  }

// display the template
  $oSmarty->display($aOption['info_shopping_cart'], $info_shopping_cart_id);
?>
