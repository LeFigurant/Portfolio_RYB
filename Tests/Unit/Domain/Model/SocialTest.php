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
class SocialTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \BYR\PortfolioByr\Domain\Model\Social
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \BYR\PortfolioByr\Domain\Model\Social();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForIntSetsName()
    {
        $this->subject->setName(12);

        self::assertAttributeEquals(
            12,
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getIdentityReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getIdentity()
        );
    }

    /**
     * @test
     */
    public function setIdentityForStringSetsIdentity()
    {
        $this->subject->setIdentity('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'identity',
            $this->subject
        );
    }
}
