<?php

namespace backOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * toshow
 *
 * @ORM\Table(name="toshow")
 * @ORM\Entity(repositoryClass="backOfficeBundle\Repository\toshowRepository")
 */
class toshow
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
     * @ORM\Column(name="slide", type="integer")
     */
    private $slide;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;


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
     * Set slide
     *
     * @param integer $slide
     *
     * @return toshow
     */
    public function setSlide($slide)
    {
        $this->slide = $slide;

        return $this;
    }

    /**
     * Get slide
     *
     * @return int
     */
    public function getSlide()
    {
        return $this->slide;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return toshow
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }
}
