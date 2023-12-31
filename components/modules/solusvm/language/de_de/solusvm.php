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
$lang['Solusvm.!actions.boot'] = "Booten";
$lang['Solusvm.!actions.reboot'] = "Neustart";
$lang['Solusvm.!actions.shutdown'] = "Herunterfahren";
$lang['Solusvm.!actions.reinstall'] = "Neuinstallieren";
$lang['Solusvm.!actions.hostname'] = "Hostname ändern";
$lang['Solusvm.!actions.password'] = "Passwort ändern";
$lang['Solusvm.!error.server_name.empty'] = "Bitte geben Sie eine Server-Bezeichnung ein.";
$lang['Solusvm.!error.user_id.empty'] = "
Bitte geben Sie eine Benutzer-ID ein.
";
$lang['Solusvm.!error.key.empty'] = "Bitte geben Sie einen Schlüssel ein.";
$lang['Solusvm.!error.host.format'] = "Der hostname ist ungültig";
$lang['Solusvm.!error.port.format'] = "Bitte geben Sie eine gültige Portnummer ein.";
$lang['Solusvm.!error.meta[type].valid'] = "Bitte wählen Sie einen gültigen Virtualisierungstyp.";
$lang['Solusvm.!error.meta[plan].empty'] = "
Bitte wählen Sie einen Plan aus.
";
$lang['Solusvm.!error.meta[set_template].format'] = "
Legen Sie fest, ob eine Vorlage ausgewählt werden soll oder ob Kunden eine Vorlage festlegen dürfen.
";
$lang['Solusvm.!error.meta[template].empty'] = "Bitte wählen Sie ein Template.";
$lang['Solusvm.!error.api.internal'] = "Ein interner Fehler ist aufgetreten oder der Server hat auf die Anfrage nicht geantwortet.";
$lang['Solusvm.!error.solusvm_hostname.format'] = "Geben Sie einen gültigen vollqualifizierten Domänennamen (z. B. host.domain.com) für den Hostnamen ein.";
$lang['Solusvm.!error.solusvm_template.valid'] = "Bitte wählen Sie eine gültige Vorlage.";
$lang['Solusvm.!error.create_client.failed'] = "Ein interner Fehler ist aufgetreten und das Kundenkonto konnte nicht erstellt werden.";
$lang['Solusvm.!error.api.template.valid'] = "Die ausgewählte Vorlage ist ungültig.";
$lang['Solusvm.!error.api.confirm.valid'] = "
Sie müssen zur Kenntnis nehmen, dass Sie die Neuinstallationsaktion verstanden haben, um die Neuinstallation der Vorlage durchführen zu können.
";
$lang['Solusvm.!error.solusvm_root_password.length'] = "Das Root-Passwort muss mindestens 6 Zeichen lang sein.";
$lang['Solusvm.!error.solusvm_root_password.matches'] = "
Die Root-Passwörter stimmen nicht überein.
";
$lang['Solusvm.please_select'] = "-- Bitte auswählen --";
$lang['Solusvm.!bytes.value'] = "%1\$s%2\$s"; // %1$s is a number value, %2$s is the unit of that value (i.e., one of B, KB, MB, GB)
$lang['Solusvm.!percent.used'] = "%1\$s%%"; // %1$s is a percentage value
$lang['Solusvm.name'] = "SolusVM";
$lang['Solusvm.module_row'] = "SolusVM Master Server";
$lang['Solusvm.module_row_plural'] = "Server";
$lang['Solusvm.module_group'] = "SolusVM Hauptgruppe";
$lang['Solusvm.add_module_row'] = "
Server hinzufügen
";
$lang['Solusvm.add_module_group'] = "Servergruppe hinzufügen";
$lang['Solusvm.manage.module_rows_title'] = "SolusVM Master Server";
$lang['Solusvm.manage.module_groups_title'] = "SolusVM Master-Server-Gruppen";
$lang['Solusvm.manage.module_rows_heading.server_label'] = "Serverkennzeichnung";
$lang['Solusvm.manage.module_rows_heading.host'] = "Hostname";
$lang['Solusvm.manage.module_rows_heading.options'] = "Optionen";
$lang['Solusvm.manage.module_groups_heading.name'] = "Gruppenname";
$lang['Solusvm.manage.module_groups_heading.servers'] = "Serveranzahl";
$lang['Solusvm.manage.module_groups_heading.options'] = "Optionen";
$lang['Solusvm.manage.module_rows.edit'] = "
Bearbeiten
";
$lang['Solusvm.manage.module_groups.edit'] = "Bearbeiten";
$lang['Solusvm.manage.module_rows.delete'] = "Löschen";
$lang['Solusvm.manage.module_groups.delete'] = "Löschen";
$lang['Solusvm.manage.module_rows.confirm_delete'] = "Möchten Sie diesen Server wirklich löschen?";
$lang['Solusvm.manage.module_groups.confirm_delete'] = "Möchten Sie diese Servergruppe wirklich löschen?";
$lang['Solusvm.manage.module_rows_no_results'] = "Es gibt keine Server.";
$lang['Solusvm.manage.module_groups_no_results'] = "Es sind keine Servergruppen vorhanden .";
$lang['Solusvm.order_options.first'] = "Erster nicht voller Server";
$lang['Solusvm.row_meta.server_name'] = "Serverkennzeichnung";
$lang['Solusvm.row_meta.user_id'] = "User-ID";
$lang['Solusvm.row_meta.key'] = "Schlüssel";
$lang['Solusvm.row_meta.host'] = "Hostname";
$lang['Solusvm.row_meta.port'] = "
SSL-Portnummer
";
$lang['Solusvm.row_meta.default_port'] = "5656";
$lang['Solusvm.types.openvz'] = "OpenVZ";
$lang['Solusvm.types.xen'] = "Xen";
$lang['Solusvm.types.xen_hvm'] = "Xen HVM";
$lang['Solusvm.types.kvm'] = "KVM";
$lang['Solusvm.add_row.box_title'] = "SolusVM Server hinzufügen";
$lang['Solusvm.add_row.basic_title'] = "Grundeinstellungen";
$lang['Solusvm.add_row.add_btn'] = "Server hinzufügen";
$lang['Solusvm.edit_row.box_title'] = "Bearbeiten Sie den SolusVM-Server";
$lang['Solusvm.edit_row.basic_title'] = "Grundeinstellungen";
$lang['Solusvm.edit_row.add_btn'] = "Server aktualisieren";
$lang['Solusvm.package_fields.type'] = "Art";
$lang['Solusvm.package_fields.template'] = "Vorlage";
$lang['Solusvm.package_fields.admin_set_template'] = "Wählen Sie eine Vorlage aus";
$lang['Solusvm.package_fields.client_set_template'] = "Lassen Sie die Vorlage des Clients festlegen";
$lang['Solusvm.package_fields.plan'] = "Planen";
$lang['Solusvm.package_fields.assigned_nodes'] = "
Zugewiesene Knoten
";
$lang['Solusvm.package_fields.available_nodes'] = "
Verfügbare Knoten
";
$lang['Solusvm.service_field.solusvm_hostname'] = "Hostname";
$lang['Solusvm.service_field.solusvm_template'] = "Vorlage";
$lang['Solusvm.service_info.solusvm_main_ip_address'] = "Primäre IP-Adresse";
$lang['Solusvm.tab_actions'] = "Server Aktionen ";
$lang['Solusvm.tab_stats'] = "Statistiken";
$lang['Solusvm.tab_console'] = "Konsole";
$lang['Solusvm.tab_actions.heading_actions'] = "Aktionen";
$lang['Solusvm.tab_actions.status_online'] = "Online";
$lang['Solusvm.tab_actions.status_offline'] = "Offline";
$lang['Solusvm.tab_actions.status_disabled'] = "Deaktiviert";
$lang['Solusvm.tab_actions.server_status'] = "Server Status";
$lang['Solusvm.tab_actions.heading_reinstall'] = "Neu installieren";
$lang['Solusvm.tab_actions.field_template'] = "Vorlage";
$lang['Solusvm.tab_actions.field_confirm'] = "Ich verstehe, dass bei einer Neuinstallation alle Daten auf dem Server dauerhaft gelöscht werden und die ausgewählte Vorlage installiert wird.";
$lang['Solusvm.tab_actions.field_reinstall_submit'] = "Neuinstallation";
$lang['Solusvm.tab_actions.heading_hostname'] = "Hostnamen ändern";
$lang['Solusvm.tab_actions.text_hostname_reboot'] = "
Eine Änderung des Hostnamens wird erst wirksam, nachdem der Server neu gestartet wurde.
";
$lang['Solusvm.tab_actions.field_hostname'] = "Hostname";
$lang['Solusvm.tab_actions.field_hostname_submit'] = "Hostname ändern";
$lang['Solusvm.tab_actions.heading_password'] = "Passwort ändern";
$lang['Solusvm.tab_actions.field_password'] = "Neues Root Passwort";
$lang['Solusvm.tab_actions.field_confirm_password'] = "Passwort bestätigen";
$lang['Solusvm.tab_actions.field_password_submit'] = "Passwort ändern";
$lang['Solusvm.tab_client_actions.heading_actions'] = "Aktionen";
$lang['Solusvm.tab_client_actions.heading_server_status'] = "Server Status";
$lang['Solusvm.tab_client_actions.status_online'] = "Online";
$lang['Solusvm.tab_client_actions.status_offline'] = "Offline";
$lang['Solusvm.tab_client_actions.status_disabled'] = "Deaktiviert";
$lang['Solusvm.tab_client_actions.heading_reinstall'] = "Neu installieren";
$lang['Solusvm.tab_client_actions.field_template'] = "Vorlage";
$lang['Solusvm.tab_client_actions.field_confirm'] = "Ich verstehe, dass bei einer Neuinstallation alle Daten auf dem Server dauerhaft gelöscht werden und die ausgewählte Vorlage installiert wird.";
$lang['Solusvm.tab_client_actions.field_reinstall_submit'] = "Neuinstallieren";
$lang['Solusvm.tab_client_actions.heading_hostname'] = "Hostname ändern";
$lang['Solusvm.tab_client_actions.text_hostname_reboot'] = "Eine Änderung des Hostnamens wird erst nach einem Neustart des Servers wirksam.";
$lang['Solusvm.tab_client_actions.field_hostname'] = "Hostname";
$lang['Solusvm.tab_client_actions.field_hostname_submit'] = "Hostnamen ändern";
$lang['Solusvm.tab_client_actions.heading_password'] = "Passwort ändern";
$lang['Solusvm.tab_client_actions.field_password'] = "
Neues Root-Passwort
";
$lang['Solusvm.tab_client_actions.field_confirm_password'] = "
Passwort bestätigen
";
$lang['Solusvm.tab_client_actions.field_password_submit'] = "Passwort ändern";
$lang['Solusvm.tab_stats.heading_stats'] = "Statistiken";
$lang['Solusvm.tab_stats.bandwidth'] = "
Bandbreite:
";
$lang['Solusvm.tab_stats.bandwidth_stats'] = "%1\$s/%2\$s"; // %1$s is the bandwidth used, %2$s is the total bandwidth available
$lang['Solusvm.tab_stats.bandwidth_percent_available'] = "(%1\$s %%)"; // %1$s is the percentage of bandwidth used. You MUST use two % signs to represent a single percent (i.e. %%)
$lang['Solusvm.tab_stats.memory'] = "Speicher:";
$lang['Solusvm.tab_stats.memory_stats'] = "%1\$s/%2\$s"; // %1$s is the memory used, %2$s is the total memory available
$lang['Solusvm.tab_stats.memory_percent_available'] = "(%1\$s %%)"; // %1$s is the percentage of memory used. You MUST use two % signs to represent a single percent (i.e. %%)
$lang['Solusvm.tab_stats.space'] = "Festplattenplatz:";
$lang['Solusvm.tab_stats.space_stats'] = "%1\$s/%2\$s"; // %1$s is the hard disk space used, %2$s is the total hard disk space available
$lang['Solusvm.tab_stats.space_percent_available'] = "(%1\$s %%)"; // %1$s is the percentage of hard disk space used. You MUST use two % signs to represent a single percent (i.e. %%)
$lang['Solusvm.tab_stats.heading_graphs'] = "Grafiken";
$lang['Solusvm.tab_client_stats.heading_stats'] = "Statistiken";
$lang['Solusvm.tab_client_stats.heading_graphs'] = "Grafiken";
$lang['Solusvm.tab_console.heading_console'] = "Konsole";
$lang['Solusvm.tab_console.console_username'] = "Konsolen Benutzername:";
$lang['Solusvm.tab_console.console_password'] = "Konsolenpasswort:";
$lang['Solusvm.tab_console.vnc_ip'] = "VNC-Host:";
$lang['Solusvm.tab_console.vnc_port'] = "VNC Port:";
$lang['Solusvm.tab_console.vnc_password'] = "VNC Passwort:";
$lang['Solusvm.tab_client_console.heading_console'] = "Konsole";
$lang['Solusvm.package_fields.set_node'] = "Weisen Sie eine Gruppe von Knoten zu";
$lang['Solusvm.package_fields.set_node_group'] = "Knotengruppe zuweisen";
$lang['Solusvm.package_fields.node_group'] = "Knotengruppe";
$lang['SolusVM.!error.simplexml_required'] = "Die Erweiterung simplexml ist für dieses Modul erforderlich.";
$lang['Solusvm.!error.meta[nodes].empty'] = "
Bitte wählen Sie mindestens einen Knoten oder eine Knotengruppe aus.
";
$lang['Solusvm.!error.solusvm_vserver_id.format'] = "Die Virtual Server ID muss eine Ganzzahl sein.";
$lang['Solusvm.service_field.solusvm_vserver_id'] = "Virtuelle Server-ID";
$lang['Solusvm.service_field.tooltip.solusvm_vserver_id'] = "Die Virtual Server ID gibt die VPS von SolusVM an, an die dieser Dienst angehängt wird. Das Ändern dieses Werts wirkt sich nur lokal auf diesen Dienst aus";
$lang['Solusvm.tab_status.no_results'] = "
Statistiken sind derzeit nicht verfügbar.
";
$lang['Solusvm.tab_client_stats.usage'] = "(%1\$s/%2\$s)"; // %1$s is the amount of resources used, %2$s is the amount of total resources available
$lang['Solusvm.tab_client_stats.bandwidth'] = "Bandbreite";
$lang['Solusvm.tab_client_stats.memory'] = "Speicher";
$lang['Solusvm.tab_client_stats.space'] = "Festplattenspeicherplatz";
$lang['Solusvm.tab_client_console.console_username'] = "
Konsolen-Benutzername
";
$lang['Solusvm.tab_client_console.console_password'] = "Konsolenpasswort";
$lang['Solusvm.tab_client_console.vnc_password'] = "VNC Passwort";
$lang['Solusvm.!error.configoptions[customextraip].valid'] = "
Die Anzahl der zusätzlichen IPs darf nicht verringert werden, ohne anzugeben, welche IPs entfernt werden sollen.
";
$lang['Solusvm.tab_ips'] = "IP Addressen";
$lang['Solusvm.tab_ips.heading_ips'] = "
IP-Adressen
";
$lang['Solusvm.tab_ips.primary_ip'] = "
Primäre IP-Adresse: %1\$s
"; // %1$s is the IP address
$lang['Solusvm.tab_ips.heading_extra_ips'] = "Zusätzliche IP-Adressen";
$lang['Solusvm.tab_ips.heading_ip'] = "
IP-Adresse
";
$lang['Solusvm.tab_ips.heading_options'] = "Optionen";
$lang['Solusvm.tab_ips.option_remove'] = "IP entfernen ";
$lang['Solusvm.tab_ips.confirm_remove'] = "Möchten Sie diese IP-Adresse wirklich dauerhaft entfernen?";
$lang['Solusvm.tab_client_ips.heading_extra'] = "Zusätzliche IP-Adressen";
$lang['Solusvm.tab_client_ips.primary_ip'] = "
Primäre IP-Adresse
";
$lang['Solusvm.tab_client_ips.heading_remove_ip'] = "Entfernen Sie IP %1\$s"; // %1$s is the IP address
$lang['Solusvm.tab_client_ips.confirm_remove_ip'] = "Möchten Sie diese IP-Adresse wirklich dauerhaft entfernen?";
$lang['Solusvm.tab_client_ips.remove_ip'] = "Entferne IP";
$lang['Solusvm.tab_client_ips.cancel'] = "Abrrechen";
$lang['Solusvm.tab_actions.node'] = "Knoten: %1\$s"; // %1$s is the name of the node
$lang['Solusvm.tab_client_actions.heading_node'] = "Knoten";
$lang['Solusvm.!error.meta[total_base_ip_addresses].format'] = "Bitte geben Sie nur Ziffern für die IP-Adresse mit einem Wert von 1 oder mehr ein.";
$lang['Solusvm.package_fields.total_base_ip_addresses'] = "Basis-IP-Adressmenge";
$lang['Solusvm.package_fields.tooltip.total_base_ip_addresses'] = "Geben Sie die Gesamtzahl der IP-Adressen ein, die neuen Diensten hinzugefügt werden sollen. Es muss mindestens eine geben, und die IPs können nicht entfernt werden.";
$lang['Solusvm.!success.boot'] = "Der Server startet jetzt.";
$lang['Solusvm.!success.reboot'] = "
Der Server wird jetzt neu gestartet.
";
$lang['Solusvm.!success.shutdown'] = "Der Server wird jetzt heruntergefahren.";
$lang['Solusvm.!success.password'] = "Das Passwort wurde erfolgreich geändert.";
$lang['Solusvm.!success.hostname'] = "Der Hostname wurde erfolgreich geändert.";
$lang['Solusvm.!success.reinstall'] = "
Der Server wird jetzt neu installiert.
";
$lang['Solusvm.tab_actions.text_generate_password'] = "Passwort generieren";
$lang['Solusvm.tab_client_actions.text_generate_password'] = "
Passwort generieren
";
?>