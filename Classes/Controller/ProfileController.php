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
 * ProfileController
 */
class ProfileController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * profileRepository
     * 
     * @var \BYR\PortfolioByr\Domain\Repository\ProfileRepository
     * @inject
     */
    protected $profileRepository = null;

    /**
     * action list
     * 
     * @param BYR\PortfolioByr\Domain\Model\Profile
     * @return void
     */
    public function listAction()
    {
        $profiles = $this->profileRepository->findAll();
        $this->view->assign('profiles', $profiles);
    }

    /**
     * action show
     * 
     * @param BYR\PortfolioByr\Domain\Model\Profile
     * @return void
     */
    public function showAction(\BYR\PortfolioByr\Domain\Model\Profile $profile)
    {
        $this->view->assign('profile', $profile);
    }
}
