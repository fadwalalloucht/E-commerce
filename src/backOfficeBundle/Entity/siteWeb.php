<?php

namespace backOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * siteWeb
 *
 * @ORM\Table(name="site_web")
 * @ORM\Entity(repositoryClass="backOfficeBundle\Repository\siteWebRepository")
 */
class siteWeb
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
     * @ORM\Column(name="block1", type="string", length=255, nullable=true)
     */
    private $block1;

    /**
     * @var string
     *
     * @ORM\Column(name="block2", type="string", length=255, nullable=true)
     */
    private $block2;

    /**
     * @var string
     *
     * @ORM\Column(name="block3", type="string", length=255, nullable=true)
     */
    private $block3;

    /**
     * @var string
     *
     * @ORM\Column(name="block4", type="string", length=255, nullable=true)
     */
    private $block4;

    /**
     * @var string
     *
     * @ORM\Column(name="block5", type="string", length=255, nullable=true)
     */
    private $block5;

    /**
     * @var string
     *
     * @ORM\Column(name="block6", type="string", length=255, nullable=true)
     */
    private $block6;

    /**
     * @var string
     *
     * @ORM\Column(name="block7", type="string", length=255, nullable=true)
     */
    private $block7;

    /**
     * @var string
     *
     * @ORM\Column(name="block8", type="string", length=255, nullable=true)
     */
    private $block8;

    /**
     * @var string
     *
     * @ORM\Column(name="block9", type="string", length=255, nullable=true)
     */
    private $block9;

    /**
     * @var string
     *
     * @ORM\Column(name="block10", type="string", length=255, nullable=true)
     */
    private $block10;

    /**
     * @var string
     *
     * @ORM\Column(name="block11", type="string", length=255, nullable=true)
     */
    private $block11;

    /**
     * @var string
     *
     * @ORM\Column(name="block12", type="string", length=255, nullable=true)
     */
    private $block12;

    /**
     * @var string
     *
     * @ORM\Column(name="block13", type="string", length=255, nullable=true)
     */
    private $block13;


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
     * Set block1
     *
     * @param string $block1
     *
     * @return siteWeb
     */
    public function setBlock1($block1)
    {
        $this->block1 = $block1;

        return $this;
    }

    /**
     * Get block1
     *
     * @return string
     */
    public function getBlock1()
    {
        return $this->block1;
    }

    /**
     * Set block2
     *
     * @param string $block2
     *
     * @return siteWeb
     */
    public function setBlock2($block2)
    {
        $this->block2 = $block2;

        return $this;
    }

    /**
     * Get block2
     *
     * @return string
     */
    public function getBlock2()
    {
        return $this->block2;
    }

    /**
     * Set block3
     *
     * @param string $block3
     *
     * @return siteWeb
     */
    public function setBlock3($block3)
    {
        $this->block3 = $block3;

        return $this;
    }

    /**
     * Get block3
     *
     * @return string
     */
    public function getBlock3()
    {
        return $this->block3;
    }

    /**
     * Set block4
     *
     * @param string $block4
     *
     * @return siteWeb
     */
    public function setBlock4($block4)
    {
        $this->block4 = $block4;

        return $this;
    }

    /**
     * Get block4
     *
     * @return string
     */
    public function getBlock4()
    {
        return $this->block4;
    }

    /**
     * Set block5
     *
     * @param string $block5
     *
     * @return siteWeb
     */
    public function setBlock5($block5)
    {
        $this->block5 = $block5;

        return $this;
    }

    /**
     * Get block5
     *
     * @return string
     */
    public function getBlock5()
    {
        return $this->block5;
    }

    /**
     * Set block6
     *
     * @param string $block6
     *
     * @return siteWeb
     */
    public function setBlock6($block6)
    {
        $this->block6 = $block6;

        return $this;
    }

    /**
     * Get block6
     *
     * @return string
     */
    public function getBlock6()
    {
        return $this->block6;
    }

    /**
     * Set block7
     *
     * @param string $block7
     *
     * @return siteWeb
     */
    public function setBlock7($block7)
    {
        $this->block7 = $block7;

        return $this;
    }

    /**
     * Get block7
     *
     * @return string
     */
    public function getBlock7()
    {
        return $this->block7;
    }

    /**
     * Set block8
     *
     * @param string $block8
     *
     * @return siteWeb
     */
    public function setBlock8($block8)
    {
        $this->block8 = $block8;

        return $this;
    }

    /**
     * Get block8
     *
     * @return string
     */
    public function getBlock8()
    {
        return $this->block8;
    }

    /**
     * Set block9
     *
     * @param string $block9
     *
     * @return siteWeb
     */
    public function setBlock9($block9)
    {
        $this->block9 = $block9;

        return $this;
    }

    /**
     * Get block9
     *
     * @return string
     */
    public function getBlock9()
    {
        return $this->block9;
    }

    /**
     * Set block10
     *
     * @param string $block10
     *
     * @return siteWeb
     */
    public function setBlock10($block10)
    {
        $this->block10 = $block10;

        return $this;
    }

    /**
     * Get block10
     *
     * @return string
     */
    public function getBlock10()
    {
        return $this->block10;
    }

    /**
     * Set block11
     *
     * @param string $block11
     *
     * @return siteWeb
     */
    public function setBlock11($block11)
    {
        $this->block11 = $block11;

        return $this;
    }

    /**
     * Get block11
     *
     * @return string
     */
    public function getBlock11()
    {
        return $this->block11;
    }

    /**
     * Set block12
     *
     * @param string $block12
     *
     * @return siteWeb
     */
    public function setBlock12($block12)
    {
        $this->block12 = $block12;

        return $this;
    }

    /**
     * Get block12
     *
     * @return string
     */
    public function getBlock12()
    {
        return $this->block12;
    }

    /**
     * Set block13
     *
     * @param string $block13
     *
     * @return siteWeb
     */
    public function setBlock13($block13)
    {
        $this->block13 = $block13;

        return $this;
    }

    /**
     * Get block13
     *
     * @return string
     */
    public function getBlock13()
    {
        return $this->block13;
    }
}
