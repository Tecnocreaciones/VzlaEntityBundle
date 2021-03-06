<?php

namespace Tecnocreaciones\Vzla\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * City
 *
 * @ORM\Table(name="tecno_vzla_city")
 * @ORM\Entity(repositoryClass="Tecnocreaciones\Vzla\EntityBundle\Repository\CityRepository")
 */
class City
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
     * @ORM\Column(name="description", type="string", length=100)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="capital", type="boolean")
     */
    private $capital = false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=true)
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
     * Estado
     * 
     * @var \Tecnocreaciones\Vzla\EntityBundle\Entity\State
     * @ORM\ManyToOne(targetEntity="Tecnocreaciones\Vzla\EntityBundle\Entity\State", inversedBy="cities")
     */
    private $state;
    
    /**
     * Parroquias
     * 
     * @var Parish
     * @ORM\ManyToMany(targetEntity="Tecnocreaciones\Vzla\EntityBundle\Entity\Parish")
     * @ORM\JoinTable(name="tecno_vzla_city_parish")
     */
    private $parishes;
    
    /**
     * Municipio
     * 
     * @var Municipality
     * @ORM\ManyToOne(targetEntity="Tecnocreaciones\Vzla\EntityBundle\Entity\Municipality",cascade={"persist"})
     */
    private $municipality;

    /**
     * Codigo de area
     * 
     * @var integer
     * @ORM\Column(name="areaCode", type="integer",nullable=true)
     */
    private $areaCode;

    function __construct(){
        $this->parishes = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return City
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
     * Set capital
     *
     * @param boolean $capital
     * @return City
     */
    public function setCapital($capital)
    {
        $this->capital = $capital;

        return $this;
    }

    /**
     * Get capital
     *
     * @return boolean 
     */
    public function getCapital()
    {
        return $this->capital;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return City
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
     * @return City
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
     * @return City
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
     * Set state
     *
     * @param integer $state
     * @return City
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return integer 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set areaCode
     *
     * @param integer $areaCode
     * @return City
     */
    public function setAreaCode($areaCode)
    {
        $this->areaCode = $areaCode;

        return $this;
    }

    /**
     * Get areaCode
     *
     * @return integer 
     */
    public function getAreaCode()
    {
        return $this->areaCode;
    }

    /**
     * Set municipality
     *
     * @param \Tecnocreaciones\Vzla\EntityBundle\Entity\Municipality $municipality
     * @return City
     */
    public function setMunicipality(\Tecnocreaciones\Vzla\EntityBundle\Entity\Municipality $municipality = null)
    {
        $this->municipality = $municipality;

        return $this;
    }

    /**
     * Get municipality
     *
     * @return \Tecnocreaciones\Vzla\EntityBundle\Entity\Municipality 
     */
    public function getMunicipality()
    {
        return $this->municipality;
    }
    
    public function __toString() {
        return $this->getDescription()?: '-';
    }

    /**
     * Add parishes
     *
     * @param \Tecnocreaciones\Vzla\EntityBundle\Entity\Parish $parishes
     * @return City
     */
    public function addParish(\Tecnocreaciones\Vzla\EntityBundle\Entity\Parish $parishes)
    {
        $this->parishes->add($parishes);

        return $this;
    }

    /**
     * Remove parishes
     *
     * @param \Tecnocreaciones\Vzla\EntityBundle\Entity\Parish $parishes
     */
    public function removeParish(\Tecnocreaciones\Vzla\EntityBundle\Entity\Parish $parishes)
    {
        $this->parishes->removeElement($parishes);
    }

    /**
     * Get parishes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getParishes()
    {
        return $this->parishes;
    }
    
    /**
     * Set parish
     *
     * @param \Tecnocreaciones\Vzla\EntityBundle\Entity\Parish $parish
     * @return City
     */
    public function setParish(\Tecnocreaciones\Vzla\EntityBundle\Entity\Parish $parish = null)
    {
        $this->addParish($parish);

        return $this;
    }
}
