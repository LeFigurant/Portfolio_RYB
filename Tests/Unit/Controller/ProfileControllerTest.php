<?php
namespace BYR\PortfolioByr\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Julien VITTE <vitte.julien@gmail.com>
 * @author Benjamin Jusserand <benjamin.jusserand@etu.u-bordeaux.fr>
 * @author Raphael Arrayago <raphael.arrayago@etu.u-bordeaux.fr>
 * @author Yoann Singer <yoann.singer@etu.u-bordeaux.fr>
 */
class ProfileControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \BYR\PortfolioByr\Controller\ProfileController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\BYR\PortfolioByr\Controller\ProfileController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllProfilesFromRepositoryAndAssignsThemToView()
    {

        $allProfiles = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $profileRepository = $this->getMockBuilder(\BYR\PortfolioByr\Domain\Repository\ProfileRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $profileRepository->expects(self::once())->method('findAll')->will(self::returnValue($allProfiles));
        $this->inject($this->subject, 'profileRepository', $profileRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('profiles', $allProfiles);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenProfileToView()
    {
        $profile = new \BYR\PortfolioByr\Domain\Model\Profile();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('profile', $profile);

        $this->subject->showAction($profile);
    }
}
