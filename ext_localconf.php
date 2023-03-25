<?php

declare(strict_types=1);

defined('TYPO3') || die();

use B4f7\Locator\Controller\MapController;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

ExtensionUtility::configurePlugin(
    'b4f7_locator',
    'Map',
    [
        MapController::class => 'show'
    ],
);

ExtensionManagementUtility::addPageTSConfig(
    "@import 'EXT:b4f7_locator/Configuration/TSconfig/page.tsconfig'"
);
