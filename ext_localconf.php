<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'BYR.PortfolioByr',
            'Trainings',
            [
                'Training' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Training' => 'search'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'BYR.PortfolioByr',
            'Profile',
            [
                'Profile' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Projet' => '',
                'Profile' => '',
                'Training' => '',
                'Skill' => ''
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'BYR.PortfolioByr',
            'Project',
            [
                'Project' => 'list, show, highlight, skills'
            ],
            // non-cacheable actions
            [
                'Projet' => 'search'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    trainings {
                        iconIdentifier = portfolio_byr-plugin-trainings
                        title = LLL:EXT:portfolio_byr/Resources/Private/Language/locallang_db.xlf:tx_portfolio_byr_trainings.name
                        description = LLL:EXT:portfolio_byr/Resources/Private/Language/locallang_db.xlf:tx_portfolio_byr_trainings.description
                        tt_content_defValues {
                            CType = list
                            list_type = portfoliobyr_trainings
                        }
                    }
                    profile {
                        iconIdentifier = portfolio_byr-plugin-profile
                        title = LLL:EXT:portfolio_byr/Resources/Private/Language/locallang_db.xlf:tx_portfolio_byr_profile.name
                        description = LLL:EXT:portfolio_byr/Resources/Private/Language/locallang_db.xlf:tx_portfolio_byr_profile.description
                        tt_content_defValues {
                            CType = list
                            list_type = portfoliobyr_profile
                        }
                    }
                    project {
                        iconIdentifier = portfolio_byr-plugin-project
                        title = LLL:EXT:portfolio_byr/Resources/Private/Language/locallang_db.xlf:tx_portfolio_byr_project.name
                        description = LLL:EXT:portfolio_byr/Resources/Private/Language/locallang_db.xlf:tx_portfolio_byr_project.description
                        tt_content_defValues {
                            CType = list
                            list_type = portfoliobyr_project
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'portfolio_byr-plugin-trainings',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:portfolio_byr/Resources/Public/Icons/user_plugin_trainings.svg']
			);
		
			$iconRegistry->registerIcon(
				'portfolio_byr-plugin-profile',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:portfolio_byr/Resources/Public/Icons/user_plugin_profile.svg']
			);
		
			$iconRegistry->registerIcon(
				'portfolio_byr-plugin-project',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:portfolio_byr/Resources/Public/Icons/user_plugin_project.svg']
			);
		
    }
);
