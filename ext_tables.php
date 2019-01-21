<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'BYR.PortfolioByr',
            'Trainings',
            'catalogue de formation'
        );

        $pluginSignature = str_replace('_', '', 'portfolio_byr') . '_trainings';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:portfolio_byr/Configuration/FlexForms/flexform_trainings.xml');

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'BYR.PortfolioByr',
            'Profile',
            'CVBYR'
        );

        $pluginSignature = str_replace('_', '', 'portfolio_byr') . '_profile';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:portfolio_byr/Configuration/FlexForms/flexform_profile.xml');

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'BYR.PortfolioByr',
            'Project',
            'Projets'
        );

        $pluginSignature = str_replace('_', '', 'portfolio_byr') . '_project';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:portfolio_byr/Configuration/FlexForms/flexform_project.xml');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('portfolio_byr', 'Configuration/TypoScript', 'Portfolio_BYR');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_portfoliobyr_domain_model_projet', 'EXT:portfolio_byr/Resources/Private/Language/locallang_csh_tx_portfoliobyr_domain_model_projet.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_portfoliobyr_domain_model_projet');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_portfoliobyr_domain_model_profile', 'EXT:portfolio_byr/Resources/Private/Language/locallang_csh_tx_portfoliobyr_domain_model_profile.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_portfoliobyr_domain_model_profile');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_portfoliobyr_domain_model_training', 'EXT:portfolio_byr/Resources/Private/Language/locallang_csh_tx_portfoliobyr_domain_model_training.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_portfoliobyr_domain_model_training');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_portfoliobyr_domain_model_job', 'EXT:portfolio_byr/Resources/Private/Language/locallang_csh_tx_portfoliobyr_domain_model_job.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_portfoliobyr_domain_model_job');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_portfoliobyr_domain_model_skill', 'EXT:portfolio_byr/Resources/Private/Language/locallang_csh_tx_portfoliobyr_domain_model_skill.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_portfoliobyr_domain_model_skill');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_portfoliobyr_domain_model_category', 'EXT:portfolio_byr/Resources/Private/Language/locallang_csh_tx_portfoliobyr_domain_model_category.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_portfoliobyr_domain_model_category');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_portfoliobyr_domain_model_social', 'EXT:portfolio_byr/Resources/Private/Language/locallang_csh_tx_portfoliobyr_domain_model_social.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_portfoliobyr_domain_model_social');

    }
);
