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
 * Réseau social
 */
class Social extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * nome
     * 
     * @var int
     * @validate NotEmpty
     */
    protected $name = 0;

    /**
     * identifiant
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $identity = '';

    /**
     * Returns the name
     * 
     * @return int name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     * 
     * @param int $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the identity
     * 
     * @return string identity
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * Sets the identity
     * 
     * @param string $identity
     * @return void
     */
    public function setIdentity($identity)
    {
        $this->identity = $identity;
    }
}
