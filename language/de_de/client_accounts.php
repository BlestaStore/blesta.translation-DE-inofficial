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
$lang['ClientAccounts.!success.defaultaccount_updated'] = "Der Standard Account für die Bezahlung wurde gespeichert.";
$lang['ClientAccounts.!success.defaultaccount_deleted'] = "Die Standard Zahlungsart wurde entfernt.";
$lang['ClientAccounts.!success.account_created'] = "Das Zahlungskonto wurde erfolgreich erstellt.";
$lang['ClientAccounts.!success.ccaccount_deleted'] = "Das Zahlungskonto wurde erfolgreich gelöscht.";
$lang['ClientAccounts.!success.ccaccount_updated'] = "Der Zahlungsaccount wurde erfolgreich bearbeitet.";
$lang['ClientAccounts.!success.achaccount_deleted'] = "Der Zahlungsaccount wurde erfolgreich gelöscht.";
$lang['ClientAccounts.!success.achaccount_updated'] = "Das Zahlungskonto wurde erfolgreich aktualisiert.";
$lang['ClientAccounts.!error.account_invalid'] = "Die angegebene Zahlungskontoart ist deaktiviert oder ungültig.";
$lang['ClientAccounts.!error.payment_account_type_invalid'] = "
Ungültiger Zahlungskontotyp
";
$lang['ClientAccounts.!notice.disabled'] = "Die Möglichkeit, Zahlungskonten hinzuzufügen, ist derzeit deaktiviert.";
$lang['ClientAccounts.!notice.ach_disabled'] = "Lastschrift-Zahlungskonten sind derzeit deaktiviert und möglicherweise nicht aktualisiert.";
$lang['ClientAccounts.!notice.cc_disabled'] = "
Kreditkartenzahlungskonten sind derzeit deaktiviert und können nicht aktualisiert werden.
";
$lang['ClientAccounts.!notice.reenable_autodebit'] = "Automatische Zahlungen wurden für dieses Konto deaktiviert, bitte kontaktieren Sie den Support um dies wieder zu reaktivieren. ";
$lang['ClientAccounts.!info.account_info'] = "
Zahlungskonten ermöglichen es Ihnen, Zahlungsinformationen zu archivieren und können zur Bezahlung von Rechnungen verwendet werden. Ein Zahlungskonto, das als Standardkonto ausgewählt ist, wird für automatische wiederkehrende Zahlungen verwendet.
";
$lang['ClientAccounts.index.page_title'] = "Kunde #%1\$s Accounts"; // %1$s is the client ID number
$lang['ClientAccounts.index.create_account'] = "Zahlungskonto hinzufügen";
$lang['ClientAccounts.index.boxtitle_accounts'] = "Zahlungsaccounts";
$lang['ClientAccounts.index.heading_name'] = "Name";
$lang['ClientAccounts.index.heading_type'] = "Art";
$lang['ClientAccounts.index.heading_last4'] = "Letzte 4";
$lang['ClientAccounts.index.heading_options'] = "Optionen";
$lang['ClientAccounts.index.option_edit'] = "Bearbeiten";
$lang['ClientAccounts.index.option_delete'] = "Löschen";
$lang['ClientAccounts.index.type_cc'] = "%1\$s - %2\$s"; // %1$s is the account type (Credit Card) and %2$s is the type of account (MasterCard, Visa, etc.)
$lang['ClientAccounts.index.type_ach'] = "%1\$s - %2\$s"; // %1$s is the account type (ACH) and %2$s is the type of account (Checking or Savings)
$lang['ClientAccounts.index.confirm_delete'] = "Möchten Sie dieses Zahlungskonto wirklich löschen?";
$lang['ClientAccounts.index.field_accountsubmit'] = "Aktiviere als standardmäßiges Zahlungskonto.";
$lang['ClientAccounts.index.no_results'] = "Sie haben keine Zahlungskonten.";
$lang['ClientAccounts.add.page_title'] = "Kunde #%1\$s Zahlungskonto hinzufügen"; // %1$s is the client ID number
$lang['ClientAccounts.add.heading_account_type'] = "Account Typ";
$lang['ClientAccounts.add.field_cc_type'] = "Kreditkarte";
$lang['ClientAccounts.add.field_ach_type'] = "ACH";
$lang['ClientAccounts.add.boxtitle_create'] = "Zahlungskonto hinzufügen";
$lang['ClientAccounts.add.field_nextsubmit'] = "Fortsetzen";
$lang['ClientAccounts.add.field_accountsubmit'] = "Account erstellen";
$lang['ClientAccounts.editach.page_title'] = "
Kunde# %1\$s ACH-Konto bearbeiten
"; // %1$s is the client ID number
$lang['ClientAccounts.editach.boxtitle_editach'] = "Bearbeite ACH Account";
$lang['ClientAccounts.editach.field_accountsubmit'] = "
Konto bearbeiten
";
$lang['ClientAccounts.editcc.page_title'] = "Kunde #%1\$s Kreditkarten Account bearbeiten"; // %1$s is the client ID number
$lang['ClientAccounts.editcc.boxtitle_editcc'] = "Kreditkartenkonto bearbeiten";
$lang['ClientAccounts.editcc.field_accountsubmit'] = "Account bearbeiten";
$lang['ClientAccounts.setcontactview.text_none'] = "Leer";
$lang['ClientAccounts.cc_info.heading_cc'] = "Kreditkarteninformation";
$lang['ClientAccounts.cc_info.field_number'] = "Nummer";
$lang['ClientAccounts.cc_info.field_security'] = "Sicherheits Code";
$lang['ClientAccounts.cc_info.field_expiration'] = "Ablaufdatum";
$lang['ClientAccounts.cc_info.field_savedetails'] = "Account speichern";
$lang['ClientAccounts.cc_info.tooltip_code'] = "Der 3- oder 4-stellige Sicherheitscode, der sich normalerweise auf der Rückseite der Karte befindet.";
$lang['ClientAccounts.ach_info.heading_ach'] = "Bankkonto Information";
$lang['ClientAccounts.ach_info.field_type'] = "Typ";
$lang['ClientAccounts.ach_info.field_accountnum'] = "IBAN";
$lang['ClientAccounts.ach_info.field_routingnum'] = "Routingnummer";
$lang['ClientAccounts.ach_info.field_savedetails'] = "Account speichern";
$lang['ClientAccounts.!info.no_accounts'] = "Sie haben derzeit keine Zahlungskonten. Fügen Sie unten Ihr erstes Zahlungskonto hinzu.";
$lang['ClientAccounts.navigation.nav_return'] = "Zurück zum Dashboard";
$lang['ClientAccounts.verifyach.page_title'] = "Kunde #%1\$s ACH-Konto verifizieren"; // %1$s is the client ID number
$lang['ClientAccounts.verifyach.field_firstdeposit'] = "Erste Einzahlung";
$lang['ClientAccounts.contact_info.field_city'] = "Stadt";
$lang['ClientAccounts.contact_info.field_email'] = "E-Mail";
?>