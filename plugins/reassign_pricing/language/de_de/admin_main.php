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
$lang['AdminMain.!success.service_updated'] = "Die Service-Preisgestaltung wurde erfolgreich aktualisiert.";
$lang['AdminMain.!warning.reassign_pricing'] = "Die Neuzuweisung der Preise ändert nur das Paket und die Preise, die mit diesem Service verknüpft sind. Führen Sie diese Aktion nicht für Upgrades oder Downgrades durch.";
$lang['AdminMain.index.page_title'] = "Kunde #%1\$s Preis neu zuordnen"; // %1$s is the client ID code
$lang['AdminMain.index.boxtitle_services'] = "Dienste für Kunde #%1\$s"; // %1$s is the client ID code
$lang['AdminMain.index.link_client'] = "Zurück zu Client # %1\$s"; // %1$s is the client ID code
$lang['AdminMain.index.heading_package'] = "Paket";
$lang['AdminMain.index.heading_label'] = "Etikette";
$lang['AdminMain.index.heading_term'] = "Begriff";
$lang['AdminMain.index.heading_date_created'] = "Datum erstellt";
$lang['AdminMain.index.heading_date_renews'] = "Datum erneuern";
$lang['AdminMain.index.heading_options'] = "Optionen";
$lang['AdminMain.index.recurring_term'] = "%1\$s %2\$s @ %3\$s"; // %1$s is the term, %2$s is the period, %3$s is the renewal price
$lang['AdminMain.index.text_never'] = "noch nie";
$lang['AdminMain.index.no_results'] = "Es sind keine Dienste verfügbar, um die Preisgestaltung neu zuzuordnen.";
$lang['AdminMain.index.option_service'] = "Preis neu zuweisen";
$lang['AdminMain.service.term_onetime'] = "Einmalig - %3\$s"; // %1$s is the pricing term, %2$s is the pricing period, and %3$s is the formatted price
$lang['AdminMain.service.term'] = "%1\$s %2\$s - %3\$s"; // %1$s is the pricing term, %2$s is the pricing period, and %3$s is the formatted price
$lang['AdminMain.service.boxtitle_pricing'] = "
Preis für Service neu zuweisen: %1\$s - %2\$s
"; // %1$s is the package name, %2$s is the service name
$lang['AdminMain.service.heading_information'] = "
Service Information
";
$lang['AdminMain.service.text_package_name'] = "Paket Name:";
$lang['AdminMain.service.text_label'] = "Etikette:";
$lang['AdminMain.service.text_qty'] = "Menge:";
$lang['AdminMain.service.text_term'] = "Begriff:";
$lang['AdminMain.service.text_status'] = "
Paketnamen:
";
$lang['AdminMain.service.text_date_added'] = "Hinzugefügt am:";
$lang['AdminMain.service.text_date_renews'] = "Erneuerungsdatum:";
$lang['AdminMain.service.text_recurring_coupon'] = "Wiederkehrender Coupon:";
$lang['AdminMain.service.text_coupon_percent'] = "%1\$s (%2\$s%%)"; // %1$s is the coupon code, %2$s is the coupon discount percentage. You MUST use two % signs to represent a single percent (i.e. %%)
$lang['AdminMain.service.text_coupon_amount'] = "%1\$s (%2\$s)"; // %1$s is the coupon code, %2$s is the formatted coupon amount
$lang['AdminMain.service.text_renewal_price'] = "Preis für eine Verlängerung:";
$lang['AdminMain.service.heading_pricing'] = "Preisgestaltung neu zuweisen";
$lang['AdminMain.service.field_pricing'] = "Paket / Laufzeit";
$lang['AdminMain.service.field_cancel'] = "Stornieren";
$lang['AdminMain.service.field_submit'] = "Speichern";
$lang['AdminMain.service.field_group'] = "Paketgruppe";
?>