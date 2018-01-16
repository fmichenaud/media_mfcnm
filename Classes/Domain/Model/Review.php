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
 * Review
 */
class Review extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Note
     *
     * @var int
     * @validate NotEmpty
     */
    protected $mark = 0;

    /**
     * Auteur
     *
     * @var string
     * @validate NotEmpty
     */
    protected $author = '';

    /**
     * commentaire
     *
     * @var string
     * @validate NotEmpty
     */
    protected $comment = '';

    /**
     * Date
     *
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $date = null;

    /**
     * Returns the date
     *
     * @return \DateTime $date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets the date
     *
     * @param \DateTime $date
     * @return void
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
    }

    /**
     * Returns the mark
     *
     * @return int mark
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     * Sets the mark
     *
     * @param int $mark
     * @return void
     */
    public function setMark($mark)
    {
        $this->mark = $mark;
    }

    /**
     * Returns the author
     *
     * @return string author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets the author
     *
     * @param string $author
     * @return void
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * Returns the comment
     *
     * @return string comment
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets the comment
     *
     * @param string $comment
     * @return void
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }
}
