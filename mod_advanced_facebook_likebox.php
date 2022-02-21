<?php
/**
*-------------------------------------------------------------------------------------------
* mod_advanced_facebook_likebox - Advanced Facebook Like Box
*-------------------------------------------------------------------------------------------
* @author      Kataev Yaroslav
* @version     1.6.0
* @description Facebook like box placement module on the website page.
* @copyright   Copyright (C) 2022 Kataev Yaroslav. All rights reserved.
* @license     license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html; see LICENSE.txt
*-------------------------------------------------------------------------------------------
**/

// no direct access
defined( '_JEXEC' ) or die;

$layout = $params->get('layout', 'default');

require JModuleHelper::getLayoutPath('mod_advanced_facebook_likebox', $layout);
