-- ********************************************************
-- *                                                      *
-- * IMPORTANT NOTE                                       *
-- *                                                      *
-- * Do not import this file manually but use the Contao  *
-- * install tool to create and maintain database tables! *
-- *                                                      *
-- ********************************************************

-- 
-- Table `tl_user_group`
-- 

CREATE TABLE `tl_user_group` (
  `tinymce_cleaner_enable` char(1) NOT NULL default '',
  `tinymce_cleaner_tags` text NULL,
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
