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
 * TrainingController
 */
class TrainingController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
     /**
     * trainingRepository
     * 
     * @var \BYR\PortfolioByr\Domain\Repository\TrainingRepository
     * @inject
     */
    protected $trainingRepository = null;
    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $trainings = $this->trainingRepository->findAll();
        $this->view->assign('trainings', $trainings);
    }

    /**
     * action show
     * 
     * @param \BYR\PortfolioByr\Domain\Model\Training $training
     * @return void
     */
    public function showAction(\BYR\PortfolioByr\Domain\Model\Training $training)
    {
        $this->view->assign('training', $training);
    }

    /**
     * action search
     * 
     * @return void
     */
    public function searchAction()
    {

    }
}
