<?php
namespace MyVendor\TestForm\Controller;


/***
 *
 * This file is part of the "text example" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 latest
 *
 ***/
/**
 * TestController
 */
class TestController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * testRepository
     *
     * @var \MyVendor\TestForm\Domain\Repository\TestRepository
     */
    protected $testRepository = null;

    /**
     * @param \MyVendor\TestForm\Domain\Repository\TestRepository $testRepository
     */
    public function injectTestRepository(\MyVendor\TestForm\Domain\Repository\TestRepository $testRepository)
    {
        $this->testRepository = $testRepository;
    }

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $tests = $this->testRepository->findAll();
        $this->view->assign('tests', $tests);
    }

    /**
     * action show
     *
     * @param \MyVendor\TestForm\Domain\Model\Test $test
     * @return void
     */
    public function showAction(\MyVendor\TestForm\Domain\Model\Test $test)
    {
        $this->view->assign('test', $test);
    }

    /**
     * action latest
     *
     * @return void
     */
    public function latestAction()
    {
        $tests = $this->testRepository->findByUid(1);
        $this->view->assign('tests', $tests);
    }

    public function filterAction()
    {
        die("test");
    }
}
