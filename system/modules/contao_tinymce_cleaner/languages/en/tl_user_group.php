<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Leo Unglaub 2012
 * @author     Leo Unglaub <leo@leo-unglaub.net>
 * @package    tinymce_cleaner
 * @license    LGPL
 */


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_user_group']['tinymce_cleaner_enable']	= array('enable TinyMCE cleaner', 'Use this checkbox to enable the TinyMce cleaner for this user group.');
$GLOBALS['TL_LANG']['tl_user_group']['tinymce_cleaner_tags']	= array('allowed tags', 'Please insert a comma seperated list of allowed tags additionaly to the global allowed tags. If you want to remove a global allowed tag for this user group you can add a - before it. Example: &lt;div&gt;,-&lt;span&gt; Allows the DIV tag, but removes the span element.');


/**
 * Legend
 */
$GLOBALS['TL_LANG']['tl_user_group']['tinymce_cleaner_legend']	= 'TinyMCE Cleaner';

?>