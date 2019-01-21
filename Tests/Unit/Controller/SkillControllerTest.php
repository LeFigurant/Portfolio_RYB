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
class SkillControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \BYR\PortfolioByr\Controller\SkillController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\BYR\PortfolioByr\Controller\SkillController::class)
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
    public function showActionAssignsTheGivenSkillToView()
    {
        $skill = new \BYR\PortfolioByr\Domain\Model\Skill();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('skill', $skill);

        $this->subject->showAction($skill);
    }
}
