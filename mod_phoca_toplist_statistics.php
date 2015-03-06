<?php
/*
 * @package Joomla 1.5
 * @copyright Copyright (C) 2005 Open Source Matters. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 *
 * @module Phoca - Google Toplist Statistics
 * @copyright Copyright (C) Jan Pavelka www.phoca.cz
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */
defined('_JEXEC') or die('Restricted access');// no direct access

$toplist_code		= trim( $params->get( 'toplist_code' ) );
$module_css_style	= trim( $params->get( 'module_css_style' ) );

if ($module_css_style)	{echo '<div style="'.$module_css_style.'">';}
echo $toplist_code;
if ($module_css_style)	{echo '</div>';}
?>