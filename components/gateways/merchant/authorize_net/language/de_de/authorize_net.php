<?php
/**
 * Language definitions. Blesta German Translation Project.
 * 
 * @package blesta
 * @github https://github.com/BlestaStore/blesta.translation-DE-inofficial
 * @copyright Copyright (c) 2023, Phillips Data, Inc.
 * @license https://www.blesta.com/license/ The Blesta License Agreement
 * @link https://www.blesta.com/ Blesta
 */
$lang['Authorize_net.name'] = "Authorize.Net";
$lang['Authorize_net.login_id'] = "Anmelde-ID";
$lang['Authorize_net.transaction_key'] = "Transaktionsschlüssel";
$lang['Authorize_net.api'] = "Zahlungs-API";
$lang['Authorize_net.test_mode'] = "Testmodus";
$lang['Authorize_net.apis_aim'] = "AIM (Standard)";
$lang['Authorize_net.apis_cim'] = "CIM (Muss von Authorize.net freigeschalten werden)";
$lang['Authorize_net.validation_mode'] = "Zahlungskonto-Bestätigungsmodus";
$lang['Authorize_net.validation_note'] = "Dies steuert, welche Art von Validierung durchgeführt wird, wenn ein Zahlungskonto mit CIM gespeichert wird. 'None' führt keine zusätzliche Validierung durch. \"Test\" gibt eine Testtransaktion aus, die nicht in der Kundenerklärung erscheint, sondern eine E-Mail an den Händler generiert. 'Live' verarbeitet eine \$ 0,00 oder \$ 0,01 Transaktion, die sofort storniert wird. Wenden Sie sich an Ihren Händlerkontoanbieter, bevor Sie diesen Wert auf \"Live\" festlegen, da möglicherweise Gebühren anfallen.";
$lang['Authorize_net.validation_modes_none'] = "Keiner";
$lang['Authorize_net.validation_modes_test'] = "Test";
$lang['Authorize_net.validation_modes_live'] = "Live";
$lang['Authorize_net.!error.login_id.format'] = "Die Login ID darf nicht länger als 20 Zeichen und darf nicht leer sein.";
$lang['Authorize_net.!error.transaction_key.format'] = "Der Transaktions-Schlüssel muss 16 Zeichen lang sein.";
$lang['Authorize_net.!error.test_mode.valid'] = "Testmodus muss \"true\" sein, ohne \".";
$lang['Authorize_net.test_mode_note'] = "Die Testmodusfunktion wird nur von AIM unterstützt. Um CIM-Transaktionen zu testen, müssen Sie den Testmodus innerhalb Ihres Authorize.net-Kontos aktivieren.";
$lang['Authorize_net.dev_mode'] = "Entwicklermodus";
$lang['Authorize_net.dev_mode_note'] = "Durch Aktivieren dieser Option werden Transaktionen in der Authorize.net-Entwicklerumgebung veröffentlicht. Sie müssen über ein Entwicklertestkonto verfügen, um diese Umgebung verwenden zu können.";
$lang['Authorize_net.!error.dev_mode.valid'] = "Developer mode muss, wenn gesetzt \"true\" sein.";
$lang['Authorize_net.!error.card_number.missing'] = "
Das Verfallsdatum kann nicht ohne die vollständige Kartennummer aktualisiert werden.
";
?>