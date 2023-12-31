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
$lang['AdminSystemBackup.!success.backup_updated'] = "Die Sicherungseinstellungen wurden erfolgreich aktualisiert!";
$lang['AdminSystemBackup.!success.sftp_test'] = "SFTP-Verbindung war erfolgreich!";
$lang['AdminSystemBackup.!success.amazons3_test'] = "
Die AmazonS3-Verbindung war erfolgreich!
";
$lang['AdminSystemBackup.!success.backup_uploaded'] = "Die Datensicherung wurde erfolgreich an den konfigurierten Remote-Dienst übertragen!";
$lang['AdminSystemBackup.!error.sftp_test'] = "Die SFTP Verbindung schlug fehl. Bitte überprüfen Sie Ihre Einstellungen und versuchen Sie es erneut.";
$lang['AdminSystemBackup.!error.amazons3_test'] = "Die AmazonS3 Verbindung fehlgeschlagen! Bitte überprüfen Sie die Einstellungen und versuchen Sie es erneut. Beachten Sie, dass die Verbindungsdetails Case-Sensitive sind.";
$lang['AdminSystemBackup.ftp.boxtitle_backup'] = "Sicheres FTP";
$lang['AdminSystemBackup.index.field_uploadbackup'] = "Offsite Backup erzwingen";
$lang['AdminSystemBackup.!error.backup_frequency'] = "
Ungültige Sicherungshäufigkeit
";
$lang['AdminSystemBackup.ftp.page_title'] = "Einstellungen > System > Backup > Sicheres FTP";
$lang['AdminSystemBackup.amazon.page_title'] = "Einstellungen -> System -> Backup -> Amazon S3";
$lang['AdminSystemBackup.amazon.boxtitle_backup'] = "Amazon S3";
$lang['AdminSystemBackup.index.page_title'] = "Einstellungen > System > Backup > On Demand";
$lang['AdminSystemBackup.index.boxtitle_index'] = "Auf Anfrage";
$lang['AdminSystemBackup.index.field_downloadbackup'] = "Laden Sie das Backup herunter";
$lang['AdminSystemBackup.index.text_note'] = "Hier können Sie eine Sicherungskopie Ihrer Blesta-Datenbank auf Ihren Computer herunterladen oder automatisch eine Sicherungskopie auf Ihren konfigurierten SFTP- und / oder Amazon S3-Server hochladen.";
$lang['AdminSystemBackup.!tooltip.ftp_rate'] = "Das Intervall, in dem diese Sicherung durchgeführt werden soll.";
$lang['AdminSystemBackup.!tooltip.amazons3_secret_key'] = "Der geheime Schlüssel des Amazon S3 Kontos.";
$lang['AdminSystemBackup.!tooltip.amazons3_rate'] = "Das Intervall, in dem diese Sicherung durchgeführt werden soll.";
$lang['AdminSystemBackup.ftp.field.ftp_username'] = "Benutzername";
$lang['AdminSystemBackup.amazon.field.test'] = "Teste diese Einstellungen";
$lang['AdminSystemBackup.amazon.field.amazons3_secretkey'] = "Geheimer Schlüssel";
?>