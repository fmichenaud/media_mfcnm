<?php
namespace MFCNM\MediaMfcnm\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Mathieu Dumez 
 * @author Florent Michenaud 
 * @author Cedric Frecheville 
 * @author Nicolas Gras 
 * @author Morgane Julien 
 */
class CollectionTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \MFCNM\MediaMfcnm\Domain\Model\Collection
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \MFCNM\MediaMfcnm\Domain\Model\Collection();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNomReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getNom()
        );
    }

    /**
     * @test
     */
    public function setNomForStringSetsNom()
    {
        $this->subject->setNom('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'nom',
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
    public function getImageReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getImage()
        );
    }

    /**
     * @test
     */
    public function setImageForFileReferenceSetsImage()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setImage($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'image',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPublishedReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getPublished()
        );
    }

    /**
     * @test
     */
    public function setPublishedForDateTimeSetsPublished()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setPublished($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'published',
            $this->subject
        );
    }
}
