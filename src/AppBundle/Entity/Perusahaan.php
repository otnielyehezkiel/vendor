<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Perusahaan
 *
 * @ORM\Table(name="PERUSAHAAN")
 * @ORM\Entity
 */
class Perusahaan
{
    /**
     * @var string
     *
     * @ORM\Column(name="ALAMAT", type="string", length=2000, nullable=true)
     */
    private $alamat;

    /**
     * @var integer
     *
     * @ORM\Column(name="BOLEH_HAPUS_AHLI", type="integer", nullable=true)
     */
    private $bolehHapusAhli = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="COUNTRY_ID", type="integer", nullable=true)
     */
    private $countryId;

    /**
     * @var string
     *
     * @ORM\Column(name="CP", type="string", length=2000, nullable=true)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="CP_HP", type="string", length=2000, nullable=true)
     */
    private $cpHp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATED_AT", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="DPP_NOMOR", type="string", length=2000, nullable=true)
     */
    private $dppNomor;

    /**
     * @var integer
     *
     * @ORM\Column(name="DPP_STATUS", type="integer", nullable=true)
     */
    private $dppStatus = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DPP_TANGGAL_BERLAKU", type="datetime", nullable=true)
     */
    private $dppTanggalBerlaku;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DPP_TANGGAL_MULAI", type="datetime", nullable=true)
     */
    private $dppTanggalMulai;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL", type="string", length=2000, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="FAX", type="string", length=2000, nullable=true)
     */
    private $fax;

    /**
     * @var integer
     *
     * @ORM\Column(name="FLAG", type="integer", nullable=true)
     */
    private $flag = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ERP", type="string", length=32, nullable=true)
     */
    private $idErp;

    /**
     * @var string
     *
     * @ORM\Column(name="JAWABAN", type="string", length=40, nullable=true)
     */
    private $jawaban;

    /**
     * @var string
     *
     * @ORM\Column(name="KEKAYAAN_BERSIH", type="decimal", precision=20, scale=2, nullable=true)
     */
    private $kekayaanBersih;

    /**
     * @var string
     *
     * @ORM\Column(name="KOTA", type="string", length=2000, nullable=true)
     */
    private $kota;

    /**
     * @var string
     *
     * @ORM\Column(name="NAMA", type="string", length=2000, nullable=true)
     */
    private $nama;

    /**
     * @var string
     *
     * @ORM\Column(name="NPWP", type="string", length=2000, nullable=true)
     */
    private $npwp;

    /**
     * @var string
     *
     * @ORM\Column(name="PASSWORD", type="string", length=2000, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="PERTANYAAN", type="string", length=2000, nullable=true)
     */
    private $pertanyaan;

    /**
     * @var integer
     *
     * @ORM\Column(name="REGION_ID", type="integer", nullable=true)
     */
    private $regionId;

    /**
     * @var integer
     *
     * @ORM\Column(name="STATE", type="integer", nullable=true)
     */
    private $state = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TAX_NUMBER", type="string", length=16, nullable=true)
     */
    private $taxNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="TELEPON", type="string", length=2000, nullable=true)
     */
    private $telepon;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="UPDATED_AT", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="USERNAME", type="string", length=2000, nullable=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="VAT_RNUM", type="string", length=20, nullable=true)
     */
    private $vatRnum;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="WAKTU_AKTIVASI", type="datetime", nullable=true)
     */
    private $waktuAktivasi;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="PERUSAHAAN_ID_seq", allocationSize=1, initialValue=1)
     */
    private $id;



    /**
     * Set alamat
     *
     * @param string $alamat
     *
     * @return Perusahaan
     */
    public function setAlamat($alamat)
    {
        $this->alamat = $alamat;

        return $this;
    }

    /**
     * Get alamat
     *
     * @return string
     */
    public function getAlamat()
    {
        return $this->alamat;
    }

    /**
     * Set bolehHapusAhli
     *
     * @param integer $bolehHapusAhli
     *
     * @return Perusahaan
     */
    public function setBolehHapusAhli($bolehHapusAhli)
    {
        $this->bolehHapusAhli = $bolehHapusAhli;

        return $this;
    }

    /**
     * Get bolehHapusAhli
     *
     * @return integer
     */
    public function getBolehHapusAhli()
    {
        return $this->bolehHapusAhli;
    }

    /**
     * Set countryId
     *
     * @param integer $countryId
     *
     * @return Perusahaan
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;

        return $this;
    }

    /**
     * Get countryId
     *
     * @return integer
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * Set cp
     *
     * @param string $cp
     *
     * @return Perusahaan
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set cpHp
     *
     * @param string $cpHp
     *
     * @return Perusahaan
     */
    public function setCpHp($cpHp)
    {
        $this->cpHp = $cpHp;

        return $this;
    }

    /**
     * Get cpHp
     *
     * @return string
     */
    public function getCpHp()
    {
        return $this->cpHp;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Perusahaan
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set dppNomor
     *
     * @param string $dppNomor
     *
     * @return Perusahaan
     */
    public function setDppNomor($dppNomor)
    {
        $this->dppNomor = $dppNomor;

        return $this;
    }

    /**
     * Get dppNomor
     *
     * @return string
     */
    public function getDppNomor()
    {
        return $this->dppNomor;
    }

    /**
     * Set dppStatus
     *
     * @param integer $dppStatus
     *
     * @return Perusahaan
     */
    public function setDppStatus($dppStatus)
    {
        $this->dppStatus = $dppStatus;

        return $this;
    }

    /**
     * Get dppStatus
     *
     * @return integer
     */
    public function getDppStatus()
    {
        return $this->dppStatus;
    }

    /**
     * Set dppTanggalBerlaku
     *
     * @param \DateTime $dppTanggalBerlaku
     *
     * @return Perusahaan
     */
    public function setDppTanggalBerlaku($dppTanggalBerlaku)
    {
        $this->dppTanggalBerlaku = $dppTanggalBerlaku;

        return $this;
    }

    /**
     * Get dppTanggalBerlaku
     *
     * @return \DateTime
     */
    public function getDppTanggalBerlaku()
    {
        return $this->dppTanggalBerlaku;
    }

    /**
     * Set dppTanggalMulai
     *
     * @param \DateTime $dppTanggalMulai
     *
     * @return Perusahaan
     */
    public function setDppTanggalMulai($dppTanggalMulai)
    {
        $this->dppTanggalMulai = $dppTanggalMulai;

        return $this;
    }

    /**
     * Get dppTanggalMulai
     *
     * @return \DateTime
     */
    public function getDppTanggalMulai()
    {
        return $this->dppTanggalMulai;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Perusahaan
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Perusahaan
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set flag
     *
     * @param integer $flag
     *
     * @return Perusahaan
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;

        return $this;
    }

    /**
     * Get flag
     *
     * @return integer
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * Set idErp
     *
     * @param string $idErp
     *
     * @return Perusahaan
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
     * Set jawaban
     *
     * @param string $jawaban
     *
     * @return Perusahaan
     */
    public function setJawaban($jawaban)
    {
        $this->jawaban = $jawaban;

        return $this;
    }

    /**
     * Get jawaban
     *
     * @return string
     */
    public function getJawaban()
    {
        return $this->jawaban;
    }

    /**
     * Set kekayaanBersih
     *
     * @param string $kekayaanBersih
     *
     * @return Perusahaan
     */
    public function setKekayaanBersih($kekayaanBersih)
    {
        $this->kekayaanBersih = $kekayaanBersih;

        return $this;
    }

    /**
     * Get kekayaanBersih
     *
     * @return string
     */
    public function getKekayaanBersih()
    {
        return $this->kekayaanBersih;
    }

    /**
     * Set kota
     *
     * @param string $kota
     *
     * @return Perusahaan
     */
    public function setKota($kota)
    {
        $this->kota = $kota;

        return $this;
    }

    /**
     * Get kota
     *
     * @return string
     */
    public function getKota()
    {
        return $this->kota;
    }

    /**
     * Set nama
     *
     * @param string $nama
     *
     * @return Perusahaan
     */
    public function setNama($nama)
    {
        $this->nama = $nama;

        return $this;
    }

    /**
     * Get nama
     *
     * @return string
     */
    public function getNama()
    {
        return $this->nama;
    }

    /**
     * Set npwp
     *
     * @param string $npwp
     *
     * @return Perusahaan
     */
    public function setNpwp($npwp)
    {
        $this->npwp = $npwp;

        return $this;
    }

    /**
     * Get npwp
     *
     * @return string
     */
    public function getNpwp()
    {
        return $this->npwp;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Perusahaan
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set pertanyaan
     *
     * @param string $pertanyaan
     *
     * @return Perusahaan
     */
    public function setPertanyaan($pertanyaan)
    {
        $this->pertanyaan = $pertanyaan;

        return $this;
    }

    /**
     * Get pertanyaan
     *
     * @return string
     */
    public function getPertanyaan()
    {
        return $this->pertanyaan;
    }

    /**
     * Set regionId
     *
     * @param integer $regionId
     *
     * @return Perusahaan
     */
    public function setRegionId($regionId)
    {
        $this->regionId = $regionId;

        return $this;
    }

    /**
     * Get regionId
     *
     * @return integer
     */
    public function getRegionId()
    {
        return $this->regionId;
    }

    /**
     * Set state
     *
     * @param integer $state
     *
     * @return Perusahaan
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return integer
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set taxNumber
     *
     * @param string $taxNumber
     *
     * @return Perusahaan
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
     * Set telepon
     *
     * @param string $telepon
     *
     * @return Perusahaan
     */
    public function setTelepon($telepon)
    {
        $this->telepon = $telepon;

        return $this;
    }

    /**
     * Get telepon
     *
     * @return string
     */
    public function getTelepon()
    {
        return $this->telepon;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Perusahaan
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Perusahaan
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set vatRnum
     *
     * @param string $vatRnum
     *
     * @return Perusahaan
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
     * Set waktuAktivasi
     *
     * @param \DateTime $waktuAktivasi
     *
     * @return Perusahaan
     */
    public function setWaktuAktivasi($waktuAktivasi)
    {
        $this->waktuAktivasi = $waktuAktivasi;

        return $this;
    }

    /**
     * Get waktuAktivasi
     *
     * @return \DateTime
     */
    public function getWaktuAktivasi()
    {
        return $this->waktuAktivasi;
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
}
