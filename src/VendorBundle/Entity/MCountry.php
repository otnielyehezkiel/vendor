<?php

namespace VendorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MCountry
 *
 * @ORM\Table(name="M_COUNTRY")
 * @ORM\Entity
 */
class MCountry
{
    /**
     * @var string
     *
     * @ORM\Column(name="COUNTRY_KEY", type="string", length=3, nullable=true)
     */
    private $countryKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="M_COUNTRY_ID_seq", allocationSize=1, initialValue=1)
     */
    private $id;



    /**
     * Set countryKey
     *
     * @param string $countryKey
     *
     * @return MCountry
     */
    public function setCountryKey($countryKey)
    {
        $this->countryKey = $countryKey;

        return $this;
    }

    /**
     * Get countryKey
     *
     * @return string
     */
    public function getCountryKey()
    {
        return $this->countryKey;
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
