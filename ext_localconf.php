<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'TestForm',
            'List',
            [
                \MyVendor\TestForm\Controller\TestController::class => 'list, show'
            ],
            // non-cacheable actions
            [
                \MyVendor\TestForm\Controller\TestController::class => ''
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'TestForm',
            'Latest',
            [
                \MyVendor\TestForm\Controller\TestController::class => 'list, show, latest'
            ],
            // non-cacheable actions
            [
                \MyVendor\TestForm\Controller\TestController::class => ''
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        list {
                            iconIdentifier = test_form-plugin-list
                            title = LLL:EXT:test_form/Resources/Private/Language/locallang_db.xlf:tx_test_form_list.name
                            description = LLL:EXT:test_form/Resources/Private/Language/locallang_db.xlf:tx_test_form_list.description
                            tt_content_defValues {
                                CType = list
                                list_type = testform_list
                            }
                        }
                        latest {
                            iconIdentifier = test_form-plugin-latest
                            title = LLL:EXT:test_form/Resources/Private/Language/locallang_db.xlf:tx_test_form_latest.name
                            description = LLL:EXT:test_form/Resources/Private/Language/locallang_db.xlf:tx_test_form_latest.description
                            tt_content_defValues {
                                CType = list
                                list_type = testform_latest
                            }
                        }
                    }
                    show = *
                }
           }'
        );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

			$iconRegistry->registerIcon(
				'test_form-plugin-list',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:test_form/Resources/Public/Icons/user_plugin_list.svg']
			);

			$iconRegistry->registerIcon(
				'test_form-plugin-latest',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:test_form/Resources/Public/Icons/user_plugin_latest.svg']
			);

    }
);
