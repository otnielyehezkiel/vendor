<?php

namespace VendorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lfa1
 *
 * @ORM\Table(name="LFA1", indexes={@ORM\Index(name="IDX_3C2DB795CAFD65AF", columns={"COUNTRY_ID"}), @ORM\Index(name="IDX_3C2DB795E4A9595A", columns={"REGION_ID"})})
 * @ORM\Entity
 */
class Lfa1
{
    /**
     * @var string
     *
     * @ORM\Column(name="ADRNR", type="string", length=10, nullable=true)
     */
    private $adrnr;

    /**
     * @var string
     *
     * @ORM\Column(name="DUEFL", type="string", length=1, nullable=true)
     */
    private $duefl;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ERDAT", type="datetime", nullable=true)
     */
    private $erdat;

    /**
     * @var string
     *
     * @ORM\Column(name="ERNAM", type="string", length=12, nullable=true)
     */
    private $ernam;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ERP", type="string", length=10, nullable=true)
     */
    private $idErp;

    /**
     * @var string
     *
     * @ORM\Column(name="KTOKK", type="string", length=4, nullable=true)
     */
    private $ktokk;

    /**
     * @var string
     *
     * @ORM\Column(name="MC0D3", type="string", length=25, nullable=true)
     */
    private $mc0d3;

    /**
     * @var string
     *
     * @ORM\Column(name="MCOD1", type="string", length=25, nullable=true)
     */
    private $mcod1;

    /**
     * @var string
     *
     * @ORM\Column(name="NAME1", type="string", length=35, nullable=true)
     */
    private $name1;

    /**
     * @var string
     *
     * @ORM\Column(name="ORT01", type="string", length=35, nullable=true)
     */
    private $ort01;

    /**
     * @var string
     *
     * @ORM\Column(name="PSTLZ", type="string", length=10, nullable=true)
     */
    private $pstlz;

    /**
     * @var string
     *
     * @ORM\Column(name="SORTL", type="string", length=10, nullable=true)
     */
    private $sortl;

    /**
     * @var string
     *
     * @ORM\Column(name="SPRAS", type="string", length=3, nullable=true)
     */
    private $spras;

    /**
     * @var string
     *
     * @ORM\Column(name="STRAS", type="string", length=35, nullable=true)
     */
    private $stras;

    /**
     * @var string
     *
     * @ORM\Column(name="TAX_NUMBER", type="string", length=15, nullable=true)
     */
    private $taxNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="TELF1", type="string", length=16, nullable=true)
     */
    private $telf1;

    /**
     * @var string
     *
     * @ORM\Column(name="TELF2", type="string", length=16, nullable=true)
     */
    private $telf2;

    /**
     * @var string
     *
     * @ORM\Column(name="TELFX", type="string", length=31, nullable=true)
     */
    private $telfx;

    /**
     * @var string
     *
     * @ORM\Column(name="VAT_RNUM", type="string", length=20, nullable=true)
     */
    private $vatRnum;

    /**
     * @var string
     *
     * @ORM\Column(name="LIFNR", type="string", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="LFA1_LIFNR_seq", allocationSize=1, initialValue=1)
     */
    private $lifnr;

    /**
     * @var \VendorBundle\Entity\MRegion
     *
     * @ORM\ManyToOne(targetEntity="VendorBundle\Entity\MRegion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="REGION_ID", referencedColumnName="ID")
     * })
     */
    private $region;

    /**
     * @var \VendorBundle\Entity\MCountry
     *
     * @ORM\ManyToOne(targetEntity="VendorBundle\Entity\MCountry")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="COUNTRY_ID", referencedColumnName="ID")
     * })
     */
    private $country;



    /**
     * Set adrnr
     *
     * @param string $adrnr
     *
     * @return Lfa1
     */
    public function setAdrnr($adrnr)
    {
        $this->adrnr = $adrnr;

        return $this;
    }

    /**
     * Get adrnr
     *
     * @return string
     */
    public function getAdrnr()
    {
        return $this->adrnr;
    }

    /**
     * Set duefl
     *
     * @param string $duefl
     *
     * @return Lfa1
     */
    public function setDuefl($duefl)
    {
        $this->duefl = $duefl;

        return $this;
    }

    /**
     * Get duefl
     *
     * @return string
     */
    public function getDuefl()
    {
        return $this->duefl;
    }

    /**
     * Set erdat
     *
     * @param \DateTime $erdat
     *
     * @return Lfa1
     */
    public function setErdat($erdat)
    {
        $this->erdat = $erdat;

        return $this;
    }

    /**
     * Get erdat
     *
     * @return \DateTime
     */
    public function getErdat()
    {
        return $this->erdat;
    }

    /**
     * Set ernam
     *
     * @param string $ernam
     *
     * @return Lfa1
     */
    public function setErnam($ernam)
    {
        $this->ernam = $ernam;

        return $this;
    }

    /**
     * Get ernam
     *
     * @return string
     */
    public function getErnam()
    {
        return $this->ernam;
    }

    /**
     * Set idErp
     *
     * @param string $idErp
     *
     * @return Lfa1
     */
    public function setIdErp($idErp)
    {
        $this->idErp = $idErp;

        return $this;
    }

    /**
     * Get idErp
     *
     * @return string
     */
    public function getIdErp()
    {
        return $this->idErp;
    }

    /**
     * Set ktokk
     *
     * @param string $ktokk
     *
     * @return Lfa1
     */
    public function setKtokk($ktokk)
    {
        $this->ktokk = $ktokk;

        return $this;
    }

    /**
     * Get ktokk
     *
     * @return string
     */
    public function getKtokk()
    {
        return $this->ktokk;
    }

    /**
     * Set mc0d3
     *
     * @param string $mc0d3
     *
     * @return Lfa1
     */
    public function setMc0d3($mc0d3)
    {
        $this->mc0d3 = $mc0d3;

        return $this;
    }

    /**
     * Get mc0d3
     *
     * @return string
     */
    public function getMc0d3()
    {
        return $this->mc0d3;
    }

    /**
     * Set mcod1
     *
     * @param string $mcod1
     *
     * @return Lfa1
     */
    public function setMcod1($mcod1)
    {
        $this->mcod1 = $mcod1;

        return $this;
    }

    /**
     * Get mcod1
     *
     * @return string
     */
    public function getMcod1()
    {
        return $this->mcod1;
    }

    /**
     * Set name1
     *
     * @param string $name1
     *
     * @return Lfa1
     */
    public function setName1($name1)
    {
        $this->name1 = $name1;

        return $this;
    }

    /**
     * Get name1
     *
     * @return string
     */
    public function getName1()
    {
        return $this->name1;
    }

    /**
     * Set ort01
     *
     * @param string $ort01
     *
     * @return Lfa1
     */
    public function setOrt01($ort01)
    {
        $this->ort01 = $ort01;

        return $this;
    }

    /**
     * Get ort01
     *
     * @return string
     */
    public function getOrt01()
    {
        return $this->ort01;
    }

    /**
     * Set pstlz
     *
     * @param string $pstlz
     *
     * @return Lfa1
     */
    public function setPstlz($pstlz)
    {
        $this->pstlz = $pstlz;

        return $this;
    }

    /**
     * Get pstlz
     *
     * @return string
     */
    public function getPstlz()
    {
        return $this->pstlz;
    }

    /**
     * Set sortl
     *
     * @param string $sortl
     *
     * @return Lfa1
     */
    public function setSortl($sortl)
    {
        $this->sortl = $sortl;

        return $this;
    }

    /**
     * Get sortl
     *
     * @return string
     */
    public function getSortl()
    {
        return $this->sortl;
    }

    /**
     * Set spras
     *
     * @param string $spras
     *
     * @return Lfa1
     */
    public function setSpras($spras)
    {
        $this->spras = $spras;

        return $this;
    }

    /**
     * Get spras
     *
     * @return string
     */
    public function getSpras()
    {
        return $this->spras;
    }

    /**
     * Set stras
     *
     * @param string $stras
     *
     * @return Lfa1
     */
    public function setStras($stras)
    {
        $this->stras = $stras;

        return $this;
    }

    /**
     * Get stras
     *
     * @return string
     */
    public function getStras()
    {
        return $this->stras;
    }

    /**
     * Set taxNumber
     *
     * @param string $taxNumber
     *
     * @return Lfa1
     */
    public function setTaxNumber($taxNumber)
    {
        $this->taxNumber = $taxNumber;

        return $this;
    }

    /**
     * Get taxNumber
     *
     * @return string
     */
    public function getTaxNumber()
    {
        return $this->taxNumber;
    }

    /**
     * Set telf1
     *
     * @param string $telf1
     *
     * @return Lfa1
     */
    public function setTelf1($telf1)
    {
        $this->telf1 = $telf1;

        return $this;
    }

    /**
     * Get telf1
     *
     * @return string
     */
    public function getTelf1()
    {
        return $this->telf1;
    }

    /**
     * Set telf2
     *
     * @param string $telf2
     *
     * @return Lfa1
     */
    public function setTelf2($telf2)
    {
        $this->telf2 = $telf2;

        return $this;
    }

    /**
     * Get telf2
     *
     * @return string
     */
    public function getTelf2()
    {
        return $this->telf2;
    }

    /**
     * Set telfx
     *
     * @param string $telfx
     *
     * @return Lfa1
     */
    public function setTelfx($telfx)
    {
        $this->telfx = $telfx;

        return $this;
    }

    /**
     * Get telfx
     *
     * @return string
     */
    public function getTelfx()
    {
        return $this->telfx;
    }

    /**
     * Set vatRnum
     *
     * @param string $vatRnum
     *
     * @return Lfa1
     */
    public function setVatRnum($vatRnum)
    {
        $this->vatRnum = $vatRnum;

        return $this;
    }

    /**
     * Get vatRnum
     *
     * @return string
     */
    public function getVatRnum()
    {
        return $this->vatRnum;
    }

    /**
     * Get lifnr
     *
     * @return string
     */
    public function getLifnr()
    {
        return $this->lifnr;
    }

    /**
     * Set region
     *
     * @param \VendorBundle\Entity\MRegion $region
     *
     * @return Lfa1
     */
    public function setRegion(\VendorBundle\Entity\MRegion $region = null)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return \VendorBundle\Entity\MRegion
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set country
     *
     * @param \VendorBundle\Entity\MCountry $country
     *
     * @return Lfa1
     */
    public function setCountry(\VendorBundle\Entity\MCountry $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \VendorBundle\Entity\MCountry
     */
    public function getCountry()
    {
        return $this->country;
    }
}
