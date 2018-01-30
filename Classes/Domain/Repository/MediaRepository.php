<?php
namespace MFCNM\MediaMfcnm\Domain\Repository;

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
 * The repository for Medias
 */
class MediaRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    public function findByAuthor($author){
        $query = $this->createQuery();
        $query->matching($query->contains('authors', $author));
        return $query->execute();
    }
}
