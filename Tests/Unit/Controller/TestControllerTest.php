<?php
namespace MyVendor\TestForm\Tests\Unit\Controller;

/**
 * Test case.
 */
class TestControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \MyVendor\TestForm\Controller\TestController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\MyVendor\TestForm\Controller\TestController::class)
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
    public function listActionFetchesAllTestsFromRepositoryAndAssignsThemToView()
    {

        $allTests = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $testRepository = $this->getMockBuilder(\MyVendor\TestForm\Domain\Repository\TestRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $testRepository->expects(self::once())->method('findAll')->will(self::returnValue($allTests));
        $this->inject($this->subject, 'testRepository', $testRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('tests', $allTests);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenTestToView()
    {
        $test = new \MyVendor\TestForm\Domain\Model\Test();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('test', $test);

        $this->subject->showAction($test);
    }
}
