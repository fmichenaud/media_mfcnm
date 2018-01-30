<?php
namespace MFCNM\MediaMfcnm\Controller;

/***
 *
 * This file is part of the "media_[mfcnm]" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Mathieu Dumez
 *           Florent Michenaud <florent.michenaud@gmail.com>
 *           Cédric Frêcheville 
 *           Nicolas Gras
 *           Morgane Julien
 *
 ***/

/**
 * AuthorController
 */
class AuthorController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * authorRepository
     *
     * @var \MFCNM\MediaMfcnm\Domain\Repository\AuthorRepository
     * @inject
     */
    protected $authorRepository = null;

    /**
     * mediaRepository
     *
     * @var \MFCNM\MediaMfcnm\Domain\Repository\MediaRepository
     * @inject
     */
    protected $mediaRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $authors = $this->authorRepository->findAll();
        $this->view->assign('authors', $authors);
    }

    /**
     * action show
     *
     * @param \MFCNM\MediaMfcnm\Domain\Model\Author $author
     * @return void
     */
    public function showAction(\MFCNM\MediaMfcnm\Domain\Model\Author $author)
    {
        $medias = $this->mediaRepository->findByAuthor($author);

        $this->view->assign('author', $author)->assign('medias', $medias);
    }
}
