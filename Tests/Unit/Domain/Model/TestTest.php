<?php
namespace MyVendor\TestForm\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class TestTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \MyVendor\TestForm\Domain\Model\Test
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \MyVendor\TestForm\Domain\Model\Test();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTestReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTest()
        );
    }

    /**
     * @test
     */
    public function setTestForStringSetsTest()
    {
        $this->subject->setTest('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'test',
            $this->subject
        );
    }
}
