<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

// add static typoscript includes
//\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('textimage_size', 'Configuration/TypoScript/Bootstrap_Package/bootstrap4/', 'Text/Image size');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('textimage_size', 'Configuration/TypoScript/Bootstrap_Package/bootstrap4/', 'Text/Image size: Bootstrap4 (SCSS)');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('textimage_size', 'Configuration/TypoScript/Bootstrap_Package/bootstrap5/', 'Text/Image size: Bootstrap5 (SCSS)');

