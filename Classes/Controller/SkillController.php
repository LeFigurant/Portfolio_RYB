<?php
namespace BYR\PortfolioByr\Controller;

/***
 *
 * This file is part of the "PortfolioCasa" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Julien VITTE <vitte.julien@gmail.com>
 *           Louis Réjou <lrejou@u-bordeaux.fr>
 *           Arthur Cargnelli <arthur.cargnelli@etu.u-bordeaux.fr>
 *           Arthur Derichard <aderichard@u-bordeaux.fr>
 *           Sophie Candau <scandau@u-bordeaux.fr>
 *
 ***/

/**
 * SkillController
 */
class SkillController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * action show
     * 
     * @param \BYR\PortfolioByr\Domain\Model\Skill $skill
     * @return void
     */
    public function showAction(\BYR\PortfolioByr\Domain\Model\Skill $skill)
    {
        $this->view->assign('skill', $skill);
    }
}
