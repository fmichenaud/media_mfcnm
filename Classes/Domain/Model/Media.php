<?php
namespace MFCNM\MediaMfcnm\Domain\Model;

/***
 *
 * This file is part of the "media_[mfcnm]" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018
 *
 ***/

/**
 * Media
 */
class Media extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Nom
     *
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';

    /**
     * Description
     *
     * @var string
     */
    protected $description = '';

    /**
     * Image
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $image = null;

    /**
     * published
     *
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $published = null;

    /**
     * avis
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\MFCNM\MediaMfcnm\Domain\Model\Review>
     * @cascade remove
     * @lazy
     */
    protected $reviews = null;

    /**
     * Auteur
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\MFCNM\MediaMfcnm\Domain\Model\Author>
     */
    protected $authors = null;

    /**
     * Catégories
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\MFCNM\MediaMfcnm\Domain\Model\Category>
     * @cascade remove
     */
    protected $categories = null;

    /**
     * Fichiers
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @cascade remove
     */
    protected $files = null;

    /**
     * Type
     *
     * @var \MFCNM\MediaMfcnm\Domain\Model\Type
     */
    protected $type = null;

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the image
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets the image
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image = $image;
    }

    /**
     * Returns the name
     *
     * @return string name
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

    /**
     * Returns the published
     *
     * @return \DateTime published
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Sets the published
     *
     * @param \DateTime $published
     * @return void
     */
    public function setPublished(\DateTime $published)
    {
        $this->published = $published;
    }

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->files = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->reviews = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->authors = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->categories = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Review
     *
     * @param \MFCNM\MediaMfcnm\Domain\Model\Review $review
     * @return void
     */
    public function addReview(\MFCNM\MediaMfcnm\Domain\Model\Review $review)
    {
        $this->reviews->attach($review);
    }

    /**
     * Removes a Review
     *
     * @param \MFCNM\MediaMfcnm\Domain\Model\Review $reviewToRemove The Review to be removed
     * @return void
     */
    public function removeReview(\MFCNM\MediaMfcnm\Domain\Model\Review $reviewToRemove)
    {
        $this->reviews->detach($reviewToRemove);
    }

    /**
     * Returns the reviews
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\MFCNM\MediaMfcnm\Domain\Model\Review> $reviews
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * Sets the reviews
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\MFCNM\MediaMfcnm\Domain\Model\Review> $reviews
     * @return void
     */
    public function setReviews(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $reviews)
    {
        $this->reviews = $reviews;
    }

    /**
     * Adds a Author
     *
     * @param \MFCNM\MediaMfcnm\Domain\Model\Author $author
     * @return void
     */
    public function addAuthor(\MFCNM\MediaMfcnm\Domain\Model\Author $author)
    {
        $this->authors->attach($author);
    }

    /**
     * Removes a Author
     *
     * @param \MFCNM\MediaMfcnm\Domain\Model\Author $authorToRemove The Author to be removed
     * @return void
     */
    public function removeAuthor(\MFCNM\MediaMfcnm\Domain\Model\Author $authorToRemove)
    {
        $this->authors->detach($authorToRemove);
    }

    /**
     * Returns the authors
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\MFCNM\MediaMfcnm\Domain\Model\Author> $authors
     */
    public function getAuthors()
    {
        return $this->authors;
    }

    /**
     * Sets the authors
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\MFCNM\MediaMfcnm\Domain\Model\Author> $authors
     * @return void
     */
    public function setAuthors(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $authors)
    {
        $this->authors = $authors;
    }

    /**
     * Adds a Category
     *
     * @param \MFCNM\MediaMfcnm\Domain\Model\Category $category
     * @return void
     */
    public function addCategory(\MFCNM\MediaMfcnm\Domain\Model\Category $category)
    {
        $this->categories->attach($category);
    }

    /**
     * Removes a Category
     *
     * @param \MFCNM\MediaMfcnm\Domain\Model\Category $categoryToRemove The Category to be removed
     * @return void
     */
    public function removeCategory(\MFCNM\MediaMfcnm\Domain\Model\Category $categoryToRemove)
    {
        $this->categories->detach($categoryToRemove);
    }

    /**
     * Returns the categories
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\MFCNM\MediaMfcnm\Domain\Model\Category> $categories
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Sets the categories
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\MFCNM\MediaMfcnm\Domain\Model\Category> $categories
     * @return void
     */
    public function setCategories(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $categories)
    {
        $this->categories = $categories;
    }

    /**
     * Adds a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $file
     * @return void
     */
    public function addFile(\TYPO3\CMS\Extbase\Domain\Model\FileReference $file)
    {
        $this->files->attach($file);
    }

    /**
     * Removes a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $fileToRemove The FileReference to be removed
     * @return void
     */
    public function removeFile(\TYPO3\CMS\Extbase\Domain\Model\FileReference $fileToRemove)
    {
        $this->files->detach($fileToRemove);
    }

    /**
     * Returns the files
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $files
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * Sets the files
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $files
     * @return void
     */
    public function setFiles(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $files)
    {
        $this->files = $files;
    }

    /**
     * Returns the type
     *
     * @return \MFCNM\MediaMfcnm\Domain\Model\Type $type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the type
     *
     * @param \MFCNM\MediaMfcnm\Domain\Model\Type $type
     * @return void
     */
    public function setType(\MFCNM\MediaMfcnm\Domain\Model\Type $type)
    {
        $this->type = $type;
    }
}
