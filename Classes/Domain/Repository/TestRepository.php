<?php
namespace MyVendor\TestForm\Domain\Repository;


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
 * The repository for Tests
 */
class TestRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    /**
     * @var array
     */
    protected $defaultOrderings = ['sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING];
}
