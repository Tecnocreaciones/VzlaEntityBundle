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
 * Municipality(Municipio)
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Tecnocreaciones\Vzla\EntityBundle\Repository\MunicipalityRepository")
 */
class Municipality
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
     * @var \Tecnocreaciones\Vzla\EntityBundle\Entity\State
     *
     * @ORM\ManyToOne(targetEntity="Tecnocreaciones\Vzla\EntityBundle\Entity\State", inversedBy="municipalities")
     */
    private $state;

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
     * Parroquias
     * 
     * @var \Tecnocreaciones\Vzla\EntityBundle\Entity\Parish
     * 
     * @ORM\OneToMany(targetEntity="Tecnocreaciones\Vzla\EntityBundle\Entity\Parish", mappedBy="municipality")
     */
    private $parishes;
    
    public function __construct() {
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
     * @return Municipality
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
     * Set active
     *
     * @param boolean $active
     * @return Municipality
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
     * @return Municipality
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
     * @return Municipality
     */
    public function setUpdatedAt($updateAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Set state
     *
     * @param \Tecnocreaciones\Vzla\EntityBundle\Entity\State $state
     * @return Municipality
     */
    public function setState(\Tecnocreaciones\Vzla\EntityBundle\Entity\State $state = null)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return \Tecnocreaciones\Vzla\EntityBundle\Entity\State 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Add parishes
     *
     * @param \Tecnocreaciones\Vzla\EntityBundle\Entity\Parish $parishes
     * @return Municipality
     */
    public function addParish(\Tecnocreaciones\Vzla\EntityBundle\Entity\Parish $parishes)
    {
        $this->parishes[] = $parishes;

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
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
    
    public function __toString() {
        return $this->getDescription()?: '-';
    }
}
