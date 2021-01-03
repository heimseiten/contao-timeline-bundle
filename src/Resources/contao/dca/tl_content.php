<?php

/*
 * This file is part of Timeline.
 * 
 * (c) Niels Hegmans 2021 <info@heimseiten.de>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/heimseiten/contao-timeline-bundle
 */

/**
 * Content elements
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['timeline_element'] = '{type_legend},type;{timeline_legend_content},timeline_year,text;{timeline_legend_settings},timeline_year_color_bg,timeline_year_color_text,timeline_lines_color_bg;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';

$GLOBALS['TL_DCA']['tl_content']['fields']['timeline_year'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['timeline_year'],
    'inputType' => 'text',
    'eval'      => ['mandatory' => true, 'tl_class' => 'clr'],
    'sql'       => "char(255) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_content']['fields']['timeline_year_color_text'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['timeline_year_color_text'],
    'inputType' => 'text',
    'eval'      => array('maxlength'=>6, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
    'sql'       => "char(7) NOT NULL default ''"
];
$GLOBALS['TL_DCA']['tl_content']['fields']['timeline_year_color_bg'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['timeline_year_color_bg'],
    'inputType' => 'text',
    'eval'      => array('maxlength'=>6, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
    'sql'       => "char(7) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_content']['fields']['timeline_lines_color_bg'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['timeline_lines_color_bg'],
    'inputType' => 'text',
    'eval'      => array('maxlength'=>6, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
    'sql'       => "char(7) NOT NULL default ''"
];