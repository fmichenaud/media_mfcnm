<?php
namespace MFCNM\MediaMfcnm\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Mathieu Dumez 
 * @author Florent Michenaud <florent.michenaud@gmail.com>
 * @author Cedric Frecheville 
 * @author Nicolas Gras 
 * @author Morgane Julien 
 */
class AuthorControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \MFCNM\MediaMfcnm\Controller\AuthorController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\MFCNM\MediaMfcnm\Controller\AuthorController::class)
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
    public function listActionFetchesAllAuthorsFromRepositoryAndAssignsThemToView()
    {

        $allAuthors = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $authorRepository = $this->getMockBuilder(\MFCNM\MediaMfcnm\Domain\Repository\AuthorRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $authorRepository->expects(self::once())->method('findAll')->will(self::returnValue($allAuthors));
        $this->inject($this->subject, 'authorRepository', $authorRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('authors', $allAuthors);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenAuthorToView()
    {
        $author = new \MFCNM\MediaMfcnm\Domain\Model\Author();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('author', $author);

        $this->subject->showAction($author);
    }
}
