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
$GLOBALS['TL_LANG']['tl_user_group']['tinymce_cleaner_enable']	= array('TinyMCE cleaner aktivieren', 'Aktivieren Sie diese Option um den TinyMCE cleaner für diese Benutzergruppe zu aktivieren.');
$GLOBALS['TL_LANG']['tl_user_group']['tinymce_cleaner_tags']	= array('erlaubte Tags', 'Hier können Sie eine kommagetrennte Liste aller erlaubten Tags eingeben. Diese werden zu den global erlaubten Tags hinzugefügt. Wenn Sie einen Tag aus der globalen Auswahl entfernen wollen, müssen Sie ein - vor den Tag schreiben. BSP: &lt;div&gt;,-&lt;span&gt; In diesem Fall wird das DIV Element erlaubt, jedoch das SPAN Element verboten.');


/**
 * Legend
 */
$GLOBALS['TL_LANG']['tl_user_group']['tinymce_cleaner_legend']	= 'TinyMCE Cleaner';

?>