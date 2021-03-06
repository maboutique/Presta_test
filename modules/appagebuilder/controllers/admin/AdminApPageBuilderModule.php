<?php
/**
 * 2007-2015 Apollotheme
 *
 * NOTICE OF LICENSE
 *
 * ApPageBuilder is module help you can build content for your shop
 *
 * DISCLAIMER
 *
 *  @author    Apollotheme <apollotheme@gmail.com>
 *  @copyright 2007-2019 Apollotheme
 *  @license   http://apollotheme.com - prestashop template provider
 */

if (!defined('_PS_VERSION_')) {
    # module validation
    exit;
}

class AdminApPageBuilderModuleController extends ModuleAdminControllerCore
{

    public function __construct()
    {
        $url = 'index.php?controller=AdminModules&configure=appagebuilder&token='.Tools::getAdminTokenLite('AdminModules');
        Tools::redirectAdmin($url);
        parent::__construct();
    }
}
