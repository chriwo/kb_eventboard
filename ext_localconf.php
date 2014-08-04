<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('
	options.saveDocNew.tx_kbeventboard_locations=1
');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('
	options.saveDocNew.tx_kbeventboard_category=1
');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('
	options.saveDocNew.tx_kbeventboard_events=1
');

  ## Extending TypoScript from static template uid=43 to set up userdefined tag:
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript($_EXTKEY,'editorcfg','
	tt_content.CSS_editor.ch.tx_kbeventboard_pi1 = < plugin.tx_kbeventboard_pi1.CSS_editor
',43);


#\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43($_EXTKEY,'pi1/class.tx_kbeventboard_pi1.php','_pi1','list_type',0);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43($_EXTKEY,'pi1/class.tx_kbeventboard_pi1.php','_pi1','list_type',1);
?>