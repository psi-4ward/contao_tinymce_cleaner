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
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_user_group']['palettes']['__selector__'][] = 'tinymce_cleaner_enable';
$GLOBALS['TL_DCA']['tl_user_group']['palettes']['default'] = str_replace
(
	'{pagemounts_legend}',
	'{tinymce_cleaner_legend},tinymce_cleaner_enable;{pagemounts_legend}',
	$GLOBALS['TL_DCA']['tl_user_group']['palettes']['default']
);


/**
 * Subpalettes
 */
$GLOBALS['TL_DCA']['tl_user_group']['subpalettes']['tinymce_cleaner_enable'] = 'tinymce_cleaner_tags';


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_user_group']['fields']['tinymce_cleaner_enable'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_user_group']['tinymce_cleaner_enable'],
	'exclude'		=> true,
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'w50 m12', 'submitOnChange'=>true)
);

$GLOBALS['TL_DCA']['tl_user_group']['fields']['tinymce_cleaner_tags'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_user_group']['tinymce_cleaner_tags'],
	'exclude'		=> true,
	'inputType'		=> 'textarea',
	'eval'			=> array('tl_class'=>'long clr', 'style'=>'height:70px;', 'allowHtml'=>true, 'preserveTags'=>true)
);

?>