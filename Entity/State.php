<?php

/*
 * This file is part of the TecnocreacionesVzlaEntityBundle package.
 * 
 * (c) www.tecnocreaciones.com.ve
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tecnocreaciones\Vzla\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * State
 *
 * @ORM\Table(name="tecno_vzla_state")
 * @ORM\Entity(repositoryClass="Tecnocreaciones\Vzla\EntityBundle\Repository\StateRepository")
 */
class State
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=50)
     */
    private $description;

    /**
     * Code ISO 3166-2
     * 
     * @see http://es.wikipedia.org/wiki/ISO_3166-2
     * @var string 
     *
     * @ORM\Column(name="code", type="string", length=5,nullable=true)
     */
    private $code;

    /**
     * @var \Tecnocreaciones\Vzla\EntityBundle\Entity\Region
     *
     * @ORM\ManyToOne(targetEntity="Tecnocreaciones\Vzla\EntityBundle\Entity\Region", inversedBy="states")
     */
    private $region;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean",nullable=true)
     */
    private $active = true;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     * @Gedmo\Timestampable(on="create")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetime", nullable=true)
     * @Gedmo\Timestampable(on="update")
     */
    private $updatedAt;

    /**
     * @var \Tecnocreaciones\Vzla\EntityBundle\Entity\Country
     * 
     * @ORM\ManyToOne(targetEntity="Tecnocreaciones\Vzla\EntityBundle\Entity\Country", inversedBy="states")
     */
    private $country;

    /**
     * @var \Tecnocreaciones\Vzla\EntityBundle\Entity\Municipality
     * 
     * @ORM\OneToMany(targetEntity="Tecnocreaciones\Vzla\EntityBundle\Entity\Municipality", mappedBy="state")
     */
    private $municipalities;
    
    /**
     * @var \Tecnocreaciones\Vzla\EntityBundle\Entity\City
     * 
     * @ORM\OneToMany(targetEntity="Tecnocreaciones\Vzla\EntityBundle\Entity\City", mappedBy="state")
     */
    private $cities;

    public function __construct() {
        $this->municipalities = new \Doctrine\Common\Collections\ArrayCollection();
        $this->cities = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return State
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return State
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return State
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return State
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return State
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set region
     *
     * @param \Tecnocreaciones\Vzla\EntityBundle\Entity\Region $region
     * @return State
     */
    public function setRegion(\Tecnocreaciones\Vzla\EntityBundle\Entity\Region $region = null)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return \Tecnocreaciones\Vzla\EntityBundle\Entity\Region 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set country
     *
     * @param \Tecnocreaciones\Vzla\EntityBundle\Entity\Country $country
     * @return State
     */
    public function setCountry(\Tecnocreaciones\Vzla\EntityBundle\Entity\Country $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \Tecnocreaciones\Vzla\EntityBundle\Entity\Country 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Add municipalities
     *
     * @param \Tecnocreaciones\Vzla\EntityBundle\Entity\Municipality $municipalities
     * @return State
     */
    public function addMunicipality(\Tecnocreaciones\Vzla\EntityBundle\Entity\Municipality $municipalities)
    {
        $this->municipalities[] = $municipalities;

        return $this;
    }

    /**
     * Remove municipalities
     *
     * @param \Tecnocreaciones\Vzla\EntityBundle\Entity\Municipality $municipalities
     */
    public function removeMunicipality(\Tecnocreaciones\Vzla\EntityBundle\Entity\Municipality $municipalities)
    {
        $this->municipalities->removeElement($municipalities);
    }

    /**
     * Get municipalities
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMunicipalities()
    {
        return $this->municipalities;
    }

    /**
     * Add cities
     *
     * @param \Tecnocreaciones\Vzla\EntityBundle\Entity\City $cities
     * @return State
     */
    public function addCity(\Tecnocreaciones\Vzla\EntityBundle\Entity\City $cities)
    {
        $this->cities[] = $cities;

        return $this;
    }

    /**
     * Remove cities
     *
     * @param \Tecnocreaciones\Vzla\EntityBundle\Entity\City $cities
     */
    public function removeCity(\Tecnocreaciones\Vzla\EntityBundle\Entity\City $cities)
    {
        $this->cities->removeElement($cities);
    }

    /**
     * Get cities
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCities()
    {
        return $this->cities;
    }
    
    public function __toString() {
        return $this->getDescription()?: '-';
    }
}
