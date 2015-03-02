<?php

namespace Bang\Bundle\NavbotBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profile
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bang\Bundle\NavbotBundle\Entity\ProfileRepository")
 */
class Profile
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
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="clickCount", type="integer")
     */
    private $clickCount = 0;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createAt", type="datetime")
     */
    private $createAt;


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
     * Set name
     *
     * @param string $name
     *
     * @return Profile
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
     * Set clickCount
     *
     * @param integer $clickCount
     *
     * @return Profile
     */
    public function setClickCount($clickCount)
    {
        $this->clickCount = $clickCount;

        return $this;
    }

    /**
     * Get clickCount
     *
     * @return integer
     */
    public function getClickCount()
    {
        return $this->clickCount;
    }

    /**
     * Set createAt
     *
     * @param \DateTime $createAt
     *
     * @return Profile
     */
    public function setCreateAt($createAt)
    {
        $this->createAt = $createAt;

        return $this;
    }

    /**
     * Get createAt
     *
     * @return \DateTime
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }
}

