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

$lang_global['mod_authors'] = '管理者';
$lang_global['mod_groups'] = 'グループ';
$lang_global['mod_database'] = 'データベース';
$lang_global['mod_settings'] = '設定';
$lang_global['mod_cronjobs'] = '自動的なプロセス';
$lang_global['mod_modules'] = 'モジュール管理';
$lang_global['mod_themes'] = 'テーマ';
$lang_global['mod_siteinfo'] = '情報';
$lang_global['mod_language'] = '言語';
$lang_global['mod_upload'] = 'ファイル管理';
$lang_global['mod_webtools'] = 'ウェブツール';
$lang_global['go_clientsector'] = 'サイトのホームページ';
$lang_global['go_clientmod'] = 'プリビュー';
$lang_global['please_select'] = '選択してください。';
$lang_global['admin_password_empty'] = '管理者のパスワードを入力していません。';
$lang_global['adminpassincorrect'] = 'Administrator password &ldquo;<strong>%s</strong>&rdquo; is inaccurate. Try again'; // Language English
$lang_global['admin_password'] = 'パスワード';
$lang_global['admin_no_allow_func'] = 'この機能にアクセスできません。';
$lang_global['block_modules'] = 'モジュールのブロック';
$lang_global['hello_admin1'] = '%1$sようこそ！%2$sに管理者アカウントでログインしました。';
$lang_global['hello_admin2'] = 'これは%1$sアカウントです！あなたのセッションは%2$s前開きました。';
$lang_global['hello_admin3'] = '%1$sへようこそ！これは初めて管理システムにログインすることです。';
$lang_global['ftp_error_account'] = 'エラー：FTPサーバーに接続できません。FTP設定情報をチェックしてください。';
$lang_global['ftp_error_path'] = 'エラー：リモートパスが間違っています。';
$lang_global['login_error_account'] = 'エラー：Adminのユーザ名が設定されていない、もしくは、正しく設定されていません。（文字と数とアンダーバーの記号のみ使って下さい。最短%1$s文字、かつ最長%2$s文字にしてください。）';
$lang_global['login_error_password'] = 'エラー：Adminのユーザ名が設定されていない、もしくは、正しく設定されていません。（文字と数とアンダーバーの記号のみ使って下さい。最短%1$s文字、かつ最長%2$s文字にしてください。）';
$lang_global['login_error_security'] = 'エラー：セキュリティCodeは、有効でありません。（%1$sラテン文字のみ使ってください。）';
$lang_global['error_zlib_support'] = 'エラー：あなたのサーバーはzlib拡張モジュールがありません。zlib拡張モジュールを使用できるようにホスティング提供者に連絡してください。';
$lang_global['error_zip_extension'] = 'エラー：あなたのサーバーはZIP拡張モジュールがありません。ZIP拡張モジュールを使用できるようにホスティング提供者に連絡してください。';
$lang_global['mod_seotools'] = 'SEO tool'; // Language English
$lang_global['mod_subsite'] = 'Subsite manage'; // Language English
$lang_global['mod_extensions'] = 'Extensions'; // Language English
$lang_global['length_characters'] = 'Length characters'; // Language English
$lang_global['length_suggest_max'] = 'Should enter maximum %s characters'; // Language English
$lang_global['error_code_1'] = 'Address is invalid'; // Language English
$lang_global['error_code_2'] = 'HTTP protocol banned for this query.'; // Language English
$lang_global['error_code_3'] = 'Folder containing the file will be saved can not be written.'; // Language English
$lang_global['error_code_4'] = 'No utility that supports HTTP protocol.'; // Language English
$lang_global['error_code_5'] = 'There were too many redirect.'; // Language English
$lang_global['error_code_6'] = 'SSL certificate can not be checked.'; // Language English
$lang_global['error_code_7'] = 'HTTP request failed.'; // Language English
$lang_global['error_code_8'] = 'Could not save data to a temporary file.'; // Language English
$lang_global['error_code_9'] = 'Processing functions fopen() failed for file.'; // Language English
$lang_global['error_code_10'] = 'HTTP request failed with Curl.'; // Language English
$lang_global['error_code_11'] = 'There was an unknown error occurred.'; // Language English
$lang_global['error_valid_response'] = 'Data returns nonstandard.'; // Language English
$lang_global['go_instrucion'] = 'Instrucion document'; // Language English
$lang_global['admin_suspend'] = 'Account Suspended'; // Language English
$lang_global['phone_note_title'] = 'Rules of entering phone numbers'; // Language English
$lang_global['phone_note_content'] = '<ul><li>Phone number is divided into two parts. The first part is mandatory and for display on the site, the second part is not mandatory, and to make a call when you click on it.</li><li>The first part is expressed freely, but without the square brackets. The second part is in square brackets and contains only the following characters: digits, asterisk, pound sign, commas, periods, semicolons, and the plus sign ([0-9\*\#\.\,\;\+]).</li><li>For example, if you declare <strong>0438211725 (ext 601)</strong>, the number <strong>0438211725 (ext 601)</strong> will simply be displayed on the site. If you declare <strong>0438211725 (ext 601)[+84438211725,601]</strong>, the system will display the number <strong>0438211725 (ext 601)</strong> on the site. When clicked on this number will automatically call the following number <strong>tel:+84438211725,601</strong></li><li>You can declare more phone numbers in accordance with the above regulations. They are separated by |</li></ul>'; // Language English
$lang_global['multi_note'] = 'You can enter more than one value, separated by comma'; // Language English
$lang_global['multi_email_note'] = 'You can enter more than one value, separated by comma. The first e-mail is considered to be the main email and is used to send and receive mail.'; // Language English
$lang_global['view_all'] = 'View all'; // Language English
$lang_global['email'] = 'Email'; // Language English
$lang_global['phonenumber'] = 'Phone'; // Language English
$lang_global['admin_pre_logout'] = 'Not me, log out'; // Language English
$lang_global['admin_hello_2step'] = 'Hi <strong class="admin-name">%s</strong>, please verify your account'; // Language English
$lang_global['admin_noopts_2step'] = 'No two-step verification method has been granted, temporarily you cannot log in to the administrator'; // Language English
$lang_global['admin_mactive_2step'] = 'You cannot verify because no method has been activated yet'; // Language English
$lang_global['admin_mactive_2step_choose0'] = 'Please click the button below to activate the verification method'; // Language English
$lang_global['admin_mactive_2step_choose1'] = 'Please select one of the verification methods below'; // Language English
$lang_global['admin_2step_opt_code'] = '2-Step Verification Code'; // Language English
$lang_global['admin_2step_opt_facebook'] = 'Facebook account'; // Language English
$lang_global['admin_2step_opt_google'] = 'Google account'; // Language English
$lang_global['admin_2step_other'] = 'Other methods'; // Language English
$lang_global['admin_oauth_error_getdata'] = 'Error: The system did not recognize the verification data. Verification failed!'; // Language English
$lang_global['admin_oauth_error_email'] = 'Error: The return email is not valid, you cannot verification'; // Language English
$lang_global['admin_oauth_error_savenew'] = 'Error: Unable to save the verification data'; // Language English
$lang_global['admin_oauth_error'] = 'Error: The verification is not valid, this account has not been authorized to verify'; // Language English
