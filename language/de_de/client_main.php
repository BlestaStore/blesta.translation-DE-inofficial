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
$lang['ClientMain.!success.client_updated'] = "Ihr Konto Informationen wurden erfolgreich aktualisiert.";
$lang['ClientMain.!success.invoice_method_updated'] = "Die Einstellung für den Versand zukünftiger Rechnungen wurde geändert, neue Rechnungen werden nun per %1\$s an Sie verschickt."; // %1$s is the clients invoice method (e.g. Email, Paper, etc.)
$lang['ClientMain.!info.invoice_due_title'] = "Willkommen zurück, %1\$s!"; // %1$s is the client's first name
$lang['ClientMain.!info.invoice_due_button'] = "Jetzt bezahlen";
$lang['ClientMain.!info.invoice_due_text'] = "
Ihr Konto hat einen ausstehenden Betrag von %1\$s. Bitte machen Sie so bald wie möglich eine Zahlung.
"; // %1$s is the total amount due for this client
$lang['ClientMain.!info.invoice_due_other_currencies'] = "
Sie haben auch einen ausstehenden Betrag in anderen Währungen.
";
$lang['ClientMain.myinfo.setting_invoices'] = "
Sie erhalten derzeit Rechnungen von %1\$s.
"; // %1$s is the clients invoice method (e.g. Email, Paper, etc.)
$lang['ClientMain.myinfo.setting_autodebit_disabled'] = "Ihr Konto ist nicht für die automatische Zahlung eingerichtet.";
$lang['ClientMain.myinfo.setting_autodebit_enabled'] = "Ihr Kundenkonto wird automatisch bei neuen Rechnungen belastet.";
$lang['ClientMain.myinfo.setting_autodebit_cc_zero_days'] = "
Wir berechnen Ihre %1\$s am Tag der Zahlung mit dem Betrag x%2\$s.
"; // %1$s is the type of credit card (e.g. "Visa"), %2$s is the last 4 of the credit card number
$lang['ClientMain.myinfo.setting_autodebit_ach_zero_days'] = "
Ihr %1\$s Konto wird am Fälligkeitstag mit der Endung x%2\$s belastet.
"; // %1$s is the type of payment account to charge (e.g. "Checking"), %2$s is the last 4 of the account number
$lang['ClientMain.myinfo.setting_autodebit_cc_one_day'] = "Wir erheben Ihre %1\$s -Ende am Tag vor Fälligkeit der Zahlung in x %2\$s."; // %1$s is the type of credit card (e.g. "Visa"), %2$s is the last 4 of the credit card number
$lang['ClientMain.myinfo.setting_autodebit_ach_one_day'] = "Wir berechnen Ihr %1\$s -Konto, das am Tag vor Fälligkeit der Zahlung in x %2\$s endet."; // %1$s is the type of payment account to charge (e.g. "Checking"), %2$s is the last 4 of the account number
$lang['ClientMain.myinfo.setting_autodebit_cc_days'] = "
Wir berechnen Ihre %1\$s Tage, die in x %2\$s %3\$s Tagen vor Zahlung fällig sind.
"; // %1$s is the type of credit card (e.g. "Visa"), %2$s is the last 4 of the credit card number, %3$s is the plural number of days (two or more) before a payment is due when the client's payment account will be charged
$lang['ClientMain.myinfo.setting_autodebit_ach_days'] = "Wir belasten Ihr %1\$s Konto mit einer Frist von x %2\$s %3\$s Tagen vor der Zahlung."; // %1$s is the type of payment account to charge (e.g. "Checking"), %2$s is the last 4 of the account number, %3$s is the plural number of days (two or more) before a payment is due when the client's payment account will be charged
$lang['ClientMain.myinfo.setting_change'] = "Ändern?";
$lang['ClientMain.myinfo.link_editclient'] = "Bearbeiten";
$lang['ClientMain.edit.boxtitle_edit'] = "Meine Informationen bearbeiten";
$lang['ClientMain.edit.heading_billing'] = "Abrechnungsdaten";
$lang['ClientMain.edit.field_taxid'] = "Steuernummer / MwSt";
$lang['ClientMain.edit.field_default_currency'] = "Bevorzugte Währung";
$lang['ClientMain.edit.field_invoiceaddress'] = "Rechnungsadresse";
$lang['ClientMain.edit.heading_settings'] = "Zusätzliche Einstellungen";
$lang['ClientMain.edit.field_language'] = "Sprache";
$lang['ClientMain.edit.field_username'] = "Nutzername";
$lang['ClientMain.edit.field_new_password'] = "Neues Passwort";
$lang['ClientMain.edit.field_confirm_password'] = "Passwort bestätigen";
$lang['ClientMain.edit.field_current_password'] = "Aktuelles Passwort";
$lang['ClientMain.edit.field_editsubmit'] = "Meine Informationen aktualisieren";
$lang['ClientMain.invoicemethod.boxtitle_inv_method'] = "Rechnungsart";
$lang['Clientmain.invoicemethod.field_methodsubmit'] = "Aktualisieren";
$lang['ClientMain.!tooltip.invoice_method_email'] = "Die Rechnungen werden per E-Mail an die Adresse gesendet, die bei uns hinterlegt ist.";
$lang['ClientMain.!tooltip.invoice_method_paper'] = "
Wir werden Rechnungen an die von uns hinterlegte Adresse drucken und versenden.
";
$lang['ClientMain.!tooltip.invoice_method_interfax'] = "Wir faxen automatisch Rechnungen an die Faxnummer, die wir gespeichert haben. Wenn Sie diese Option auswählen, stellen Sie sicher, dass eine gültige Faxnummer angegeben ist.";
$lang['ClientMain.!tooltip.invoice_method_postalmethods'] = "Wir werden Rechnungen automatisch ausdrucken und an die von uns angegebene Adresse senden.";
$lang['ClientMain.invoicemethod.text_invoice_method'] = "Ihre Rechnungsmethode ist die Methode, mit der wir Ihnen neue Rechnungen zukommen lassen.";
$lang['ClientMain.getcurrencyamounts.text_total_credits'] = "Credits:";
$lang['ClientMain.edit.heading_contact'] = "Kontaktinformation";
$lang['ClientMain.edit.heading_authentication'] = "Authentifizierung";
$lang['ClientMain.edit.field_two_factor_mode'] = "Zwei-Faktor-Authentifizierung aktivieren";
$lang['ClientMain.edit.two_factor_desc'] = "
Bei der Zwei-Faktor-Authentifizierung handelt es sich um eine Sicherheitsfunktion, mit der Sie sich auf zwei Arten bei Ihrem Konto anmelden können. Wenn diese Option aktiviert ist, melden Sie sich mit Ihrem Benutzernamen und Kennwort in Ihrem Konto an und werden dann aufgefordert, ein Einmalkennwort einzugeben.
";
$lang['ClientMain.edit.two_factor_instructions'] = "Um die Zwei-Faktor-Authentifizierung zu verwenden, benötigen Sie ein TOTP-Token. Wenn Sie ein Android-, iOS- oder Windows-Mobilgerät verwenden, kann Ihr Telefon als Ihr Token fungieren und das erforderliche Einmalpasswort bereitstellen.";
$lang['ClientMain.edit.two_factor_step1'] = "Laden Sie den Authenticator für Ihr Gerät herunter:";
$lang['ClientMain.edit.two_factor_step3'] = "
Bestätigen Sie Ihr Einmalpasswort und klicken Sie dann auf \"Meine Informationen aktualisieren\". Sie müssen bei der nächsten Anmeldung Ihr Einmalpasswort eingeben.
";
$lang['ClientMain.edit.text_android'] = "Android";
$lang['ClientMain.edit.text_ios'] = "iOS";
$lang['ClientMain.edit.text_windows'] = "Windows";
$lang['ClientMain.edit.field_otp'] = "Einmaliges Passwort";
$lang['ClientMain.index.page_title'] = "Kunde #%1\$s"; // %1$s is the client ID number
$lang['ClientMain.myinfo.page_title'] = "Kunde #%1\$s"; // %1$s is the client ID number
$lang['ClientMain.edit.page_title'] = "Kunde #%1\$s Meine Informationen bearbeiten"; // %1$s is the client ID number
$lang['ClientMain.invoicemethod.page_title'] = "Kunden Nr. %1\$s Rechnungsmethode"; // %1$s is the client ID number
$lang['ClientMain.!info.invoice_past_due_button'] = "Überfällige Zahlung";
$lang['ClientMain.!info.invoice_due_past_due_text'] = "Ihr Konto hat ein ausstehendes Guthaben von %1\$s, von dem %2\$s überfällig ist. Bitte machen Sie eine Zahlung so schnell wie möglich."; // %1$s is the total amount due for this client, %2$s is the total amount past due for this client
$lang['ClientMain.myinfo.client_id'] = "Client # %1\$s"; // %1$s is the client ID number
$lang['ClientMain.!info.service_in_review'] = "
Die folgenden Dienstleistungen werden von Mitarbeitern überprüft. Nach der Genehmigung werden sie aktiviert:
";
$lang['ClientMain.!info.service_name'] = "%1\$s - %2\$s"; // %1$s is the package name, %2$s is the service name
$lang['ClientMain.!info.additional_service'] = "... und 1 zusätzlicher Service.";
$lang['ClientMain.!info.additional_services'] = "... und %1\$s zusätzliche Dienste."; // %1$s is the number of additional services
$lang['ClientMain.edit.field_receive_email_marketing'] = "
Ich möchte E-Mails über neue Produkte, Dienstleistungen und Angebote erhalten.
";
$lang['ClientMain.myinfo.number'] = "(%1\$s %2\$s)"; // %1$s is the number location, %2$s is the number type
$lang['ClientMain.!info.email_pending_verification_button'] = "Verifizierungs-E-Mail erneut senden";
$lang['ClientMain.myinfo.contacts'] = "Kontakte";
?>