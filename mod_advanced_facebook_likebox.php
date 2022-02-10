<?php
/*------------------------------------------------------------------------
# mod_advanced_facebook_likebox - Advanced Facebook Like Box
# ------------------------------------------------------------------------
# @author      Kataev Yaroslav
# @version     1.2.0
# @description Facebook like box placement module on the website page.
# @copyright   Copyright (C) 2022 Kataev Yaroslav. All rights reserved.
# @license     GNU General Public License version 3; see LICENSE.txt
-------------------------------------------------------------------------*/

use Joomla\CMS\Helper\ModuleHelper;

// no direct access
defined( '_JEXEC' ) or die;

$layout = $params->get('layout', 'default');

require JModuleHelper::getLayoutPath('mod_advanced_facebook_likebox', $layout);
