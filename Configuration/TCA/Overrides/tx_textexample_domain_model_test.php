<?php
defined('TYPO3_MODE') || die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::makeCategorizable(
   'test_form',
   'tx_testform_domain_model_test'
);
