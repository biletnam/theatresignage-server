<?php

namespace AppBundle\Entity;
use Doctrine\Common\Collections\Criteria;

use Doctrine\ORM\Mapping as ORM;

/**
 * Channel
 *
 * @ORM\Table(name="channel")
 * @ORM\Entity
 */
class Channel
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

   
     /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Group")
     */
    protected $group;
    

    /**
     * Set name
     *
     * @param string $name
     * @return Channel
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
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
     * Set group
     *
     * @param \AppBundle\Entity\Group $group
     * @return Channel
     */
    public function setGroup(\AppBundle\Entity\Group $group = null)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     * @return \AppBundle\Entity\Group 
     */
    public function getGroup()
    {
        return $this->group;
    }
}
