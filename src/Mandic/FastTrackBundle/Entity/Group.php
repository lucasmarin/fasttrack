<?php

namespace Mandic\FastTrackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\Role\RoleInterface;
use  Mandic\FastTrackBundle\Entity\User;

/**
 * Mandic\FastTrackBundle\Entity\Group
 *
 * @ORM\Table(name="`group`")
 * @ORM\Entity
 */
class Group implements RoleInterface
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=20)
     */
    private $name;

    /**
     * @var string $role
     *
     * @ORM\Column(name="role", type="string", length=20)
     */
    private $role;

    /**
     * @ORM\ManyToMany(targetEntity="User")
     *
     */
    private $users;


    public function __construct()
    {
        $this->users = new ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return UserGroup
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
     * Set role
     *
     * @param string $role
     * @return UserGroup
     */
    public function setRole($role)
    {
        $this->role = $role;
    
        return $this;
    }

    /**
     * @see RoleInterface
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set users
     *
     * @see RoleInterface
     * @param array $users
     * @return UserGroup
     */
    public function setUsers($users)
    {
        $this->users = $users;
    
        return $this;
    }

    /**
     * Get users
     *
     * @return array 
     */
    public function getUsers()
    {
        return $this->users;
    }


}
