<?php
/*------------------------------------------------------------------------
# mod_advanced_facebook_likebox - Advanced Facebook Like Box
# ------------------------------------------------------------------------
# @author      Kataev Yaroslav
# @version     1.1.0
# @description Facebook like box placement module on the website page.
# @copyright   Copyright (C) 2022 Kataev Yaroslav. All rights reserved.
# @license     GNU General Public License version 3; see LICENSE.txt
-------------------------------------------------------------------------*/

// no direct access
defined( '_JEXEC' ) or die;

$href 			= trim($params->get('href'));
$pageName 		= stripslashes($params->get('pageName'));
$width 			= trim($params->get('width'));
$height 		= trim($params->get('height'));
$showFaces 		= (boolean)$params->get('showFaces');
$tabsTimeline 		= (boolean)$params->get('tabsTimeline');
$tabsEvents 		= (boolean)$params->get('tabsEvents');
$tabsMessages 		= (boolean)$params->get('tabsMessages');
$showHeader 		= (boolean)$params->get('showHeader');
$adaptContainerWidth 	= (boolean)$params->get('adaptContainerWidth');
$smallHeader 		= (boolean)$params->get('smallHeader');
$hideCta 		= (boolean)$params->get('hideCta');
$lang 			= $params->get('lang');
$moduleClassCustom 	= htmlspecialchars($params->get('moduleClassCustom'));

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
<div class="<?php echo $moduleClassCustom;?>">
	<div class="fb-page" data-href="<?php echo $href; ?>" data-tabs="<?php echo $dataTabs ?>" data-width="<?php echo $width; ?>" data-height="<?php echo $height; ?>" data-small-header="<?php echo $smallHeader ?>" data-adapt-container-width="<?php echo $adaptContainerWidth ?>" data-hide-cover="<?php echo $showHeader; ?>" data-show-facepile="<?php echo $showFaces; ?>">
		<blockquote cite="<?php echo $href; ?>" class="fb-xfbml-parse-ignore"><a href="<?php echo $href; ?>"><?php echo $pageName; ?></a></blockquote>
	</div>
</div>
