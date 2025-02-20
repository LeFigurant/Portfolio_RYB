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
class TrainingControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \BYR\PortfolioByr\Controller\TrainingController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\BYR\PortfolioByr\Controller\TrainingController::class)
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
    public function listActionFetchesAllTrainingsFromRepositoryAndAssignsThemToView()
    {

        $allTrainings = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $trainingRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $trainingRepository->expects(self::once())->method('findAll')->will(self::returnValue($allTrainings));
        $this->inject($this->subject, 'trainingRepository', $trainingRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('trainings', $allTrainings);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenTrainingToView()
    {
        $training = new \BYR\PortfolioByr\Domain\Model\Training();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('training', $training);

        $this->subject->showAction($training);
    }
}
