<?php

namespace backOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * roles
 *
 * @ORM\Table(name="roles")
 * @ORM\Entity(repositoryClass="backOfficeBundle\Repository\rolesRepository")
 */
class roles
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="IdAdmin", type="integer")
     */
    private $idAdmin;

    /**
     * @var int
     *
     * @ORM\Column(name="IdRole", type="integer")
     */
    private $idRole;

    /**
     * @var int
     *
     * @ORM\Column(name="Role", type="integer")
     */
    private $role;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idAdmin
     *
     * @param integer $idAdmin
     *
     * @return roles
     */
    public function setIdAdmin($idAdmin)
    {
        $this->idAdmin = $idAdmin;

        return $this;
    }

    /**
     * Get idAdmin
     *
     * @return int
     */
    public function getIdAdmin()
    {
        return $this->idAdmin;
    }

    /**
     * Set idRole
     *
     * @param integer $idRole
     *
     * @return roles
     */
    public function setIdRole($idRole)
    {
        $this->idRole = $idRole;

        return $this;
    }

    /**
     * Get idRole
     *
     * @return int
     */
    public function getIdRole()
    {
        return $this->idRole;
    }

    /**
     * Set role
     *
     * @param integer $role
     *
     * @return roles
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return int
     */
    public function getRole()
    {
        return $this->role;
    }
}

