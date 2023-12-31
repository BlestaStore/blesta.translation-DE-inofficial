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
$lang['StaffGroups.!error.staff_group_id.exists'] = "Ungültige Personal Gruppen-ID.";
$lang['StaffGroups.!error.company_id.exists'] = "Ungültige Firmen ID.";
$lang['StaffGroups.!error.name.empty'] = "Bitte einen Namen eingeben.";
$lang['StaffGroups.!error.name.length'] = "Die Länge des Namens darf 64 Zeichen nicht überschreiten.";
$lang['StaffGroups.!error.no_company_id.exists'] = "
Kann sich nicht anmelden, keiner Firma zugeordnet.
";
$lang['StaffGroups.!error.num_staff.zero'] = "Die Gruppe %1\$s kann nicht gelöscht werden, da noch Mitglieder in dieser Gruppe sind"; // %1$s is the staff group name
$lang['StaffGroups.permission_group.clients'] = "Kunden";
$lang['StaffGroups.permission_group.billing'] = "Abrechnung";
$lang['StaffGroups.permission_group.packages'] = "Pakete";
$lang['StaffGroups.permission_group.tools'] = "Werkzeuge";
$lang['StaffGroups.permission_group.search'] = "Suche";
$lang['StaffGroups.permission_group.settings'] = "Einstellungen";
$lang['StaffGroups.permissions.admin_clients_view'] = "Kunden ansehen";
$lang['StaffGroups.permissions.admin_clients_add'] = "Kunde hinzufügen";
$lang['StaffGroups.permissions.admin_clients_edit'] = "Client bearbeiten";
$lang['StaffGroups.permissions.admin_clients_invoices'] = "Rechnungen auflisten";
$lang['StaffGroups.permissions.admin_clients_viewinvoice'] = "Rechnung anzeigen";
$lang['StaffGroups.permissions.admin_clients_createinvoice'] = "Rechnung erstellen";
$lang['StaffGroups.permissions.admin_clients_editinvoice'] = "Rechnung bearbeiten";
$lang['StaffGroups.permissions.admin_clients_editrecurinvoice'] = "Bearbeiten Sie die wiederkehrende Rechnung";
$lang['StaffGroups.permissions.admin_clients_deleteinvoice'] = "Rechnung löschen";
$lang['StaffGroups.permissions.admin_clients_transactions'] = "Transaktionsliste";
$lang['StaffGroups.permissions.admin_clients_edittransaction'] = "Bearbeite Transaktion";
$lang['StaffGroups.permissions.admin_clients_services'] = "Dienstleistungen anzeigen";
$lang['StaffGroups.permissions.admin_clients_addservice'] = "Dienst hinzufügen";
$lang['StaffGroups.permissions.admin_clients_editservice'] = "Dienstleistung bearbeiten";
$lang['StaffGroups.permissions.admin_clients_deleteservice'] = "Dienst löschen";
$lang['StaffGroups.permissions.admin_clients_addcontact'] = "Kontakt hinzufügen";
$lang['StaffGroups.permissions.admin_clients_editcontact'] = "Kontakt ändern ";
$lang['StaffGroups.permissions.admin_clients_deletecontact'] = "Kontakt löschen";
$lang['StaffGroups.permissions.admin_clients_quickupdate'] = "Schnelles Update";
$lang['StaffGroups.permissions.admin_clients_accounts'] = "Zahlungskonten ansehen";
$lang['StaffGroups.permissions.admin_clients_addccaccount'] = "
Kreditkartenzahlungskonto hinzufügen
";
$lang['StaffGroups.permissions.admin_clients_addachaccount'] = "
ACH-Zahlungskonto hinzufügen
";
$lang['StaffGroups.permissions.admin_clients_editccaccount'] = "Kreditkartenkontokonto bearbeiten";
$lang['StaffGroups.permissions.admin_clients_editachaccount'] = "ACH-Zahlungskonto bearbeiten";
$lang['StaffGroups.permissions.admin_clients_deleteccaccount'] = "Kreditkarten Account löschen";
$lang['StaffGroups.permissions.admin_clients_deleteachaccount'] = "Löschen Sie das ACH-Zahlungskonto";
$lang['StaffGroups.permissions.admin_clients_notes'] = "Notizen anzeigen";
$lang['StaffGroups.permissions.admin_clients_addnote'] = "Notiz hinzufügen";
$lang['StaffGroups.permissions.admin_clients_editnote'] = "Notiz bearbeiten";
$lang['StaffGroups.permissions.admin_clients_deletenote'] = "Notiz löschen";
$lang['StaffGroups.permissions.admin_clients_packages'] = "Pakete einstellen";
$lang['StaffGroups.permissions.admin_clients_email'] = "E-Mail-Client";
$lang['StaffGroups.permissions.admin_clients_emails'] = "Maillog anzeigen";
$lang['StaffGroups.permissions.admin_clients_merge'] = "Kunde zusammenführen";
$lang['StaffGroups.permissions.admin_clients_delete'] = "Kunde Löschen";
$lang['StaffGroups.permissions.admin_billing_invoices'] = "Rechnungen";
$lang['StaffGroups.permissions.admin_billing_services'] = "Services auflisten";
$lang['StaffGroups.permissions.admin_billing_transactions'] = "Transaktionen auflisten";
$lang['StaffGroups.permissions.admin_tools_convert_currency'] = "Währung umrechnen";
$lang['StaffGroups.permissions.admin_tools_logs'] = "Protokolle";
$lang['StaffGroups.permissions.admin_packages_add'] = "Paket hinzufügen";
$lang['StaffGroups.permissions.admin_packages_edit'] = "Paket bearbeiten";
$lang['StaffGroups.permissions.admin_packages_groups'] = "
Paketgruppen anzeigen
";
$lang['StaffGroups.permissions.admin_settings_company'] = "Firmen Einstellung";
$lang['StaffGroups.permissions.admin_company_general_localization'] = "Lokalisierung";
$lang['StaffGroups.permissions.admin_company_general_international'] = "Internationalisierung";
$lang['StaffGroups.permissions.admin_company_general_themes'] = "Themen";
$lang['StaffGroups.permissions.admin_company_general_encryption'] = "Verschlüsselung";
$lang['StaffGroups.permissions.admin_company_billing_invoices'] = "
Rechnungs- und Gebührenoptionen
";
$lang['StaffGroups.permissions.admin_company_billing_customization'] = "Rechnungsanpassung";
$lang['StaffGroups.permissions.admin_company_billing_deliverymethods'] = "Rechnungslieferung";
$lang['StaffGroups.permissions.admin_company_billing_coupons'] = "Gutscheine";
$lang['StaffGroups.permissions.admin_company_modules'] = "Module";
$lang['StaffGroups.permissions.admin_company_modules_manage'] = "Modul verwalten";
$lang['StaffGroups.permissions.admin_company_modules_install'] = "Modul installieren";
$lang['StaffGroups.permissions.admin_company_modules_uninstall'] = "Modul deinstallieren";
$lang['StaffGroups.permissions.admin_company_modules_upgrade'] = "Upgrade das Modul";
$lang['StaffGroups.permissions.admin_company_gateways'] = "
Zahlungs-Gateways
";
$lang['StaffGroups.permissions.admin_company_gateways_manage'] = "Gateway verwalten";
$lang['StaffGroups.permissions.admin_company_gateways_install'] = "Gateway installieren";
$lang['StaffGroups.permissions.admin_company_gateways_uninstall'] = "Gateway entfernen";
$lang['StaffGroups.permissions.admin_company_gateways_upgrade'] = "Upgrade Gateway";
$lang['StaffGroups.permissions.admin_company_emails_mail'] = "Mail Einstellungen";
$lang['StaffGroups.permissions.admin_company_emails_templates'] = "E-Mail-Vorlagen";
$lang['StaffGroups.permissions.admin_company_emails_signatures'] = "E-Mail Signaturen";
$lang['StaffGroups.permissions.admin_company_plugins'] = "Plugins";
$lang['StaffGroups.permissions.admin_company_plugins_manage'] = "Plugin verwalten";
$lang['StaffGroups.permissions.admin_company_plugins_install'] = "Plugin installieren";
$lang['StaffGroups.permissions.admin_company_plugins_uninstall'] = "Plugin deinstallieren";
$lang['StaffGroups.permissions.admin_company_plugins_upgrade'] = "Plugin Upgrade";
$lang['StaffGroups.permissions.admin_company_groups'] = "Kundengruppen";
$lang['StaffGroups.permissions.admin_settings_system'] = "Systemeinstellungen";
$lang['StaffGroups.permissions.admin_system_general_basic'] = "Grundeinstellungen";
$lang['StaffGroups.permissions.admin_system_general_geoip'] = "GeoIP Einstellungen";
$lang['StaffGroups.permissions.admin_system_general_maintenance'] = "Wartung";
$lang['StaffGroups.permissions.admin_system_general_license'] = "Lizenzschlüssel";
$lang['StaffGroups.permissions.admin_system_automation'] = "Automatisierung";
$lang['StaffGroups.permissions.admin_system_companies'] = "Firmen";
$lang['StaffGroups.permissions.admin_system_staff_manage'] = "
Mitarbeiter verwalten
";
$lang['StaffGroups.permissions.admin_system_staff_groups'] = "Mitarbeitergruppen";
$lang['StaffGroups.permissions.admin_system_api'] = "API Zugang";
$lang['StaffGroups.permissions.admin_system_upgrade'] = "Upgrade-Optionen";
$lang['StaffGroups.permissions.admin_system_help'] = "Hilfe";
$lang['StaffGroups.permissions.admin_system_marketplace'] = "Marktplatz";
$lang['StaffGroups.!error.action.exists'] = "Die Aktion für die E-Mail Gruppe %1\$s existiert nicht."; // %1$s is the name of the email group action
$lang['StaffGroups.permission_group.home'] = "Startseite";
$lang['StaffGroups.permissions.admin_main_calendar'] = "Kalender";
$lang['StaffGroups.permissions.admin_clients_loginasclient'] = "Als Kunde einloggen";
$lang['StaffGroups.permissions.admin_billing_printqueue'] = "Druckerwarteschlange";
$lang['StaffGroups.permissions.admin_billing_batch'] = "Stapel";
$lang['StaffGroups.permissions.admin_company_general_contacttypes'] = "Kontakttypen";
$lang['StaffGroups.permissions.admin_company_general_addcontacttype'] = "Kontakttyp hinzufügen";
$lang['StaffGroups.permissions.admin_company_general_editcontacttype'] = "Kontaktart bearbeiten";
$lang['StaffGroups.permissions.admin_company_general_deletecontacttype'] = "Kontaktart löschen";
$lang['StaffGroups.permissions.admin_company_general_installlanguage'] = "Installations Sprache   ";
$lang['StaffGroups.permissions.admin_company_general_uninstalllanguage'] = "Deinstallieren die Sprache";
$lang['StaffGroups.permissions.admin_company_billing_acceptedtypes'] = "
Akzeptierte Zahlungsarten
";
$lang['StaffGroups.permissions.admin_system_general_paymenttypes'] = "Bezahlmöglichkeiten";
$lang['StaffGroups.permissions.admin_system_general_addtype'] = "Zahlungsart hinzufügen";
$lang['StaffGroups.permissions.admin_system_general_edittype'] = "Zahlungsart bearbeiten";
$lang['StaffGroups.permissions.admin_system_general_deletetype'] = "
Zahlungsart löschen
";
$lang['StaffGroups.permissions.admin_packages_addgroup'] = "Gruppe hinzufügen";
$lang['StaffGroups.permissions.admin_packages_editgroup'] = "Gruppe bearbeiten";
$lang['StaffGroups.permissions.admin_packages_deletegroup'] = "Gruppe löschen ";
$lang['StaffGroups.permissions.admin_package_options'] = "Konfigurierbare Optionen";
$lang['StaffGroups.permissions.admin_company_general_addtheme'] = "Themes hinzufügen";
$lang['StaffGroups.permissions.admin_company_general_edittheme'] = "Theme bearbeiten";
$lang['StaffGroups.permissions.admin_company_general_deletetheme'] = "Theme löschen";
$lang['StaffGroups.permissions.admin_company_billing_addcoupon'] = "Coupon hinzufügen";
$lang['StaffGroups.permissions.admin_company_billing_editcoupon'] = "
Gutschein bearbeiten
";
$lang['StaffGroups.permissions.admin_company_billing_deletecoupon'] = "Gutschein löschen";
$lang['StaffGroups.permissions.admin_company_lookandfeel'] = "Aussehen und Gefühl";
$lang['StaffGroups.permissions.admin_company_themes'] = "
Themes
";
$lang['StaffGroups.permissions.admin_company_taxes'] = "Steuern";
$lang['StaffGroups.permissions.admin_company_emails_edittemplate'] = "E-Mail-Vorlage bearbeiten";
$lang['StaffGroups.permissions.admin_company_emails_addsignature'] = "E-Mail-Signatur hinzufügen";
$lang['StaffGroups.permissions.admin_company_emails_editsignature'] = "E-Mail Signatur editieren";
$lang['StaffGroups.permissions.admin_company_emails_deletesignature'] = "E-Mail Signatur löschen";
$lang['StaffGroups.permissions.admin_company_currencies'] = "Währungen";
$lang['StaffGroups.permissions.admin_system_backup'] = "Sicherungen";
$lang['StaffGroups.permissions.admin_system_staff_add'] = "Mitarbeiter hinzufügen";
$lang['StaffGroups.permissions.admin_system_staff_edit'] = "
Mitarbeiter bearbeiten
";
$lang['StaffGroups.permissions.admin_system_staff_status'] = "Mitarbeiterstatus";
$lang['StaffGroups.permissions.admin_system_staff_addgroup'] = "Mitarbeitergruppe hinzufügen";
$lang['StaffGroups.permissions.admin_system_staff_editgroup'] = "Mitarbeitergruppe bearbeiten";
$lang['StaffGroups.permissions.admin_system_staff_deletegroup'] = "Mitarbeitergruppe löschen";
$lang['StaffGroups.permissions.admin_company_automation'] = "Automatisierung";
$lang['StaffGroups.permissions.admin_clients_recordpayment'] = "Record Zahlung";
$lang['StaffGroups.permissions.admin_clients_makepayment'] = "Zahlung vornehmen";
$lang['StaffGroups.!error.session_lock.valid'] = "
Ungültiger Wert für Sitzungssperre
";
$lang['StaffGroups.permissions.admin_clients_service'] = "Service-Summen anzeigen";
$lang['StaffGroups.permissions.admin_reports'] = "Berichte";
$lang['StaffGroups.permissions.admin_reports_customize'] = "Berichte anpassen";
$lang['StaffGroups.permissions.admin_packages_delete'] = "Paket löschen";
$lang['StaffGroups.permissions.admin_company_general_marketing'] = "Marketing";
$lang['StaffGroups.permissions.admin_company_clientoptions_general'] = "Allgemeine Kundeneinstellungen";
$lang['StaffGroups.permissions.admin_company_clientoptions_requiredfields'] = "Erforderliche Kunden Felder";
$lang['StaffGroups.permissions.admin_company_plugins_settings'] = "Plugin-Einstellungen";
$lang['StaffGroups.permissions.admin_company_general_smartsearch'] = "Intelligente Suche";
$lang['StaffGroups.permissions.admin_company_lookandfeel_layout'] = "Gestaltung";
$lang['StaffGroups.permissions.admin_company_messengers_install'] = "Messenger installieren";
$lang['StaffGroups.permissions.admin_company_messengers_configuration'] = "Messenger-Konfiguration";
$lang['StaffGroups.permissions.admin_company_lookandfeel_editaction'] = "Aktion bearbeiten";
?>