<?php

namespace VendorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mara
 *
 * @ORM\Table(name="MARA")
 * @ORM\Entity
 */
class Mara
{
    /**
     * @var string
     *
     * @ORM\Column(name="MAKTX", type="string", length=40, nullable=true)
     */
    private $maktx;

    /**
     * @var string
     *
     * @ORM\Column(name="MATKL", type="string", length=9, nullable=true)
     */
    private $matkl;

    /**
     * @var string
     *
     * @ORM\Column(name="MBRSH", type="string", length=1, nullable=true)
     */
    private $mbrsh;

    /**
     * @var string
     *
     * @ORM\Column(name="MEIS", type="string", length=3, nullable=true)
     */
    private $meis;

    /**
     * @var string
     *
     * @ORM\Column(name="MTART", type="string", length=4, nullable=true)
     */
    private $mtart;

    /**
     * @var string
     *
     * @ORM\Column(name="MATNR", type="string", length=18)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="MARA_MATNR_seq", allocationSize=1, initialValue=1)
     */
    private $matnr;



    /**
     * Set maktx
     *
     * @param string $maktx
     *
     * @return Mara
     */
    public function setMaktx($maktx)
    {
        $this->maktx = $maktx;

        return $this;
    }

    /**
     * Get maktx
     *
     * @return string
     */
    public function getMaktx()
    {
        return $this->maktx;
    }

    /**
     * Set matkl
     *
     * @param string $matkl
     *
     * @return Mara
     */
    public function setMatkl($matkl)
    {
        $this->matkl = $matkl;

        return $this;
    }

    /**
     * Get matkl
     *
     * @return string
     */
    public function getMatkl()
    {
        return $this->matkl;
    }

    /**
     * Set mbrsh
     *
     * @param string $mbrsh
     *
     * @return Mara
     */
    public function setMbrsh($mbrsh)
    {
        $this->mbrsh = $mbrsh;

        return $this;
    }

    /**
     * Get mbrsh
     *
     * @return string
     */
    public function getMbrsh()
    {
        return $this->mbrsh;
    }

    /**
     * Set meis
     *
     * @param string $meis
     *
     * @return Mara
     */
    public function setMeis($meis)
    {
        $this->meis = $meis;

        return $this;
    }

    /**
     * Get meis
     *
     * @return string
     */
    public function getMeis()
    {
        return $this->meis;
    }

    /**
     * Set mtart
     *
     * @param string $mtart
     *
     * @return Mara
     */
    public function setMtart($mtart)
    {
        $this->mtart = $mtart;

        return $this;
    }

    /**
     * Get mtart
     *
     * @return string
     */
    public function getMtart()
    {
        return $this->mtart;
    }

    /**
     * Get matnr
     *
     * @return string
     */
    public function getMatnr()
    {
        return $this->matnr;
    }
}
