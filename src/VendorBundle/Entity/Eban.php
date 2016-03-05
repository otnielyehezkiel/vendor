<?php

namespace VendorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Eban
 *
 * @ORM\Table(name="EBAN", indexes={@ORM\Index(name="IDX_86963C6EC5C38082", columns={"MATNR"})})
 * @ORM\Entity
 */
class Eban
{
    /**
     * @var integer
     *
     * @ORM\Column(name="BNFPO", type="smallint", nullable=true)
     */
    private $bnfpo;

    /**
     * @var string
     *
     * @ORM\Column(name="BSART", type="string", length=4, nullable=true)
     */
    private $bsart;

    /**
     * @var string
     *
     * @ORM\Column(name="PREIS", type="decimal", precision=11, scale=4, nullable=true)
     */
    private $preis;

    /**
     * @var string
     *
     * @ORM\Column(name="PSPNR", type="string", length=1, nullable=true)
     */
    private $pspnr;

    /**
     * @var string
     *
     * @ORM\Column(name="TXZ01", type="string", length=18, nullable=true)
     */
    private $txz01;

    /**
     * @var string
     *
     * @ORM\Column(name="WERKS", type="string", length=4, nullable=true)
     */
    private $werks;

    /**
     * @var string
     *
     * @ORM\Column(name="BANFN", type="string", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="EBAN_BANFN_seq", allocationSize=1, initialValue=1)
     */
    private $banfn;

    /**
     * @var \VendorBundle\Entity\Mara
     *
     * @ORM\ManyToOne(targetEntity="VendorBundle\Entity\Mara")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="MATNR", referencedColumnName="MATNR")
     * })
     */
    private $matnr;



    /**
     * Set bnfpo
     *
     * @param integer $bnfpo
     *
     * @return Eban
     */
    public function setBnfpo($bnfpo)
    {
        $this->bnfpo = $bnfpo;

        return $this;
    }

    /**
     * Get bnfpo
     *
     * @return integer
     */
    public function getBnfpo()
    {
        return $this->bnfpo;
    }

    /**
     * Set bsart
     *
     * @param string $bsart
     *
     * @return Eban
     */
    public function setBsart($bsart)
    {
        $this->bsart = $bsart;

        return $this;
    }

    /**
     * Get bsart
     *
     * @return string
     */
    public function getBsart()
    {
        return $this->bsart;
    }

    /**
     * Set preis
     *
     * @param string $preis
     *
     * @return Eban
     */
    public function setPreis($preis)
    {
        $this->preis = $preis;

        return $this;
    }

    /**
     * Get preis
     *
     * @return string
     */
    public function getPreis()
    {
        return $this->preis;
    }

    /**
     * Set pspnr
     *
     * @param string $pspnr
     *
     * @return Eban
     */
    public function setPspnr($pspnr)
    {
        $this->pspnr = $pspnr;

        return $this;
    }

    /**
     * Get pspnr
     *
     * @return string
     */
    public function getPspnr()
    {
        return $this->pspnr;
    }

    /**
     * Set txz01
     *
     * @param string $txz01
     *
     * @return Eban
     */
    public function setTxz01($txz01)
    {
        $this->txz01 = $txz01;

        return $this;
    }

    /**
     * Get txz01
     *
     * @return string
     */
    public function getTxz01()
    {
        return $this->txz01;
    }

    /**
     * Set werks
     *
     * @param string $werks
     *
     * @return Eban
     */
    public function setWerks($werks)
    {
        $this->werks = $werks;

        return $this;
    }

    /**
     * Get werks
     *
     * @return string
     */
    public function getWerks()
    {
        return $this->werks;
    }

    /**
     * Get banfn
     *
     * @return string
     */
    public function getBanfn()
    {
        return $this->banfn;
    }

    /**
     * Set matnr
     *
     * @param \VendorBundle\Entity\Mara $matnr
     *
     * @return Eban
     */
    public function setMatnr(\VendorBundle\Entity\Mara $matnr = null)
    {
        $this->matnr = $matnr;

        return $this;
    }

    /**
     * Get matnr
     *
     * @return \VendorBundle\Entity\Mara
     */
    public function getMatnr()
    {
        return $this->matnr;
    }
}
