<?php

// all use statements must come first
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

// Prevent Script from being called directly
defined('TYPO3') or die();


// TCEFORM
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:textimage_size/Configuration/PageTS/TCEFORM.txt">');



