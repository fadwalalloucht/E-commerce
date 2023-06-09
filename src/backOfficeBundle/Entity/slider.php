<?php

namespace backOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * slider
 *
 * @ORM\Table(name="slider")
 * @ORM\Entity(repositoryClass="backOfficeBundle\Repository\sliderRepository")
 */
class slider
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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="string", length=255)
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="urlImage", type="string", length=255)
     */
    private $urlImage;

    /**
     * @var int
     *
     * @ORM\Column(name="orderSlider", type="integer")
     */
    private $orderSlider;

    /**
     * @var int
     *
     * @ORM\Column(name="actif", type="integer")
     */
    private $actif;

    /**
     * @var int
     *
     * @ORM\Column(name="urlSlider", type="integer")
     */
    private $urlSlider;


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
     * Set titre
     *
     * @param string $titre
     *
     * @return slider
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return slider
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set urlImage
     *
     * @param string $urlImage
     *
     * @return slider
     */
    public function setUrlImage($urlImage)
    {
        $this->urlImage = $urlImage;

        return $this;
    }

    /**
     * Get urlImage
     *
     * @return string
     */
    public function getUrlImage()
    {
        return $this->urlImage;
    }

    /**
     * Set orderSlider
     *
     * @param integer $orderSlider
     *
     * @return slider
     */
    public function setOrderSlider($orderSlider)
    {
        $this->orderSlider = $orderSlider;

        return $this;
    }

    /**
     * Get orderSlider
     *
     * @return int
     */
    public function getOrderSlider()
    {
        return $this->orderSlider;
    }

    /**
     * Set actif
     *
     * @param integer $actif
     *
     * @return slider
     */
    public function setActif($actif)
    {
        $this->actif = $actif;

        return $this;
    }

    /**
     * Get actif
     *
     * @return int
     */
    public function getActif()
    {
        return $this->actif;
    }

    /**
     * Set urlSlider
     *
     * @param integer $urlSlider
     *
     * @return slider
     */
    public function setUrlSlider($urlSlider)
    {
        $this->urlSlider = $urlSlider;

        return $this;
    }

    /**
     * Get urlSlider
     *
     * @return int
     */
    public function getUrlSlider()
    {
        return $this->urlSlider;
    }
}
