<?php
defined('TYPO3_MODE') || die();

call_user_func(
    function () {
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Acceptrics.Acceptrics_Typo3',
            'AcceptricsServices',
            [
                \Acceptrics\Acceptrics_Typo3\Controller\AcceptricsController::class => 'list',
            ],
            // non-cacheable actions
            [
                \Acceptrics\Acceptrics_Typo3\Controller\AcceptricsController::class => '',
            ]
        );
    }
);