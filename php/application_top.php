<?php

/**
 * File:    application_top.php
 * Author:  martin.sheeks
 * Date:    9/4/13
 * Version: 0.0.1
 */

define('COMPANY_NAME','Sheeks Software Solutions');
define('TITLE_SUFFIX',' | '.COMPANY_NAME);
define('META_KEYWORD_DEFAULT','web design, web development, web presence, identity, branding');
define('META_DESCRIPT_DEFAULT','Sheeks Software Solutions is a small development team devoted to helping their clients communicate with their customers.');

function meta_tags($kw, $dc) {
    if($kw == '') { $kw = META_KEYWORD_DEFAULT; }
    if($dc == '') { $dc = META_DESCRIPT_DEFAULT; }
    echo "<meta name='keywords' content='".$kw."'>".PHP_EOL;
    echo "<meta name='description' content='".$dc."'>".PHP_EOL;
}
