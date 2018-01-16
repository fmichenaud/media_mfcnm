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
 *           Florent Michenaud
 *           Cedric Frecheville
 *           Nicolas Gras
 *           Morgane Julien
 *
 ***/

/**
 * MediaController
 */
class MediaController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
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
        $medias = $this->mediaRepository->findAll();
        $this->view->assign('medias', $medias);
    }

    /**
     * action show
     *
     * @param \MFCNM\MediaMfcnm\Domain\Model\Media $media
     * @return void
     */
    public function showAction(\MFCNM\MediaMfcnm\Domain\Model\Media $media)
    {
        $this->view->assign('media', $media);
    }

    /**
     * action recommend
     *
     * @return void
     */
    public function recommendAction()
    {

    }

    /**
     * action search
     *
     * @return void
     */
    public function searchAction()
    {

    }
}
