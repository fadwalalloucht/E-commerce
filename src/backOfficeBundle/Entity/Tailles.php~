<?php

namespace backOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tailles
 *
 * @ORM\Table(name="tailles")
 * @ORM\Entity(repositoryClass="backOfficeBundle\Repository\TaillesRepository")
 */
class Tailles
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
     * @var string
     *
     * @ORM\Column(name="Title_taille", type="string", length=255)
     */
    private $titleTaille;


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
     * Set titleTaille
     *
     * @param string $titleTaille
     *
     * @return Tailles
     */
    public function setTitleTaille($titleTaille)
    {
        $this->titleTaille = $titleTaille;

        return $this;
    }

    /**
     * Get titleTaille
     *
     * @return string
     */
    public function getTitleTaille()
    {
        return $this->titleTaille;
    }
}
