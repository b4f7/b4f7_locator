<?php

declare(strict_types=1);

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

ExtensionUtility::registerPlugin(
    'b4f7_locator',
    'Map',
    'LLL:EXT:b4f7_locator/Resources/Private/Language/locallang_db.xlf:plugin.map.title',
    'b4f7locator_map'
);
