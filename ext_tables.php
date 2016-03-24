<?php
if (!defined('TYPO3_MODE')) die('Access denied.');




\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/', 'mobile Template');


#######################################################################################
#######################################################################################
###
###  New Hide on Mobile Tab
###
#######################################################################################
#######################################################################################

$tempColumns['tx_mrmobile_hide_on_smartphone'] = array(
    'exclude' => 0,
    'label' => "LLL:EXT:$_EXTKEY/Resources/Private/Language/locallang_db.xml:tt_content.tx_mrmobile_hide_on_smartphone",
	'config' => array(
		'type' => 'check',
		'default' => '1',
		'items' => array(
			'1' => array(
				'0' => "LLL:EXT:$_EXTKEY/Resources/Private/Language/locallang_db.xml:hide_on_checkbox_1_formlabel"
			)
		)
	)
);
$tempColumns['tx_mrmobile_hide_on_tablet'] = array(
	'exclude' => 0,
	'label' => "LLL:EXT:$_EXTKEY/Resources/Private/Language/locallang_db.xml:tt_content.tx_mrmobile_hide_on_tablet",
	'config' => $tempColumns['tx_mrmobile_hide_on_smartphone']['config']
);
$tempColumns['tx_mrmobile_hide_on_desktop'] = array(
	'exclude' => 0,
	'label' => "LLL:EXT:$_EXTKEY/Resources/Private/Language/locallang_db.xml:tt_content.tx_mrmobile_hide_on_desktop",
	'config' => $tempColumns['tx_mrmobile_hide_on_smartphone']['config']
);

$mrmobilePalette = 'tx_mrmobile_hide_on_smartphone, tx_mrmobile_hide_on_tablet, tx_mrmobile_hide_on_desktop';
$mrmobileType = "--div--;LLL:EXT:$_EXTKEY/Resources/Private/Language/locallang_db.xml:tabs.mrmobile,
	--palette--;LLL:EXT:$_EXTKEY/Resources/Private/Language/locallang_db.xml:paletts.mrmobile;mrmobile,";
if (version_compare(TYPO3_branch, '6.1', '<')) {
	\TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA('tt_content');
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tt_content', 'mrmobile', $mrmobilePalette);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', $mrmobileType);
if (version_compare(TYPO3_branch, '6.1', '<')) {
	\TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA('pages');
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $tempColumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('pages', 'mrmobile', $mrmobilePalette);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages', $mrmobileType);
