<?php
/* ----------------------------------------------------------------------

   MyOOS [Shopsystem]
   http://www.oos-shop.de/

   Copyright (c) 2003 - 2014 by the MyOOS Development Team.
   ----------------------------------------------------------------------
   Based on:

   File: application_top.php,v 1.264 2003/02/17 16:37:52 hpdl
   ----------------------------------------------------------------------
   osCommerce, Open Source E-Commerce Solutions
   http://www.oscommerce.com

   Copyright (c) 2003 osCommerce
   ----------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------- */

/** ensure this file is being included by a parent file */
defined( 'OOS_VALID_MOD' ) OR die( 'Direct Access to this location is not allowed.' );

$aContents = array();
$prefix_filename = '';
if (!$prefix_filename == '') $prefix_filename = $prefix_filename . '_';

$aContents['conditions_download'] = $prefix_filename . 'conditions.pdf';   
   
//account
$aContents['account_history'] = $prefix_filename . 'account_history';
$aContents['account_history_info'] = $prefix_filename . 'account_history_info';
$aContents['account_address_book'] = $prefix_filename . 'account_address_book';
$aContents['account_address_book_process'] = $prefix_filename . 'account_address_book_process';
$aContents['account_my_wishlist'] = $prefix_filename . 'account_my_wishlist';
$aContents['account_order_history'] = $prefix_filename . 'account_order_history';

//admin
$aContents['admin_login'] = $prefix_filename . 'admin_login';

//gv
$aContents['gv_faq'] = $prefix_filename . 'gv_faq';
$aContents['gv_redeem'] = $prefix_filename . 'gv_redeem';
$aContents['gv_send'] = $prefix_filename . 'gv_send';
$aContents['popup_coupon_help'] = $prefix_filename . 'popup_coupon_help';

//info
$aContents['info_down_for_maintenance'] = $prefix_filename . 'info_down_for_maintenance';
$aContents['info_max_order'] = $prefix_filename . 'info_max_order';
$aContents['sitemap'] = $prefix_filename . 'sitemap';
$aContents['information'] = $prefix_filename . 'information';
  
//main
$aContents['main'] = $prefix_filename . 'main';
$aContents['shop'] = $prefix_filename . 'shop';
$aContents['redirect'] = $prefix_filename . 'redirect';
$aContents['shopping_cart'] = $prefix_filename . 'shopping_cart';
$aContents['wishlist'] = $prefix_filename . 'wishlist';
$aContents['contact_us'] = $prefix_filename . 'contact_us';

//newsletters
$aContents['newsletters'] = $prefix_filename . 'newsletters';
$aContents['newsletters_subscribe'] = $prefix_filename . 'newsletters_subscribe';
$aContents['newsletters_unsubscribe'] = $prefix_filename . 'newsletters_unsubscribe';
$aContents['subscription_center'] = $prefix_filename . 'subscription_center';

//products
$aContents['product_info'] = $prefix_filename . 'product_info';
$aContents['products_new'] = $prefix_filename . 'products_new';
$aContents['specials'] = $prefix_filename . 'specials';
$aContents['popup_image'] = $prefix_filename . 'popup_image';
$aContents['popup_print'] = $prefix_filename . 'popup_print';

//pub
$aContents['download'] = $prefix_filename . 'download';

//reviews
$aContents['reviews'] = $prefix_filename . 'reviews';
$aContents['product_reviews'] = $prefix_filename . 'product_reviews';
$aContents['product_reviews_info'] = $prefix_filename . 'product_reviews_info';
$aContents['product_reviews_write'] = $prefix_filename . 'product_reviews_write';

//search
$aContents['advanced_search'] = $prefix_filename . 'advanced_search';
$aContents['advanced_search_result'] = $prefix_filename . 'advanced_search_result';
$aContents['popup_search_help'] = $prefix_filename . 'popup_search_help';

//user
$aContents['account'] = $prefix_filename . 'account';
$aContents['account_edit'] = $prefix_filename . 'account_edit';
$aContents['account_edit_process'] = $prefix_filename . 'account_edit_process';
$aContents['create_account'] = $prefix_filename . 'create_account'; 
$aContents['create_account_process'] = $prefix_filename . 'create_account_process';
$aContents['create_account_success'] = $prefix_filename . 'create_account_success';
$aContents['login'] = $prefix_filename . 'login';
$aContents['logoff'] = $prefix_filename . 'logoff';
$aContents['password_forgotten'] = $prefix_filename . 'password_forgotten';
$aContents['product_notifications'] = $prefix_filename . 'product_notifications';
$aContents['yourstore'] = $prefix_filename . 'yourstore';
$aContents['customers_image'] = $prefix_filename . 'customers_image';

//checkout
$aContents['checkout_confirmation'] = $prefix_filename . 'checkout_confirmation';
$aContents['checkout_payment'] = $prefix_filename . 'checkout_payment';
$aContents['checkout_payment_address'] = $prefix_filename . 'checkout_payment_address';
$aContents['checkout_process'] = $prefix_filename . 'checkout_process';
$aContents['checkout_shipping'] = $prefix_filename . 'checkout_shipping';
$aContents['checkout_shipping_address'] = $prefix_filename . 'checkout_shipping_address';
$aContents['checkout_success'] = $prefix_filename . 'checkout_success';

