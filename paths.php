<?php
    define('PROJECT', '/movieshop_fw_php/');

    //SITE_ROOT
    define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] . PROJECT);

    //UTILS
    define('UTILS', SITE_ROOT . 'utils/');

    //SITE_PATH GENERAL
    define('SITE_PATH', 'http://' . $_SERVER['HTTP_HOST'] . PROJECT);

    //SITE_PATH ADMIN
    define('ADMIN_SITE_PATH', SITE_PATH . 'modules/admin/');

    //SITE_PATH CLIENT
    define('CLIENT_SITE_PATH', SITE_PATH . 'modules/client/');

    //MODULES ADMIN
    define('ADMIN_MODULES_PATH', SITE_ROOT . 'modules/admin/modules/');

    //MODULES CLIENT
    define('CLIENT_MODULES_PATH', SITE_ROOT . 'modules/client/modules/');

    //MODEL
    define('MODEL_PATH', SITE_ROOT . 'model/');

    //CLIENT VIEW
    define('CLIENT_VIEW_PATH', SITE_ROOT . 'modules/client/view/');

    //PRETTY URLS ACTIVE
    define('PRETTY_URLS', TRUE);

    //CONTACT
    define('CLIENT_CONTACT_PATH', CLIENT_MODULES_PATH . 'contact/');
    define('CLIENT_CONTACT_VIEW_PATH', CLIENT_MODULES_PATH . 'contact/view/');

    //HOME
    define('CLIENT_HOME_PATH', CLIENT_MODULES_PATH . 'home/');
    define('CLIENT_HOME_VIEW_PATH', CLIENT_MODULES_PATH . 'home/view/');
    define('CLIENT_HOME_MODEL', CLIENT_MODULES_PATH . 'home/model/model/');

    //SHOP
    define('CLIENT_SHOP_PATH', CLIENT_MODULES_PATH . 'shop/');
    define('CLIENT_SHOP_VIEW_PATH', CLIENT_MODULES_PATH . 'shop/view/');
    define('CLIENT_SHOP_MODEL', CLIENT_MODULES_PATH . 'shop/model/model/');
