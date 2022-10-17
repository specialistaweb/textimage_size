<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

// add static typoscript includes
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('textimage_size', 'Configuration/TypoScript/Bootstrap_Package/bootstrap4/', 'TextImage Size: bootstrap4');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('textimage_size', 'Configuration/TypoScript/BootstrapPackage/bootstrap5/', 'TextImage Size: bootstrap5+Scss');
