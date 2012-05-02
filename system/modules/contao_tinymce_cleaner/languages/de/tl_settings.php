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
$GLOBALS['TL_LANG']['tl_settings']['tinymce_cleaner_enable']				= array('TinyMCE cleaner aktivieren', 'Aktivieren Sie diese Option um den TinyMCE cleaner zu aktivieren.');
$GLOBALS['TL_LANG']['tl_settings']['tinymce_cleaner_add_to_all']			= array('zu allen TinyMCE Editoren hinzufügen', 'Aktivieren Sie diese Option um den TinyMCE cleaner zu allen TinyMCE Editoren hinzuzufügen. Wenn Sie diese Option nicht aktivieren, dann wird der TinyMCE cleaner nur im Artikel verwendet.');
$GLOBALS['TL_LANG']['tl_settings']['tinymce_cleaner_global_allowed_tags']	= array('erlaubte Tags', 'Bitte geben Sie hier eine kommagetrennte Liste aller Tags ein, welche für ALLE Benutzergruppen erlaubt sind. Sie können Ausnahmen/Erweiterungen pro Benutzergruppe hinzufügen.');


/**
 * Legend
 */
$GLOBALS['TL_LANG']['tl_settings']['tinymce_cleaner_legend']				= 'TinyMCE Cleaner';

?>