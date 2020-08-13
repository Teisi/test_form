<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'TestForm',
            'List',
            'Test List'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'TestForm',
            'Latest',
            'Test Latest'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('test_form', 'Configuration/TypoScript', 'text example');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_testform_domain_model_test', 'EXT:test_form/Resources/Private/Language/locallang_csh_tx_testform_domain_model_test.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_testform_domain_model_test');

    }
);
