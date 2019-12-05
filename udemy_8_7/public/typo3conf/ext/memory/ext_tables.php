<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Slaleye.Memory',
            'Game',
            'Memory'
        );

        if (TYPO3_MODE === 'BE') {

            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
                'Slaleye.Memory',
                'tools', // Make module a submodule of 'tools'
                'highscore', // Submodule key
                '', // Position
                [
                    'Highscore' => 'leaderboard',
                    
                ],
                [
                    'access' => 'user,group',
                    'icon'   => 'EXT:memory/Resources/Public/Icons/user_mod_highscore.svg',
                    'labels' => 'LLL:EXT:memory/Resources/Private/Language/locallang_highscore.xlf',
                ]
            );

        }

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('memory', 'Configuration/TypoScript', 'Memory');

    }
);
