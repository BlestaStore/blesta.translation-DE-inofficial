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
$lang['PaypalPaymentsStandard.name'] = "Standard PayPal Zahlungen";
$lang['PaypalPaymentsStandard.account_id'] = "PayPal-Konto E-Mail";
$lang['PaypalPaymentsStandard.page_style'] = "Name der Seitenvorlage";
$lang['PaypalPaymentsStandard.page_style_note'] = "
Der Seitenstilname des benutzerdefinierten Zahlungsseitenmusters, das Sie in PayPal erstellt haben. Lassen Sie das Standardformat für die Seite leer.
";
$lang['PaypalPaymentsStandard.dev_mode'] = "Entwicklermodus";
$lang['PaypalPaymentsStandard.dev_mode_note'] = "Wenn Sie diese Option aktivieren, werden Transaktionen an die PayPal Sandbox-Umgebung gesendet. Aktivieren Sie diese Option nur, wenn Sie mit einem PayPal Sandbox-Konto testen.";
$lang['PaypalPaymentsStandard.api_username'] = "API-Benutzername";
$lang['PaypalPaymentsStandard.api_username_note'] = "Das API-Passwort und die API-Signatur sind erforderlich, um Erstattungen für PayPal zu bearbeiten.";
$lang['PaypalPaymentsStandard.api_password'] = "API Passwort";
$lang['PaypalPaymentsStandard.api_signature'] = "API Signatur";
$lang['PaypalPaymentsStandard.pay_type'] = "Zahlungsmöglichkeiten";
$lang['PaypalPaymentsStandard.pay_type_onetime'] = "Nur einmalige Zahlungen";
$lang['PaypalPaymentsStandard.pay_type_subscribe'] = "
Nur Abonnementzahlungen
";
$lang['PaypalPaymentsStandard.pay_type_both'] = "Einmal- und Abonnementzahlungen wenn möglich";
$lang['PaypalPaymentsStandard.buildprocess.submit'] = "Mit PayPal bezahlen";
$lang['PaypalPaymentsStandard.!error.account_id.valid'] = "Sie müssen eine gültige Email-Adresse angeben.";
$lang['PaypalPaymentsStandard.!error.dev_mode.valid'] = "
Der Entwicklermodus muss auf \"true\" gesetzt sein, falls angegeben.
";
?>