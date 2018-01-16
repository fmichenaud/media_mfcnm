<?php
namespace MFCNM\MediaMfcnm\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Mathieu Dumez 
 * @author Florent Michenaud <florent.michenaud@gmail.com>
 * @author Cedric Frecheville 
 * @author Nicolas Gras 
 * @author Morgane Julien 
 */
class CategoryTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \MFCNM\MediaMfcnm\Domain\Model\Category
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \MFCNM\MediaMfcnm\Domain\Model\Category();
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
}
