<?php
/**
*-------------------------------------------------------------------------------------------
* mod_advanced_facebook_likebox - Advanced Facebook Like Box
*-------------------------------------------------------------------------------------------
* @author      Kataev Yaroslav
* @version     1.7.0
* @description Facebook like box placement module on the website page.
* @copyright   Copyright (C) 2022 Kataev Yaroslav. All rights reserved.
* @license     license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html; see LICENSE.txt
*-------------------------------------------------------------------------------------------
**/

// no direct access
defined( '_JEXEC' ) or die;

$href = trim($params->get('href', 'http://www.facebook.com/Facebook'));
$pageName = trim($params->get('pageName', 'Facebook Developers'));
$width = intval($params->get('width', 340));
$height = intval($params->get('height', 500));
$lang = $params->get('lang', 'en_GB');

$showFaces = (boolean)$params->get('showFaces', 1);
$tabsTimeline = (boolean)$params->get('tabsTimeline', 0);
$tabsEvents = (boolean)$params->get('tabsEvents', 0);
$tabsMessage = (boolean)$params->get('tabsMessages', 0);
$showHeader = (boolean)$params->get('showHeader', 0);
$adaptContainerWidth = (boolean)$params->get('adaptContainerWidth', 1);
$smallHeader = (boolean)$params->get('smallHeader', 0);
$hideCta = (boolean)$params->get('hideCta', 0);
$moduleCenterHorizontally = (boolean)$params->get('moduleCenterHorizontally', 0);

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx', ''));

$dataTabs = "";
if ($tabsTimeline) {$dataTabs = "timeline";}
if ($tabsEvents) {
	if (!empty($dataTabs)) {$dataTabs .= ",events";}
	else {$dataTabs = "events";}
}
if ($tabsMessages) {
	if (!empty($dataTabs)) {$dataTabs .= ",messages";}
	else {$dataTabs = "messages";}
}
if ($width < 180) {$width = 180;}
if ($width > 500) {$width = 500;}
if ($height < 70) {$height = 70;}
	    
if (!empty($moduleclass_sfx) or $moduleCenterHorizontally) {
	$divClass = "<div";
	if ($moduleCenterHorizontally) {$divClass .= ' align="center"';}
	if (!empty($moduleclass_sfx)) {$divClass .= ' class="'.$moduleclass_sfx.'"';}
	$divClass .= ">";
}
?>
<div id="fb-root"></div>
<script>
	(function(d){
  		var js, id = 'facebook-jssdk'; 
		if (d.getElementById(id)) {return;}
		js = d.createElement('script'); 
		js.id = id;
		js.async = true;
		js.src = "https://connect.facebook.net/<?php echo $lang; ?>/sdk.js#xfbml=1&version=v12.0";
		d.getElementsByTagName('head')[0].appendChild(js);
	}(document));
</script>
<?php
if (!empty($moduleclass_sfx) or $moduleCenterHorizontally) {echo $divClass;}
?>
<div class="fb-page" data-href="<?php echo $href; ?>" data-tabs="<?php echo $dataTabs ?>" data-width="<?php echo $width; ?>" data-height="<?php echo $height; ?>" data-small-header="<?php echo $smallHeader ?>" data-adapt-container-width="<?php echo $adaptContainerWidth ?>" data-hide-cover="<?php echo $showHeader; ?>" data-show-facepile="<?php echo $showFaces; ?>">
	<blockquote cite="<?php echo $href; ?>" class="fb-xfbml-parse-ignore"><a href="<?php echo $href; ?>"><?php echo $pageName; ?></a></blockquote>
</div>
<?php
if (!empty($moduleclass_sfx) or $moduleCenterHorizontally) {echo '</div>';}
?>
