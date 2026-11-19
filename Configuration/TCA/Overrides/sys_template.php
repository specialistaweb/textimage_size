<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

// For sites configured with TypoScript records (sys_template), e.g. all TYPO3 12 sites.
// Sites using site sets (TYPO3 13/14) add the set "Text Media/Image size" instead.
// The path is unchanged since 4.x, so existing includes keep working.
ExtensionManagementUtility::addStaticFile(
    'textimage_size',
    'Configuration/TypoScript/Bootstrap_Package/bootstrap5/',
    'Text/Image size: Bootstrap5'
);
