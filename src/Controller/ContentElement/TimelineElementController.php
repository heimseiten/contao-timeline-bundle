<?php

declare(strict_types=1);

/*
 * This file is part of Timeline.
 * 
 * (c) Niels Hegmans 2021 <info@heimseiten.de>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/heimseiten/contao-timeline-bundle
 */

namespace Heimseiten\ContaoTimelineBundle\Controller\ContentElement;

use Contao\ContentModel;
use Contao\CoreBundle\Controller\ContentElement\AbstractContentElementController;
use Contao\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class TimelineElementController
 */
class TimelineElementController extends AbstractContentElementController
{
    /**
     * Generate the content element
     */
    protected function getResponse(Template $template, ContentModel $model, Request $request): Response
    {
        $template->text = $model->text;
        
        //$template->text = deserialize($model->cssID)[1];
        //$template->timeline_year = $GLOBALS['TL_LANG']['tl_content']['timeline_year'][0] . ': ' . $model->timeline_year;
        //$template->text = $GLOBALS['TL_LANG']['tl_content']['text'][0] . ': ' . $model->text;

        return $template->getResponse();
    }
}
