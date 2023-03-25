<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider;

defined('TYPO3') || die();

return [
    'b4f7locator_map' => [
        'provider' => BitmapIconProvider::class,
        'source' => 'EXT:b4f7_locator/Resources/Public/Icons/b4f7_icon.png',
    ],
];
