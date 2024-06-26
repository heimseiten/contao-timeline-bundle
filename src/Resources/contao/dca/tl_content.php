<?php

use Contao\CoreBundle\DataContainer\PaletteManipulator;
use Contao\DataContainer;

PaletteManipulator::create()
    ->addLegend('timeline_legend_content', 'type_legend', PaletteManipulator::POSITION_AFTER)
    
    ->addField('timeline_year', 'timeline_legend_content', PaletteManipulator::POSITION_APPEND)
    ->addField('headline', 'timeline_legend_content', PaletteManipulator::POSITION_APPEND)
    ->addField('text', 'timeline_legend_content', PaletteManipulator::POSITION_APPEND)
    ->addField('multiSRC', 'timeline_legend_content', PaletteManipulator::POSITION_APPEND)
    ->addField('size', 'timeline_legend_content', PaletteManipulator::POSITION_APPEND)

    ->addLegend('protected_legend', 'timeline_legend_content', PaletteManipulator::POSITION_APPEND)
    ->addField('protected', 'protected_legend', PaletteManipulator::POSITION_APPEND)
    
    ->addLegend('expert_legend', 'protected_legend', PaletteManipulator::POSITION_APPEND)
    ->addField('cssID', 'expert_legend', PaletteManipulator::POSITION_APPEND)
    
    ->addLegend('invisible_legend', 'expert_legend', PaletteManipulator::POSITION_APPEND)
    ->addField('invisible', 'invisible_legend', PaletteManipulator::POSITION_APPEND)

    
    ->applyToPalette('default', 'tl_content')
;

$GLOBALS['TL_DCA']['tl_content']['fields']['timeline_year'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['timeline_year'],
    'inputType' => 'text',
    'eval'      => ['mandatory' => true, 'tl_class' => 'w50'],
    'sql'       => "char(255) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_content']['fields']['text']['eval']['tl_class'] = 'clr';
$GLOBALS['TL_DCA']['tl_content']['fields']['multiSRC']['eval']['isGallery'] = true;
