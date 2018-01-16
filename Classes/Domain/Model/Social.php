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
 * Social
 */
class Social extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Tittre
     *
     * @var string
     * @validate NotEmpty
     */
    protected $title = '';

    /**
     * Identifiant
     *
     * @var string
     * @validate NotEmpty
     */
    protected $accountName = '';

    /**
     * Returns the title
     *
     * @return string title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the accountName
     *
     * @return string accountName
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * Sets the accountName
     *
     * @param string $accountName
     * @return void
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;
    }
}
