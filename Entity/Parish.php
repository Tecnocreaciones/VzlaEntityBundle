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
 * Parish(Parroquia)
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Tecnocreaciones\Vzla\EntityBundle\Repository\ParishRepository")
 */
class Parish
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
     * @var \Tecnocreaciones\Vzla\EntityBundle\Entity\State
     *
     * @ORM\ManyToOne(targetEntity="Tecnocreaciones\Vzla\EntityBundle\Entity\State", inversedBy="municipalities")
     */
    private $state;
    
    /**
     * @var \Tecnocreaciones\Vzla\EntityBundle\Entity\Municipality
     * 
     * @ORM\ManyToOne(targetEntity="Tecnocreaciones\Vzla\EntityBundle\Entity\Municipality", inversedBy="parishes",cascade={"persist"})
     */
    private $municipality;
    

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
     * @return Parish
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
     * @return Parish
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
     * @return Parish
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
     * @return Parish
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
     * Set municipality
     *
     * @param \Tecnocreaciones\Vzla\EntityBundle\Entity\Municipality $municipality
     * @return Parish
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

    /**
     * Set state
     *
     * @param \Tecnocreaciones\Vzla\EntityBundle\Entity\State $state
     * @return Parish
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
    
    public function __toString() {
        return $this->getDescription()?: '-';
    }
}
