<?php
namespace BYR\PortfolioByr\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Julien VITTE <vitte.julien@gmail.com>
 * @author Benjamin Jusserand <benjamin.jusserand@etu.u-bordeaux.fr>
 * @author Raphael Arrayago <raphael.arrayago@etu.u-bordeaux.fr>
 * @author Yoann Singer <yoann.singer@etu.u-bordeaux.fr>
 */
class TrainingTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \BYR\PortfolioByr\Domain\Model\Training
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \BYR\PortfolioByr\Domain\Model\Training();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getDomainReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getDomain()
        );
    }

    /**
     * @test
     */
    public function setDomainForIntSetsDomain()
    {
        $this->subject->setDomain(12);

        self::assertAttributeEquals(
            12,
            'domain',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDateStartReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDateStart()
        );
    }

    /**
     * @test
     */
    public function setDateStartForDateTimeSetsDateStart()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDateStart($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'dateStart',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDateEndReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDateEnd()
        );
    }

    /**
     * @test
     */
    public function setDateEndForDateTimeSetsDateEnd()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDateEnd($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'dateEnd',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDegreeReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getDegree()
        );
    }

    /**
     * @test
     */
    public function setDegreeForIntSetsDegree()
    {
        $this->subject->setDegree(12);

        self::assertAttributeEquals(
            12,
            'degree',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLicationReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLication()
        );
    }

    /**
     * @test
     */
    public function setLicationForStringSetsLication()
    {
        $this->subject->setLication('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'lication',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSkillsReturnsInitialValueForSkill()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSkills()
        );
    }

    /**
     * @test
     */
    public function setSkillsForObjectStorageContainingSkillSetsSkills()
    {
        $skill = new \BYR\PortfolioByr\Domain\Model\Skill();
        $objectStorageHoldingExactlyOneSkills = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSkills->attach($skill);
        $this->subject->setSkills($objectStorageHoldingExactlyOneSkills);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSkills,
            'skills',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSkillToObjectStorageHoldingSkills()
    {
        $skill = new \BYR\PortfolioByr\Domain\Model\Skill();
        $skillsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $skillsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($skill));
        $this->inject($this->subject, 'skills', $skillsObjectStorageMock);

        $this->subject->addSkill($skill);
    }

    /**
     * @test
     */
    public function removeSkillFromObjectStorageHoldingSkills()
    {
        $skill = new \BYR\PortfolioByr\Domain\Model\Skill();
        $skillsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $skillsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($skill));
        $this->inject($this->subject, 'skills', $skillsObjectStorageMock);

        $this->subject->removeSkill($skill);
    }
}
