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
 *           Yoann Singer <yoann.singer@etu.u-bordeaux.fr>
 *           Raphael Arrayago <raphael.arrayago@etu.u-bordeaux.fr>
 *           Benjamin Jusserand <benjamin.jusserand@etu.u-bordeaux.fr>
 *
 ***/

/**
 * ProjetController
 */
class ProjetController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * projetRepository
     * 
     * @var \BYR\PortfolioByr\Domain\Repository\ProjetRepository
     * @inject
     */
    protected $projetRepository = null;

    /**
     * action list
     * 
     * @param BYR\PortfolioByr\Domain\Model\Projet
     * @return void
     */
    public function listAction()
    {
        $projets = $this->projetRepository->findAll();
        $this->view->assign('projets', $projets);
    }

    /**
     * action show
     * 
     * @param BYR\PortfolioByr\Domain\Model\Projet
     * @return void
     */
    public function showAction(\BYR\PortfolioByr\Domain\Model\Projet $projet)
    {
        $this->view->assign('projet', $projet);
    }

    /**
     * action highlight
     * 
     * @param BYR\PortfolioByr\Domain\Model\Projet
     * @return void
     */
    public function highlightAction()
    {

    }

    /**
     * action skills
     * 
     * @param BYR\PortfolioByr\Domain\Model\Projet
     * @return void
     */
    public function skillsAction()
    {

    }

    /**
     * action search
     * 
     * @param BYR\PortfolioByr\Domain\Model\Projet
     * @return void
     */
    public function searchAction()
    {

    }
}
