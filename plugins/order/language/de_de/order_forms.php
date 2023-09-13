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
$lang['OrderForms.!error.name.empty'] = "Sie müssen einen Namen für das Formular eingeben.";
$lang['OrderForms.!error.label.empty'] = "Sie müssen eine Bezeichnung für das Formular eingeben.";
$lang['OrderForms.!error.label.unique'] = "Eine Bestellformular mit dem label existiert bereits.";
$lang['OrderForms.!error.template.supported'] = "
Die ausgewählte Vorlage unterstützt diese Auftragsart nicht.
";
$lang['OrderForms.!error.client_group_id.valid'] = "Diese Kundengruppe existiert nicht.";
$lang['OrderForms.!error.require_tos.valid'] = "
Wenn Sie den Nutzungsbedingungen zustimmen müssen, müssen Sie eine URL zu den Bedingungen angeben.
";
$lang['OrderForms.!error.order_form_id.exists'] = "Das Bestellformular kann nicht gelöscht werden, da ausstehende Bestellungen für dieses Formular vorliegen.";
$lang['OrderForms.!error.date_added.valid'] = "Das hinzugefügte Datum muss ein gültiges Datum sein.";
$lang['OrderForms.!error.visibility.valid'] = "Die angegebene Sichtbarkeit wird nicht unterstützt.";
$lang['OrderForms.getVisibilities.public'] = "Öffentlichkeit";
$lang['OrderForms.getVisibilities.shared'] = "Geteilt";
$lang['OrderForms.getVisibilities.client'] = "Nur für Kunden";
$lang['OrderForms.!error.label.length'] = "Die Kennzeichnungslänge darf 32 Zeichen nicht überschreiten.";
$lang['OrderOrders.getNoticeIntervals.hours'] = "%1\$s Stunden"; // %1$s is the number of hours
?>