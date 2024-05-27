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

$lang_module['blocks'] = 'ブロック管理';
$lang_module['change_func_name'] = '&ldquo;%2$s&rdquo;モジュールにある&ldquo;%1$s&rdquo;機能の名前を変更します。';
$lang_module['bl_list_title'] = '&ldquo;%2$s&rdquo;内にある機能&ldquo;%1$s&rdquo;のブロック';
$lang_module['add_block_title'] = '&ldquo;%3$s&rdquo;モジュールにある&ldquo;%2$s&rdquo;機能の&ldquo;%1$s&rdquo;ブロックを追加します。';
$lang_module['edit_block_title'] = '&ldquo;%4$s&rdquo;モジュールにある&ldquo;%3$s&rdquo;機能にある&ldquo;%2$s&rdquo;で&ldquo;%1$s&rdquo;ブロックを編集します。';
$lang_module['block_add'] = 'ブロック追加';
$lang_module['block_edit'] = 'ブロック編集';
$lang_module['block_title'] = 'ブロック名';
$lang_module['block_link'] = 'ブロックのURL';
$lang_module['block_file_path'] = 'ファイルの内容を取得する';
$lang_module['block_global_apply'] = 'すべてに適用';
$lang_module['block_select_type'] = 'フォーマット選択';
$lang_module['block_tpl'] = 'テンプレート';
$lang_module['block_pos'] = '位置';
$lang_module['block_groupbl'] = '所属グループ';
$lang_module['block_leavegroup'] = '元のグループから外して、新しいグループを追加します。';
$lang_module['block_group_notice'] = 'Note: <br /> If you change a block of a group then you will change all other blocks in that group. <br /> If not want to change the other blocks of group but wanted to split the block into a new group, please check out the group split button and create new group.'; // Language English
$lang_module['block_group_block'] = 'グループ';
$lang_module['block_no_more_func'] = 'グループから外しを選択すれば、1つ機能しか選択できません。';
$lang_module['block_no_func'] = '攻めて1つ機能を選択してください。';
$lang_module['block_limit_func'] = 'グループから外しを確認すれば、1つブロックに対して1つ機能しか指定できません。';
$lang_module['block_func'] = '地域';
$lang_module['block_nums'] = 'グループ内のブロック数';
$lang_module['block_count'] = 'ブロック';
$lang_module['block_func_list'] = '機能';
$lang_module['blocks_by_funcs'] = '機能別でブロックの管理';
$lang_module['block_yes'] = 'はい';
$lang_module['block_active'] = '有効にする';
$lang_module['block_group'] = '閲覧できる人';
$lang_module['block_module'] = 'モジュールに表示';
$lang_module['block_all'] = '全てのモジュール';
$lang_module['block_confirm'] = '同意';
$lang_module['block_default'] = 'デフォルト';
$lang_module['block_exp_time'] = '締切時間';
$lang_module['block_sort'] = '並び替え';
$lang_module['block_change_pos_warning'] = 'もしこのブロックの位置を変更すれば、すべてブロックの位置も変更されます。';
$lang_module['block_change_pos_warning2'] = '位置を変えますか？';
$lang_module['block_error_nogroup'] = '攻めて1つグループを選択してください。';
$lang_module['block_error_noblock'] = '攻めて1つブロックを選択してください。';
$lang_module['block_delete_confirm'] = '選択したブロックを削除しますか？削除した時、元に戻せません。';
$lang_module['block_delete_per_confirm'] = 'このブロックを削除しますか？';
$lang_module['block_add_success'] = '追加完了！';
$lang_module['block_update_success'] = '更新完了！';
$lang_module['block_checkall'] = '全て選択';
$lang_module['block_uncheckall'] = '全て選択を外す';
$lang_module['block_delete_success'] = '削除完了';
$lang_module['block_error_nomodule'] = '攻めて1つモジュールを選択してください。';
$lang_module['error_empty_content'] = 'ブロックは、ファイルへの連携がありません。ブロック内容が空です。';
$lang_module['block_type'] = 'ブロックのタイプ';
$lang_module['block_file'] = 'ファイル';
$lang_module['block_html'] = 'HTML';
$lang_module['block_typehtml'] = 'HTMLのタイプ';
$lang_module['functions'] = '機能';
$lang_module['edit_block'] = 'ブロック編集';
$lang_module['block_function'] = '機能選択';
$lang_module['add_block_module'] = 'モジュールに適用';
$lang_module['add_block_all_module'] = '全てモジュール';
$lang_module['add_block_select_module'] = 'モジュール選択';
$lang_module['block_layout'] = 'レイアウト選択';
$lang_module['block_select'] = 'ブロック選択';
$lang_module['block_check'] = 'チェック';
$lang_module['block_select_module'] = 'モジュール選択';
$lang_module['block_select_function'] = '機能選択';
$lang_module['block_error_fileconfig_title'] = 'インタフェース設定ファイルのエラー';
$lang_module['block_error_fileconfig_content'] = 'インタフェース設定ファイルが間違っているか、あるいは、存在していません。テンプレートのフォルダを確認してください。';
$lang_module['autoinstall_continue'] = '次へ';
$lang_module['autoinstall_error_nomethod'] = 'インストールのタイプを選択してください。';
$lang_module['autoinstall_package_select'] = 'テーマを選択';
$lang_module['autoinstall_package_noselect'] = '1つテーマを選択してください。';
$lang_module['autoinstall_package_module_select'] = 'モジュールを選択';
$lang_module['autoinstall_package_noselect_module'] = '1つモジュールを選択してください。';
$lang_module['autoinstall_method_theme_none'] = 'テーマを選択';
$lang_module['setup_layout'] = 'レイアウト設定';
$lang_module['setup_module'] = 'モジュール';
$lang_module['setup_select_layout'] = 'レイアウト選択';
$lang_module['setup_updated_layout'] = 'レイアウト設定完了！';
$lang_module['setup_error_layout'] = 'レイアウト設定ができません。';
$lang_module['setup_save_layout'] = '全て保存';
$lang_module['theme_manager'] = 'インタフェース管理';
$lang_module['theme_recent'] = '既存のテーマ一覧';
$lang_module['theme_created_by'] = 'によるデザイン';
$lang_module['theme_created_website'] = '作者のウエブサイトへ訪問';
$lang_module['theme_created_folder'] = 'にファイル＋ディレクトリ：';
$lang_module['theme_created_position'] = 'テーマ内の設計された位置：';
$lang_module['theme_created_activate'] = '有効にする';
$lang_module['theme_created_activate_layout'] = 'エラー：有効にする前に、このインタフェースにレイアウトをセットしてください。';
$lang_module['theme_created_current_use'] = '使用中のインタフェース';
$lang_module['block_front_delete_error'] = 'エラー：ブロックを削除できません！権限を確認してください。';
$lang_module['block_front_outgroup_success'] = 'グループからブロックを外して、新たにグループを構成しました。';
$lang_module['block_front_outgroup_cancel'] = '現在、グループ内に1ブロックしかないため、外す必要はありません。';
$lang_module['block_front_outgroup_error_update'] = 'データ更新中にエラーが発生しました。';
$lang_module['xcopyblock'] = 'ブロックのコピー';
$lang_module['xcopyblock_to'] = '～テーマへ';
$lang_module['xcopyblock_from'] = '～テーマから';
$lang_module['xcopyblock_position'] = '位置選択';
$lang_module['xcopyblock_process'] = 'コピー';
$lang_module['xcopyblock_no_position'] = '攻めてコピーするために1つ位置を選択してください。';
$lang_module['xcopyblock_notice'] = '目的テンプレートへすべて既存ブロックを外しますので、少々お待ちください。';
$lang_module['xcopyblock_success'] = 'すべての作業が完了しました！';
$lang_module['block_weight'] = 'ブロックの位置を設定';
$lang_module['block_weight_confirm'] = 'ブロックの位置を設定しますか？機能の設定が使われます。';
$lang_module['autoinstall_theme_error_warning_overwrite'] = '警告：指定したテンプレートにはファイルが存在しているが、そのファイルの再書き込みをしますか？';
$lang_module['autoinstall_theme_overwrite'] = '書き込み';
$lang_module['block_error_nsblock'] = 'まだ選択しないブロックまたは無効なブロックのタイトル';
$lang_module['block_type_theme'] = 'Block theme'; // Language English
$lang_module['package_theme_module'] = 'Pack by module'; // Language English
$lang_module['back'] = 'Back'; // Language English
$lang_module['autoinstall_method_module_none'] = 'Select module'; // Language English
$lang_module['package_noselect_module_theme'] = 'It is mandatory to choose the theme and the module to pack'; // Language English
$lang_module['theme_created_setting'] = 'Set theme follow default configuration'; // Language English
$lang_module['theme_delete'] = 'Delete Settings'; // Language English
$lang_module['theme_delete_confirm'] = 'Are you sure you delete the setting: '; // Language English
$lang_module['theme_delete_success'] = 'Theme delete success'; // Language English
$lang_module['theme_delete_unsuccess'] = 'There are errors in the process the setting !'; // Language English
$lang_module['config'] = 'Set Theme'; // Language English
$lang_module['config_not_exit'] = 'Theme %s not configured'; // Language English
$lang_module['show_device'] = 'Show in device'; // Language English
$lang_module['show_device_1'] = 'Show all device'; // Language English
$lang_module['show_device_2'] = 'Show in mobile'; // Language English
$lang_module['show_device_3'] = 'Show in tablet'; // Language English
$lang_module['show_device_4'] = 'Show other device'; // Language English
$lang_module['preview_theme_on'] = 'Enable preview'; // Language English
$lang_module['preview_theme_off'] = 'Disable preview'; // Language English
$lang_module['preview_theme_link'] = 'Preview link'; // Language English
$lang_module['preview_theme_link_copied'] = 'The link has been copied to the clipboard'; // Language English
$lang_module['settings'] = 'Config'; // Language English
$lang_module['settings_utheme'] = 'Config user theme'; // Language English
$lang_module['settings_utheme_help'] = 'Users can switch between themes below'; // Language English
$lang_module['settings_utheme_note'] = 'You need to set up theme before it can appear below'; // Language English
$lang_module['settings_utheme_lnote'] = 'This configuration applies to language <strong>%s</strong>'; // Language English
$lang_module['settings_utheme_choose'] = 'Choose theme'; // Language English
