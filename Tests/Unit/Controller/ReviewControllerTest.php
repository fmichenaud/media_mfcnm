<?php
namespace MFCNM\MediaMfcnm\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Mathieu Dumez 
 * @author Florent Michenaud 
 * @author Cedric Frecheville 
 * @author Nicolas Gras 
 * @author Morgane Julien 
 */
class ReviewControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \MFCNM\MediaMfcnm\Controller\ReviewController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\MFCNM\MediaMfcnm\Controller\ReviewController::class)
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
    public function createActionAddsTheGivenReviewToReviewRepository()
    {
        $review = new \MFCNM\MediaMfcnm\Domain\Model\Review();

        $reviewRepository = $this->getMockBuilder(\::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $reviewRepository->expects(self::once())->method('add')->with($review);
        $this->inject($this->subject, 'reviewRepository', $reviewRepository);

        $this->subject->createAction($review);
    }
}
