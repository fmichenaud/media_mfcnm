<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('media_mfcnm', 'Configuration/TypoScript', 'media_[mfcnm]');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_mediamfcnm_domain_model_media', 'EXT:media_mfcnm/Resources/Private/Language/locallang_csh_tx_mediamfcnm_domain_model_media.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_mediamfcnm_domain_model_media');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_mediamfcnm_domain_model_author', 'EXT:media_mfcnm/Resources/Private/Language/locallang_csh_tx_mediamfcnm_domain_model_author.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_mediamfcnm_domain_model_author');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_mediamfcnm_domain_model_review', 'EXT:media_mfcnm/Resources/Private/Language/locallang_csh_tx_mediamfcnm_domain_model_review.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_mediamfcnm_domain_model_review');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_mediamfcnm_domain_model_social', 'EXT:media_mfcnm/Resources/Private/Language/locallang_csh_tx_mediamfcnm_domain_model_social.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_mediamfcnm_domain_model_social');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_mediamfcnm_domain_model_type', 'EXT:media_mfcnm/Resources/Private/Language/locallang_csh_tx_mediamfcnm_domain_model_type.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_mediamfcnm_domain_model_type');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_mediamfcnm_domain_model_category', 'EXT:media_mfcnm/Resources/Private/Language/locallang_csh_tx_mediamfcnm_domain_model_category.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_mediamfcnm_domain_model_category');

    }
);
