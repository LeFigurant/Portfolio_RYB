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
 * Profil
 */
class Profile extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Prenom
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';

    /**
     * Nom
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $lastname = '';

    /**
     * Date de naissance
     * 
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $birthDay = null;

    /**
     * Moyen de transport
     * 
     * @var bool
     */
    protected $drivingLicence = false;

    /**
     * Numéro de téléphone
     * 
     * @var string
     */
    protected $phone = '';

    /**
     * Adresse de courriel élécronique sur un ordinateur personnel
     * 
     * @var string
     */
    protected $mail = '';

    /**
     * adresse
     * 
     * @var string
     */
    protected $address = '';

    /**
     * Image
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $photo = null;

    /**
     * projets
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BYR\PortfolioByr\Domain\Model\Projet>
     * @cascade remove
     * @lazy
     */
    protected $projects = null;

    /**
     * jobs
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BYR\PortfolioByr\Domain\Model\Job>
     * @cascade remove
     * @lazy
     */
    protected $jobs = null;

    /**
     * réseaux sociaux
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BYR\PortfolioByr\Domain\Model\Social>
     * @cascade remove
     * @lazy
     */
    protected $socials = null;

    /**
     * Formation
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BYR\PortfolioByr\Domain\Model\Training>
     * @cascade remove
     * @lazy
     */
    protected $training = null;

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
        $this->projects = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->jobs = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->socials = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->training = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
     * Returns the lastname
     * 
     * @return string lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Sets the lastname
     * 
     * @param string $lastname
     * @return void
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * Returns the birthDay
     * 
     * @return \DateTime birthDay
     */
    public function getBirthDay()
    {
        return $this->birthDay;
    }

    /**
     * Sets the birthDay
     * 
     * @param \DateTime $birthDay
     * @return void
     */
    public function setBirthDay(\DateTime $birthDay)
    {
        $this->birthDay = $birthDay;
    }

    /**
     * Returns the drivingLicence
     * 
     * @return bool drivingLicence
     */
    public function getDrivingLicence()
    {
        return $this->drivingLicence;
    }

    /**
     * Sets the drivingLicence
     * 
     * @param bool $drivingLicence
     * @return void
     */
    public function setDrivingLicence($drivingLicence)
    {
        $this->drivingLicence = $drivingLicence;
    }

    /**
     * Returns the boolean state of drivingLicence
     * 
     * @return bool drivingLicence
     */
    public function isDrivingLicence()
    {
        return $this->drivingLicence;
    }

    /**
     * Returns the phone
     * 
     * @return string phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets the phone
     * 
     * @param string $phone
     * @return void
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * Returns the mail
     * 
     * @return string mail
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Sets the mail
     * 
     * @param string $mail
     * @return void
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * Returns the address
     * 
     * @return string address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets the address
     * 
     * @param string $address
     * @return void
     */
    public function setAddress($address)
    {
        $this->address = $address;
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
     * Adds a Projet
     * 
     * @param \BYR\PortfolioByr\Domain\Model\Projet $project
     * @return void
     */
    public function addProject(\BYR\PortfolioByr\Domain\Model\Projet $project)
    {
        $this->projects->attach($project);
    }

    /**
     * Removes a Projet
     * 
     * @param \BYR\PortfolioByr\Domain\Model\Projet $projectToRemove The Projet to be removed
     * @return void
     */
    public function removeProject(\BYR\PortfolioByr\Domain\Model\Projet $projectToRemove)
    {
        $this->projects->detach($projectToRemove);
    }

    /**
     * Returns the projects
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BYR\PortfolioByr\Domain\Model\Projet> projects
     */
    public function getProjects()
    {
        return $this->projects;
    }

    /**
     * Sets the projects
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BYR\PortfolioByr\Domain\Model\Projet> $projects
     * @return void
     */
    public function setProjects(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $projects)
    {
        $this->projects = $projects;
    }

    /**
     * Adds a Job
     * 
     * @param \BYR\PortfolioByr\Domain\Model\Job $job
     * @return void
     */
    public function addJob(\BYR\PortfolioByr\Domain\Model\Job $job)
    {
        $this->jobs->attach($job);
    }

    /**
     * Removes a Job
     * 
     * @param \BYR\PortfolioByr\Domain\Model\Job $jobToRemove The Job to be removed
     * @return void
     */
    public function removeJob(\BYR\PortfolioByr\Domain\Model\Job $jobToRemove)
    {
        $this->jobs->detach($jobToRemove);
    }

    /**
     * Returns the jobs
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BYR\PortfolioByr\Domain\Model\Job> jobs
     */
    public function getJobs()
    {
        return $this->jobs;
    }

    /**
     * Sets the jobs
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BYR\PortfolioByr\Domain\Model\Job> $jobs
     * @return void
     */
    public function setJobs(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $jobs)
    {
        $this->jobs = $jobs;
    }

    /**
     * Adds a Social
     * 
     * @param \BYR\PortfolioByr\Domain\Model\Social $social
     * @return void
     */
    public function addSocial(\BYR\PortfolioByr\Domain\Model\Social $social)
    {
        $this->socials->attach($social);
    }

    /**
     * Removes a Social
     * 
     * @param \BYR\PortfolioByr\Domain\Model\Social $socialToRemove The Social to be removed
     * @return void
     */
    public function removeSocial(\BYR\PortfolioByr\Domain\Model\Social $socialToRemove)
    {
        $this->socials->detach($socialToRemove);
    }

    /**
     * Returns the socials
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BYR\PortfolioByr\Domain\Model\Social> socials
     */
    public function getSocials()
    {
        return $this->socials;
    }

    /**
     * Sets the socials
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BYR\PortfolioByr\Domain\Model\Social> $socials
     * @return void
     */
    public function setSocials(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $socials)
    {
        $this->socials = $socials;
    }

    /**
     * Adds a Training
     * 
     * @param \BYR\PortfolioByr\Domain\Model\Training $training
     * @return void
     */
    public function addTraining(\BYR\PortfolioByr\Domain\Model\Training $training)
    {
        $this->training->attach($training);
    }

    /**
     * Removes a Training
     * 
     * @param \BYR\PortfolioByr\Domain\Model\Training $trainingToRemove The Training to be removed
     * @return void
     */
    public function removeTraining(\BYR\PortfolioByr\Domain\Model\Training $trainingToRemove)
    {
        $this->training->detach($trainingToRemove);
    }

    /**
     * Returns the training
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BYR\PortfolioByr\Domain\Model\Training> training
     */
    public function getTraining()
    {
        return $this->training;
    }

    /**
     * Sets the training
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BYR\PortfolioByr\Domain\Model\Training> $training
     * @return void
     */
    public function setTraining(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $training)
    {
        $this->training = $training;
    }
}
