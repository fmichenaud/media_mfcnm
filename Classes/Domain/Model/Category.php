<?php
namespace MFCNM\MediaMfcnm\Domain\Model;

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
 * Catégorie
 */
class Category extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Nom
     *
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';

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
}
