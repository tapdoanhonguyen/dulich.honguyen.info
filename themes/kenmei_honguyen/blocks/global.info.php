<?php

/**
 * NukeViet Content Management System
 * @version 4.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @info (C) 2009-2021 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

if (!defined('NV_MAINFILE')) {
    exit('Stop!!!');
}

if (!nv_function_exists('nv__info')) {
    /**
     * nv_info_info_config()
     *
     * @return string
     */
    function nv_info_config()
    {
        global $lang_global, $data_block;

        $html = '<div class="form-group">';
        $html .= '<label class="control-label col-sm-6">' . $lang_global['info_by'] . ':</label>';
        $html .= '<div class="col-sm-18"><input class="form-control" type="text" name="info_by" value="' . nv_htmlspecialchars($data_block['info_by']) . '"></div>';
        $html .= '</div>';
        $html .= '<div class="form-group">';
        $html .= '<label class="control-label col-sm-6">' . $lang_global['info_url'] . ':</label>';
        $html .= '<div class="col-sm-18"><input class="form-control" type="text" name="info_url" value="' . nv_htmlspecialchars($data_block['info_url']) . '"></div>';
        $html .= '</div>';
        $html .= '<div class="form-group">';
        $html .= '<label class="control-label col-sm-6">' . $lang_global['design_by'] . ':</label>';
        $html .= '<div class="col-sm-18"><input class="form-control" type="text" name="design_by" value="' . nv_htmlspecialchars($data_block['design_by']) . '"></div>';
        $html .= '</div>';
        $html .= '<div class="form-group">';
        $html .= '<label class="control-label col-sm-6">' . $lang_global['design_url'] . ':</label>';
        $html .= '<div class="col-sm-18"><input class="form-control" type="text" name="design_url" value="' . nv_htmlspecialchars($data_block['design_url']) . '"></div>';
        $html .= '</div>';
        $html .= '<div class="form-group">';
        $html .= '<label class="control-label col-sm-6">' . $lang_global['siteterms_url'] . ':</label>';
        $html .= '<div class="col-sm-18"><input class="form-control" type="text" name="siteterms_url" value="' . nv_htmlspecialchars($data_block['siteterms_url']) . '"></div>';
        $html .= '</div>';

        return $html;
    }

    /**
     * nv_info_info_submit()
     *
     * @return array
     */
    function nv_info_info_submit()
    {
        global $nv_Request;

        $return = [];
        $return['error'] = [];
        $return['config']['info_by'] = $nv_Request->get_title('info_by', 'post');
        $return['config']['info_url'] = $nv_Request->get_title('info_url', 'post');
        $return['config']['design_by'] = $nv_Request->get_title('design_by', 'post');
        $return['config']['design_url'] = $nv_Request->get_title('design_url', 'post');
        $return['config']['siteterms_url'] = $nv_Request->get_title('siteterms_url', 'post');

        return $return;
    }

    /**
     * nv_info_info()
     *
     * @param array $block_config
     * @return string
     */
    function nv_info_info($block_config)
    {
        global $global_config, $lang_global;

        if (file_exists(NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/blocks/global.info.tpl')) {
            $block_theme = $global_config['module_theme'];
        } elseif (file_exists(NV_ROOTDIR . '/themes/' . $global_config['site_theme'] . '/blocks/global.info.tpl')) {
            $block_theme = $global_config['site_theme'];
        } else {
            $block_theme = 'default';
        }

        $xtpl = new XTemplate('global.info.tpl', NV_ROOTDIR . '/themes/' . $block_theme . '/blocks');
        $xtpl->assign('LANG', $lang_global);

        if (empty($block_config['info_by'])) {
            $block_config['info_by'] = $global_config['site_name'];
        }
        if (empty($block_config['info_url'])) {
            $block_config['info_url'] = 'http://' . $global_config['my_domains'][0];
        }

        $xtpl->assign('DATA', $block_config);
        $xtpl->parse('main.info_by.info_url');
        $xtpl->parse('main.info_by.info_url2');
        $xtpl->parse('main.info_by');

        if (!empty($block_config['design_by'])) {
            if (!empty($block_config['design_url'])) {
                $xtpl->parse('main.design_by.design_url');
                $xtpl->parse('main.design_by.design_url2');
            }
            $xtpl->parse('main.design_by');
        }
        if (!empty($block_config['siteterms_url'])) {
            $xtpl->parse('main.siteterms_url');
        }
        if (defined('NV_IS_SPADMIN')) {
            $xtpl->parse('main.memory_time_usage');
        }
        $xtpl->parse('main');

        return $xtpl->text('main');
    }
}

if (defined('NV_SYSTEM')) {
    $content = nv_info_info($block_config);
}
