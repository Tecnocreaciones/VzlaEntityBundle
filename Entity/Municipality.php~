<?php

/*
 * This file is part of the TecnocreacionesVzlaFixturesBundle package.
 * 
 * (c) www.tecnocreaciones.com.ve
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tecnocreaciones\Vzla\FixturesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Municipality(Municipio)
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Tecnocreaciones\Vzla\FixturesBundle\Repository\MunicipalityRepository")
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
     * @var \Tecnocreaciones\Vzla\FixturesBundle\Entity\State
     *
     * @ORM\ManyToOne(targetEntity="Tecnocreaciones\Vzla\FixturesBundle\Entity\State", inversedBy="state")
     */
    private $state;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean")
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
     * @ORM\Column(name="updateAt", type="datetime", nullable=true)
     * @Gedmo\Timestampable(on="update")
     */
    private $updateAt;
    
    /**
     * @var \Tecnocreaciones\Vzla\FixturesBundle\Entity\Parish
     * 
     * @ORM\OneToMany(targetEntity="Tecnocreaciones\Vzla\FixturesBundle\Entity\Parish", mappedBy="municipality")
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
     * Set updateAt
     *
     * @param \DateTime $updateAt
     * @return Municipality
     */
    public function setUpdateAt($updateAt)
    {
        $this->updateAt = $updateAt;

        return $this;
    }

    /**
     * Get updateAt
     *
     * @return \DateTime 
     */
    public function getUpdateAt()
    {
        return $this->updateAt;
    }

    /**
     * Set state
     *
     * @param \Tecnocreaciones\Vzla\FixturesBundle\Entity\State $state
     * @return Municipality
     */
    public function setState(\Tecnocreaciones\Vzla\FixturesBundle\Entity\State $state = null)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return \Tecnocreaciones\Vzla\FixturesBundle\Entity\State 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Add parishes
     *
     * @param \Tecnocreaciones\Vzla\FixturesBundle\Entity\Parish $parishes
     * @return Municipality
     */
    public function addParish(\Tecnocreaciones\Vzla\FixturesBundle\Entity\Parish $parishes)
    {
        $this->parishes[] = $parishes;

        return $this;
    }

    /**
     * Remove parishes
     *
     * @param \Tecnocreaciones\Vzla\FixturesBundle\Entity\Parish $parishes
     */
    public function removeParish(\Tecnocreaciones\Vzla\FixturesBundle\Entity\Parish $parishes)
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
}
