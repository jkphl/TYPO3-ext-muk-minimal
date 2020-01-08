<?php

if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

call_user_func(
    function() {
        // Add static TypoScript files
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            'muk_minimal',
            'Configuration/TypoScript',
            'MUK CMS demo extension'
        );

        // Custom code ...
    }
);
