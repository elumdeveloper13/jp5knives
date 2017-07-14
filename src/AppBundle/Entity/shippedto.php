<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * shippedto
 *
 * @ORM\Table(name="shipped_to")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\shippedtoRepository")
 */
class shippedto
{
    /**
     * @var int
     *
     * @ORM\Column(name="ship_to_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $shipToId;

    /**
     * @var string
     *
	 * @Assert\NotBlank() (message="Required Filed")
	 * @ORM\Column(name="s_fname", type="string", length=100, nullable=true)
     */
    public $sFname;

    /**
     * @var string
     *
	 * @Assert\NotBlank()
	 *
     * @ORM\Column(name="s_lname", type="string", length=100, nullable=true)
     */
    public $sLname;

    /**
     * @var string
     *
	 * @Assert\NotBlank() (message="Required Filed")
     * @ORM\Column(name="s_address1", type="string", length=255, nullable=true)
     */
    public $sAddress1;

    /**
     * @var string
     *
	 * @Assert\NotBlank() (message="Required Filed")
     * @ORM\Column(name="s_address2", type="string", length=255)
     */
    public $sAddress2;

    /**
     * @var string
     *
	 * @Assert\NotBlank() (message="Required Filed")
     * @ORM\Column(name="s_city", type="string", length=50, nullable=true)
     */
    public $sCity;

    /**
     * @var string
     *
	 * @Assert\NotBlank() (message="Required Filed")
     * @ORM\Column(name="s_state", type="string", length=50, nullable=true)
     */
    public $sState;

    /**
     * @var string
     *
	 * @Assert\NotBlank() (message="Required Filed")
     * @ORM\Column(name="s_postalcode", type="string", length=50, nullable=true)
     */
    public $sPostalcode;

    /**
     * @var string
     *
     * @ORM\Column(name="s_country", type="string", length=50, nullable=true)
     */
    public $sCountry;


    /**
     * Get shipToId
     *
     * @return integer 
     */
    public function getShipToId()
    {
        return $this->shipToId;
    }

    /**
     * Set sFname
     *
     * @param string $sFname
     * @return shippedto
     */
    public function setSFname($sFname)
    {
        $this->sFname = $sFname;

        return $this;
    }

    /**
     * Get sFname
     *
     * @return string 
     */
    public function getSFname()
    {
        return $this->sFname;
    }

    /**
     * Set sLname
     *
     * @param string $sLname
     * @return shippedto
     */
    public function setSLname($sLname)
    {
        $this->sLname = $sLname;

        return $this;
    }

    /**
     * Get sLname
     *
     * @return string 
     */
    public function getSLname()
    {
        return $this->sLname;
    }

    /**
     * Set sAddress1
     *
     * @param string $sAddress1
     * @return shippedto
     */
    public function setSAddress1($sAddress1)
    {
        $this->sAddress1 = $sAddress1;

        return $this;
    }

    /**
     * Get sAddress1
     *
     * @return string 
     */
    public function getSAddress1()
    {
        return $this->sAddress1;
    }

    /**
     * Set sAddress2
     *
     * @param string $sAddress2
     * @return shippedto
     */
    public function setSAddress2($sAddress2)
    {
        $this->sAddress2 = $sAddress2;

        return $this;
    }

    /**
     * Get sAddress2
     *
     * @return string 
     */
    public function getSAddress2()
    {
        return $this->sAddress2;
    }

    /**
     * Set sCity
     *
     * @param string $sCity
     * @return shippedto
     */
    public function setSCity($sCity)
    {
        $this->sCity = $sCity;

        return $this;
    }

    /**
     * Get sCity
     *
     * @return string 
     */
    public function getSCity()
    {
        return $this->sCity;
    }

    /**
     * Set sState
     *
     * @param string $sState
     * @return shippedto
     */
    public function setSState($sState)
    {
        $this->sState = $sState;

        return $this;
    }

    /**
     * Get sState
     *
     * @return string 
     */
    public function getSState()
    {
        return $this->sState;
    }

    /**
     * Set sPostalcode
     *
     * @param string $sPostalcode
     * @return shippedto
     */
    public function setSPostalcode($sPostalcode)
    {
        $this->sPostalcode = $sPostalcode;

        return $this;
    }

    /**
     * Get sPostalcode
     *
     * @return string 
     */
    public function getSPostalcode()
    {
        return $this->sPostalcode;
    }

    /**
     * Set sCountry
     *
     * @param string $sCountry
     * @return shippedto
     */
    public function setSCountry($sCountry)
    {
        $this->sCountry = $sCountry;

        return $this;
    }

    /**
     * Get sCountry
     *
     * @return string 
     */
    public function getSCountry()
    {
        return $this->sCountry;
    }
}
