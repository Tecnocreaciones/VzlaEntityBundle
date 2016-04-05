<?php

/*
 * This file is part of the TecnoReady Solutions C.A. package.
 * 
 * (c) www.tecnoready.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tecnocreaciones\Vzla\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Urbanizacion o sector
 *
 * @author Carlos Mendoza <inhack20@gmail.com>
 * @ORM\Table(name="tecno_vzla_urbanization")
 * @ORM\Entity(repositoryClass="Tecnocreaciones\Vzla\EntityBundle\Repository\UrbanizationRepository")
 */
class Urbanization
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
     * Ciudad
     * @var City
     * @ORM\ManyToOne(targetEntity="Tecnocreaciones\Vzla\EntityBundle\Entity\City")
     * @ORM\JoinColumn(nullable=false)
     */
    private $city;
    
    /**
     * Parroquia
     * 
     * @var Parish
     * @ORM\ManyToOne(targetEntity="Tecnocreaciones\Vzla\EntityBundle\Entity\Parish")
     * @ORM\JoinColumn(nullable=false)
     */
    private $parish;
    
    /**
     * Codigo postal
     * @var \Tecnocreaciones\Vzla\EntityBundle\Entity\PostalCode
     * @ORM\ManyToOne(targetEntity="Tecnocreaciones\Vzla\EntityBundle\Entity\PostalCode")
     * @ORM\JoinColumn(nullable=false)
     */
    private $postalCode;

    public function getId() {
        return $this->id;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getActive() {
        return $this->active;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    public function setActive($active) {
        $this->active = $active;
        return $this;
    }

    public function setCreatedAt(\DateTime $createdAt) {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function setUpdatedAt(\DateTime $updatedAt) {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function getCity() {
        return $this->city;
    }

    public function setCity(City $city) {
        $this->city = $city;
        return $this;
    }

    public function getPostalCode() {
        return $this->postalCode;
    }

    public function setPostalCode(\Tecnocreaciones\Vzla\EntityBundle\Entity\PostalCode $postalCode) {
        $this->postalCode = $postalCode;
        return $this;
    }

    public function getParish() {
        return $this->parish;
    }

    public function setParish(Parish $parish) {
        $this->parish = $parish;
        return $this;
    }
        
    public function __toString() {
        return $this->getDescription()?:"-";
    }
}
