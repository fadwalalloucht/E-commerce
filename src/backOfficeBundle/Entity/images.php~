<?php

namespace backOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * images
 *
 * @ORM\Table(name="images")
 * @ORM\Entity(repositoryClass="backOfficeBundle\Repository\imagesRepository")
 */
class images
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
     * @ORM\Column(name="urlimg", type="string", length=255)
     */
    private $urlimg;

    /**
     * @var string
     *
     * @ORM\Column(name="urlimgmin", type="string", length=255)
     */
    private $urlimgmin;

    /**
     * @var int
     *
     * @ORM\Column(name="idProduct", type="integer")
     */
    private $idProduct;


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
     * Set urlimg
     *
     * @param string $urlimg
     *
     * @return images
     */
    public function setUrlimg($urlimg)
    {
        $this->urlimg = $urlimg;

        return $this;
    }

    /**
     * Get urlimg
     *
     * @return string
     */
    public function getUrlimg()
    {
        return $this->urlimg;
    }

    /**
     * Set urlimgmin
     *
     * @param string $urlimgmin
     *
     * @return images
     */
    public function setUrlimgmin($urlimgmin)
    {
        $this->urlimgmin = $urlimgmin;

        return $this;
    }

    /**
     * Get urlimgmin
     *
     * @return string
     */
    public function getUrlimgmin()
    {
        return $this->urlimgmin;
    }

    /**
     * Set idProduct
     *
     * @param integer $idProduct
     *
     * @return images
     */
    public function setIdProduct($idProduct)
    {
        $this->idProduct = $idProduct;

        return $this;
    }

    /**
     * Get idProduct
     *
     * @return int
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }
}
