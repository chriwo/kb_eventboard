<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages("tx_kbeventboard_locations");

$TCA["tx_kbeventboard_locations"] = Array (
	"ctrl" => Array (
		'title' => 'LLL:EXT:kb_eventboard/locallang_db.xml:tx_kbeventboard_locations',		
		'label' => 'locationname',	
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		"sortby" => "sorting",	
		"dynamicConfigFile" => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY)."tca.php",
		"iconfile" => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY)."icon_tx_kbeventboard_locations.gif",
	),
	"feInterface" => Array (
		"fe_admin_fieldList" => "locationname, street, zip, city, logo, locationdescription, homepage",
	)
);


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages("tx_kbeventboard_category");

$TCA["tx_kbeventboard_category"] = Array (
	"ctrl" => Array (
		'title' => 'LLL:EXT:kb_eventboard/locallang_db.xml:tx_kbeventboard_category',		
		'label' => 'category',	
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		"sortby" => "sorting",	
		"dynamicConfigFile" => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY)."tca.php",
		"iconfile" => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY)."icon_tx_kbeventboard_category.gif",
	),
	"feInterface" => Array (
		"fe_admin_fieldList" => "category, categorydescription",
	)
);


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages("tx_kbeventboard_events");

$TCA["tx_kbeventboard_events"] = Array (
	"ctrl" => Array (
		'title' => 'LLL:EXT:kb_eventboard/locallang_db.xml:tx_kbeventboard_events',		
		'label' => 'eventname',	
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		"default_sortby" => "ORDER BY crdate DESC",	
		"delete" => "deleted",	
		"enablecolumns" => Array (		
			"disabled" => "hidden",	
			"fe_group" => "fe_group",
		),
		"dynamicConfigFile" => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY)."tca.php",
		"iconfile" => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY)."icon_tx_kbeventboard_events.gif",
	),
	"feInterface" => Array (
		"fe_admin_fieldList" => "hidden, fe_group, eventname, datebegin, dateend, location, category, startingtime, price, eventdescription",
	)
);

#\TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA('tt_content');
$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY.'_pi1']='layout,select_key';

// Flexform einbinden:
include_once(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY).'class.tx_kbeventboard_addCategoriesToFlexForm.php');
$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY.'_pi1']='pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($_EXTKEY.'_pi1', 'FILE:EXT:'.$_EXTKEY.'/flexform_ds.xml');


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(array('LLL:EXT:kb_eventboard/locallang_db.xml:tt_content.list_type_pi1', $_EXTKEY.'_pi1'),'list_type');


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY,"pi1/static/","Event Board");

?>