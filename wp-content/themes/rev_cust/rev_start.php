<?php

include(get_stylesheet_directory() . '/lang/lang.php');

$doc_root = $_SERVER['DOCUMENT_ROOT'] ;

$rev_cust_base = ABSPATH . 'wp-content/themes/rev_cust';

// $mydir = dirname(__FILE__) . '/images';

$base_index_url = "http://" . $_SERVER['SERVER_NAME'];
$base_url = "http://" . $_SERVER['SERVER_NAME'];
/** Our content array. We'll use it to pass content from one page to another **/
$rev_args = [];

?>