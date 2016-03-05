<?php

namespace VendorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MRegion
 *
 * @ORM\Table(name="M_REGION")
 * @ORM\Entity
 */
class MRegion
{
    /**
     * @var string
     *
     * @ORM\Column(name="REGION_NAME", type="string", length=32, nullable=true)
     */
    private $regionName;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="M_REGION_ID_seq", allocationSize=1, initialValue=1)
     */
    private $id;



    /**
     * Set regionName
     *
     * @param string $regionName
     *
     * @return MRegion
     */
    public function setRegionName($regionName)
    {
        $this->regionName = $regionName;

        return $this;
    }

    /**
     * Get regionName
     *
     * @return string
     */
    public function getRegionName()
    {
        return $this->regionName;
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
