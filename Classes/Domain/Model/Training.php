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
 * Formation
 */
class Training extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * domaine
     * 
     * @var int
     * @validate NotEmpty
     */
    protected $domain = 0;

    /**
     * Date de début
     * 
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $dateStart = null;

    /**
     * Date de fin
     * 
     * @var \DateTime
     */
    protected $dateEnd = null;

    /**
     * Diplome
     * 
     * @var int
     */
    protected $degree = 0;

    /**
     * Lieu
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $lication = '';

    /**
     * Intitulé
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $title = '';

    /**
     * Description
     * 
     * @var string
     */
    protected $description = '';

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
     * Returns the domain
     * 
     * @return int domain
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Sets the domain
     * 
     * @param int $domain
     * @return void
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
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
     * Returns the degree
     * 
     * @return int degree
     */
    public function getDegree()
    {
        return $this->degree;
    }

    /**
     * Sets the degree
     * 
     * @param int $degree
     * @return void
     */
    public function setDegree($degree)
    {
        $this->degree = $degree;
    }

    /**
     * Returns the lication
     * 
     * @return string lication
     */
    public function getLication()
    {
        return $this->lication;
    }

    /**
     * Sets the lication
     * 
     * @param string $lication
     * @return void
     */
    public function setLication($lication)
    {
        $this->lication = $lication;
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
