<?php
namespace MyVendor\TestForm\Domain\Model;


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
 * Test
 */
class Test extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $name = '';

    /**
     * test
     *
     * @var string
     */
    protected $test = '';

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the test
     *
     * @return string $test
     */
    public function getTest()
    {
        return $this->test;
    }

    /**
     * Sets the test
     *
     * @param string $test
     * @return void
     */
    public function setTest($test)
    {
        $this->test = $test;
    }
}
