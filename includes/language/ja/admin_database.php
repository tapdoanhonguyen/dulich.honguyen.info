<?php

/**
* @Project NUKEVIET 4.x
* @Author VINADES.,JSC <contact@vinades.vn>
* @Copyright (C) 2024 VINADES.,JSC. All rights reserved
* @Language 日本語
* @License CC BY-SA (http://creativecommons.org/licenses/by-sa/4.0/)
* @Createdate Apr 15, 2011, 08:22:00 AM
*/

if (!defined('NV_ADMIN') or !defined('NV_MAINFILE')) {
    die('Stop!!!');
}

$lang_translator['author'] = 'VINADES.,JSC (contact@vinades.vn)';
$lang_translator['createdate'] = '15/04/2011, 15:22';
$lang_translator['copyright'] = '@Copyright (C) 2010 VINADES.,JSC. All rights reserved';
$lang_translator['info'] = 'Language translated from https://translate.nukeviet.vn';
$lang_translator['langtype'] = 'lang_module';

$lang_module['main'] = '一般情報';
$lang_module['database_info'] = 'General information about the database &ldquo;<strong>%s</strong>&rdquo;'; // Language English
$lang_module['tables_info'] = '&ldquo;<strong>%s</strong>&rdquo;データベースのテーブル';
$lang_module['table_caption'] = '&ldquo;<strong>%s</strong>&rdquo;テーブル情報';
$lang_module['table_row_caption'] = '&ldquo;<strong>%s</strong>&rdquo;テーブルのフィールド情報';
$lang_module['db_host_info'] = 'Server'; // Language English
$lang_module['db_sql_version'] = 'Version'; // Language English
$lang_module['db_proto_info'] = 'TCP/IP version'; // Language English
$lang_module['server'] = 'Server name'; // Language English
$lang_module['db_dbname'] = 'データベース名';
$lang_module['db_uname'] = 'ユーザ名';
$lang_module['db_charset'] = 'コード群';
$lang_module['db_collation'] = '照合順序';
$lang_module['db_time_zone'] = 'Timezone';
$lang_module['table_name'] = 'テーブル名';
$lang_module['table_size'] = 'サイズ';
$lang_module['table_max_size'] = '最大のサイズ';
$lang_module['table_datafree'] = '未使用容量';
$lang_module['table_numrow'] = '行';
$lang_module['table_charset'] = 'コード';
$lang_module['table_type'] = 'タイプ';
$lang_module['row_format'] = 'フォーマット';
$lang_module['table_auto_increment'] = '自動番号';
$lang_module['table_create_time'] = '作成日';
$lang_module['table_update_time'] = '更新';
$lang_module['table_check_time'] = 'チェック';
$lang_module['optimize'] = '最適化';
$lang_module['savefile'] = 'サーバに保存';
$lang_module['download'] = 'ダウンロード';
$lang_module['download_all'] = '構造とデータ';
$lang_module['download_str'] = '構造のみ';
$lang_module['ext_sql'] = 'SQLファイル';
$lang_module['ext_gz'] = 'GZipファイル';
$lang_module['submit'] = '返信';
$lang_module['third'] = 'テーブル数: %1$d; サイズ: %2$s; 未使用: %3$s';
$lang_module['optimize_result'] = '最適化済みテーブル:%1$s　%2$sのデータ量を開放しました。';
$lang_module['nv_show_tab'] = 'テーブル情報';
$lang_module['field_name'] = 'フィールド名';
$lang_module['field_type'] = 'タイプ';
$lang_module['field_null'] = '必須';
$lang_module['field_key'] = 'キー';
$lang_module['field_default'] = 'デフォルト';
$lang_module['field_extra'] = '追加';
$lang_module['php_code'] = 'PHPコード';
$lang_module['sql_code'] = 'SQLコード';
$lang_module['save_data'] = 'データベースを保存';
$lang_module['save_error'] = 'エラー： システムがファイルを書き込めません。 <br  /><br  /> 次のフォルダのchmodを確認してください: %1$s。';
$lang_module['save_ok'] = '保存完了';
$lang_module['save_download'] = 'ここをクリックすると、ファイルをダウンロードできます。';
$lang_module['dump_autobackup'] = '自動バックアップを有効にする';
$lang_module['dump_backup_ext'] = 'ファイルの拡張子';
$lang_module['dump_backup_day'] = 'Time to save database files backup'; // Language English
$lang_module['file_backup'] = 'データバックアップ';
$lang_module['file_nb'] = '順番';
$lang_module['file_name'] = 'ファイル名';
$lang_module['file_time'] = '時刻';
$lang_module['download_now'] = 'Database download now'; // Language English
$lang_module['dump_interval'] = 'Repeat following jobs'; // Language English
$lang_module['file_size'] = 'サイズ';
$lang_module['sampledata'] = 'Export sample data'; // Language English
$lang_module['sampledata_note'] = 'This is a way to export the entire database of the current website to a template file for the purpose of packaging the entire website. When installed new, the system will restore the old packaging data instead of installing the sample data in the installer. Please complete the required items below then click the make button to begin the process'; // Language English
$lang_module['sampledata_creat'] = 'Create a new sample data packet'; // Language English
$lang_module['sampledata_list'] = 'List of generated template packets'; // Language English
$lang_module['sampledata_empty'] = 'No sample data package yet'; // Language English
$lang_module['sampledata_start'] = 'Start creating'; // Language English
$lang_module['sampledata_dat_init'] = 'The process begins to run, please do not turn off the browser until the completion message or error message. The system is checking information'; // Language English
$lang_module['sampledata_name'] = 'Sample package name'; // Language English
$lang_module['sampledata_name_rule'] = 'Only enter characters from a-z and 0-9'; // Language English
$lang_module['sampledata_error_sys'] = 'Server error, please reload the page and try again'; // Language English
$lang_module['sampledata_error_name'] = 'Please enter a sample package name'; // Language English
$lang_module['sampledata_error_namerule'] = 'Please enter only characters from a-z and 0-9'; // Language English
$lang_module['sampledata_error_exists'] = 'This sample data package already exists, by clicking the <strong /> Start creating  button again, the system will overwrite the existing template data package. If you do not want to overwrite, enter a different name.'; // Language English
$lang_module['sampledata_error_writetmp'] = 'Error: The system failed to write data, give write permission to the% s directory and then execute again'; // Language English
$lang_module['sampledata_success_1'] = 'Data export successful! The system has written data to the file. Now you can clean the system to delete the extra files, then delete the config file and encapsulate the code to share.'; // Language English
$lang_module['sampledata_success_2'] = 'Data export was successful but the system failed to write to the file. You can download a manual <a href="%s"> <strong /> here ! </a> package'; // Language English
