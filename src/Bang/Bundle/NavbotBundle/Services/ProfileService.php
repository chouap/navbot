<?php
namespace Bang\Bundle\NavbotBundle\Services;

class ProfileService
{
    /**
     * @var \Bang\Bundle\NavbotBundle\Entity\ProfileRepository
     */
    protected $repository;
    
    /**
     * @var \Doctrine\ORM\EntityManagerInterface
     */
    protected $manager;
    
    /**
     * @param string $name
     * @return \Bang\Bundle\NavbotBundle\Entity\Profile
     */
    public function getNewOrExistingProfileByName($name)
    {
        $profile = $this->getRepository()->findOneBy(array('name' => $name));
        if (null === $profile) {
            $profile = new \Bang\Bundle\NavbotBundle\Entity\Profile();
            $profile->setName($name);
            $this->getManager()->persist($profile);
        }
        return $profile;
    }
    
    public function isNewProfile(\Bang\Bundle\NavbotBundle\Entity\Profile $profile)
    {
        return null === $profile->getCreateAt();
    }
    
    /**
     * @param \Bang\Bundle\NavbotBundle\Entity\Profile $profile
     */
    public function saveProfile(\Bang\Bundle\NavbotBundle\Entity\Profile $profile)
    {
        if ($this->isNewProfile($profile)) {
            $profile->setCreateAt(new \DateTime());
        }
        $profile->setClickCount($profile->getClickCount() + 1);
        $this->getManager()->flush();
    }
    
    /**
     * @return \Bang\Bundle\NavbotBundle\Entity\ProfileRepository
     */
    function getRepository()
    {
        return $this->repository;
    }

    /**
     * @param \Bang\Bundle\NavbotBundle\Entity\ProfileRepository $repository
     */
    function setRepository(\Bang\Bundle\NavbotBundle\Entity\ProfileRepository $repository)
    {
        $this->repository = $repository;
    }
    
    /**
     * @return \Doctrine\ORM\EntityManagerInterface $manager
     */
    function getManager()
    {
        return $this->manager;
    }

    /**
     * @param \Doctrine\ORM\EntityManagerInterface $manager
     */
    function setManager(\Doctrine\ORM\EntityManagerInterface $manager)
    {
        $this->manager = $manager;
    }

}