<?php
namespace BYR\PortfolioByr\Domain\Model;

/***
 *
 * This file is part of the "PortfolioCasa" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Julien VITTE <vitte.julien@gmail.com>
 *           Yoann Singer <yoann.singer@etu.u-bordeaux.fr>
 *           Raphael Arrayago <raphael.arrayago@etu.u-bordeaux.fr>
 *           Benjamin Jusserand <benjamin.jusserand@etu.u-bordeaux.fr>
 *
 ***/

/**
 * Projet
 */
class Projet extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * titre
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $title = '';

    /**
     * Description
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $description = '';

    /**
     * Photo
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $photo = null;

    /**
     * Depot
     * 
     * @var string
     */
    protected $url = '';

    /**
     * Date de debut
     * 
     * @var \DateTime
     */
    protected $dateStart = null;

    /**
     * Date de fin
     * 
     * @var \DateTime
     */
    protected $dateEnd = null;

    /**
     * Compétences
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BYR\PortfolioByr\Domain\Model\Skill>
     * @lazy
     */
    protected $skills = null;

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
        $this->skills = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

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
     * Returns the description
     * 
     * @return string description
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
     * Returns the photo
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference photo
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Sets the photo
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $photo
     * @return void
     */
    public function setPhoto(\TYPO3\CMS\Extbase\Domain\Model\FileReference $photo)
    {
        $this->photo = $photo;
    }

    /**
     * Returns the url
     * 
     * @return string url
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets the url
     * 
     * @param string $url
     * @return void
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * Returns the dateStart
     * 
     * @return \DateTime dateStart
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * Sets the dateStart
     * 
     * @param \DateTime $dateStart
     * @return void
     */
    public function setDateStart(\DateTime $dateStart)
    {
        $this->dateStart = $dateStart;
    }

    /**
     * Returns the dateEnd
     * 
     * @return \DateTime dateEnd
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Sets the dateEnd
     * 
     * @param \DateTime $dateEnd
     * @return void
     */
    public function setDateEnd(\DateTime $dateEnd)
    {
        $this->dateEnd = $dateEnd;
    }

    /**
     * Adds a Skill
     * 
     * @param \BYR\PortfolioByr\Domain\Model\Skill $skill
     * @return void
     */
    public function addSkill(\BYR\PortfolioByr\Domain\Model\Skill $skill)
    {
        $this->skills->attach($skill);
    }

    /**
     * Removes a Skill
     * 
     * @param \BYR\PortfolioByr\Domain\Model\Skill $skillToRemove The Skill to be removed
     * @return void
     */
    public function removeSkill(\BYR\PortfolioByr\Domain\Model\Skill $skillToRemove)
    {
        $this->skills->detach($skillToRemove);
    }

    /**
     * Returns the skills
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BYR\PortfolioByr\Domain\Model\Skill> skills
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * Sets the skills
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BYR\PortfolioByr\Domain\Model\Skill> $skills
     * @return void
     */
    public function setSkills(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $skills)
    {
        $this->skills = $skills;
    }
}
