<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "kb_eventboard".
 *
 * Auto generated 19-10-2013 12:54
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/
/*
 * 28.05.2014 - chriwo
 * Änderung in der Datei ext_localconf.php (Zeile 19-20)
 * Änderung in der Datei class.tx_kbeventboard_pi1.php (Zeile 115)
 */

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Event Board',
	'description' => 'simple Eventboard to manage events, categories and locations with template',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '2.0.0',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	//'state' => 'stable',
	'state' => 'excludeFromUpdates',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Klaus Biedermann',
	'author_email' => 'klaus.biedermann@gmx.de',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.2-6.2.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:29:{s:9:"ChangeLog";s:4:"8563";s:49:"class.tx_kbeventboard_addCategoriesToFlexForm.php";s:4:"d589";s:14:"create_rss.php";s:4:"ac23";s:12:"ext_icon.gif";s:4:"fa80";s:17:"ext_localconf.php";s:4:"8512";s:14:"ext_tables.php";s:4:"16c8";s:14:"ext_tables.sql";s:4:"3165";s:15:"flexform_ds.xml";s:4:"c4a0";s:33:"icon_tx_kbeventboard_category.gif";s:4:"8eeb";s:31:"icon_tx_kbeventboard_events.gif";s:4:"96ac";s:34:"icon_tx_kbeventboard_locations.gif";s:4:"1c6b";s:17:"kb_eventboard.css";s:4:"c8b9";s:16:"locallang_db.xml";s:4:"f3ae";s:17:"locallang_tca.xml";s:4:"96a8";s:10:"README.txt";s:4:"ee2d";s:7:"tca.php";s:4:"48d0";s:13:"template.tmpl";s:4:"9418";s:14:"doc/manual.sxw";s:4:"2a77";s:22:"doc/plugin-backend.gif";s:4:"3c23";s:19:"doc/wizard_form.dat";s:4:"ded4";s:20:"doc/wizard_form.html";s:4:"006d";s:33:"pi1/class.tx_kbeventboard_pi1.php";s:4:"0d8b";s:17:"pi1/locallang.xml";s:4:"c3b0";s:24:"pi1/static/constants.txt";s:4:"1416";s:24:"pi1/static/editorcfg.txt";s:4:"2228";s:20:"pi1/static/setup.txt";s:4:"1444";s:16:"res/closebtn.gif";s:4:"2675";s:12:"res/next.gif";s:4:"467a";s:12:"res/prev.gif";s:4:"acc8";}',
);

?>