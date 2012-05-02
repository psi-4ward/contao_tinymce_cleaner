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
 * Class TinyMceCleaner
 * Contain methods to clean tinymce code
 */
class TinyMceCleaner extends Controller
{
	/**
	 * Add the cleanup callback to all TinyMCE instances
	 * 
	 * @param string $strName
	 * @return void
	 */
	public function addCallbackToTiny($strName)
	{
		// add the cleanup callback to every TinyMCE if enabled
		if ($GLOBALS['TL_CONFIG']['tinymce_cleaner_enable'] === true && $GLOBALS['TL_CONFIG']['tinymce_cleaner_add_to_all'] === true)
		{
			// reference to keep it short and simple
			$arrDcaFields = &$GLOBALS['TL_DCA'][$strName]['fields'];


			// in some cases there are no fields and no array, so we have to check if it's an array
			if (is_array($arrDcaFields))
			{
				// check every field if there is a TinyMCE config
				foreach ($arrDcaFields as $v) // must be an array
				{
					// is there is a TinyMCE config, add the cleanup callback
					if ($v['eval']['rte'] != '')
					{
						$v['save_callback'][] = array('TinyMceCleaner', 'cleanHtmlCode');
					}
				}
			}
		}

		// TinyMCE cleaner is not enabled, do nothing
	}


	/**
	 * clean the html output from the TinyMCE editor
	 * 
	 * @param string $varValue
	 * @param DataContainer $dc
	 * @return string
	 */
	public function cleanHtmlCode($varValue, DataContainer $dc)
	{
		$strTags = $this->getAllowedTags();

		// check if we have allowed tags, if not skip the striping
		if ($strTags != '')
		{die($strTags);
			return strip_tags($varValue, $strTags);
		}

		return $varValue;
	}


	/**
	 * Get the allowed tags for an user based on the "global allowed tags" and
	 * the tags from the user group.
	 * 
	 * You can use the following syntax in the user group tags:
	 * <div>	-> allows the <div> tag
	 * -<div>	-> removes the <div> tag from the "global allowed tags"
	 * 
	 * @param void
	 * @return string
	 */
	protected function getAllowedTags()
	{
		$arrTags = array();
		$arrRemove = array();
		$strReturn = '';

		$this->import('BackendUser', 'User');


		// get the "global allowed tags"
		$this->getTagsFromString($GLOBALS['TL_CONFIG']['tinymce_cleaner_global_allowed_tags'], &$arrTags);

		// only try loading the tags if there are groups assigned to this user
		if (is_array($this->User->groups) && count($this->User->groups) > 0)
		{
			$this->import('Database');
			$strTags = '';

			// get all tags from the database
			// note: DON'T use the inheritance from the contao core, it
			// only works with select's
			$objUserGroupTags = $this->Database->query(
			'
				SELECT tinymce_cleaner_tags 
				FROM tl_user_group 
				WHERE tinymce_cleaner_enable=1 AND id IN (' . implode(',', $this->User->groups) . ')
			');

			// glue all tags together
			while ($objUserGroupTags->next())
			{
				$strTags .= $objUserGroupTags->tinymce_cleaner_tags;
			}

			$this->getTagsFromString($strTags, &$arrTags);
		}



		$arrTags = array_unique($arrTags);

		// get all tags witch sould be removed from the whitelist
		foreach ($arrTags as $t)
		{
			// check if we sould remove the tag from the list of allowed tags
			if (substr($t, 0, 1) == '-')
			{
				$arrRemove[] = $t; // with the - prefix
				$arrRemove[] = substr($t, 1); // without the - prefix
			}
		}


		// remove all not needed tags
		//TODO: find a better solution for that .... but i am tired right now ... :(
		foreach ($arrTags as $v)
		{
			if (!in_array($v, $arrRemove))
			{
				$strReturn .= $v;
			}
		}
		
		return $strReturn;
	}


	/**
	 * Return a clean array of tags extracted from a comma separated string
	 * 
	 * @param string $strTags
	 * @param array &$arrTags
	 * @return array
	 */
	protected function getTagsFromString($strTags, $arrTags)
	{
		$arrChunks = trimsplit(',', $strTags);
		$arrChunks = array_unique($arrChunks);

		// add all new tags to the reference of $arrTags
		$arrTags = array_merge($arrTags, $arrChunks);
	}
}

?>