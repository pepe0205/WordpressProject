<?php 
 /* Plugin Activation */
        require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';
        require_once dirname( __FILE__ ) . '/plugins.php';
        /* Theme Options */
require_once dirname( __FILE__ ) . '/options.php';
define('REGISTER_STYLE',CORE . "/helpers");
define('THEME_FUNCTIONS',CORE . "/helpers");
//goi file function cua theme
require_once(THEME_FUNCTIONS . "/theme-function.php"); 
//goi file dang ky css vs js
require_once(REGISTER_STYLE . "/register-style.php");
