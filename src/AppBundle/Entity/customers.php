<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * customers
 *
 * @ORM\Table(name="customers")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\customersRepository")
 */
class customers
{
    /**
     * @var int
     *
     * @ORM\Column(name="cust_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $custId;

    /**
     * @var string
     *
	 * @Assert\NotBlank() (message="Required Filed")
     * @ORM\Column(name="first_name", type="string", length=100)
     */
    private $firstName;

    /**
     * @var string
     *
	 * @Assert\NotBlank() (message="Required Filed")
     * @ORM\Column(name="last_name", type="string", length=100, nullable=true)
     */
    private $lastName;

    /**
     * @var string
     *
	 * @Assert\NotBlank() (message="Required Filed")
     * @ORM\Column(name="address1", type="string", length=255, nullable=true)
     */
    private $address1;

    /**
     * @var string
     *
	 * @Assert\NotBlank() (message="Required Filed")
     * @ORM\Column(name="address2", type="string", length=255, nullable=true)
     */
    private $address2;

    /**
     * @var string
     *
	 * @Assert\NotBlank() (message="Required Filed")
     * @ORM\Column(name="city", type="string", length=50, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
	 * @Assert\NotBlank() (message="Required Filed")
     * @ORM\Column(name="state", type="string", length=50, nullable=true)
     */
    private $state;

    /**
     * @var string
     *
	 * @Assert\NotBlank() (message="Required Filed")
     * @ORM\Column(name="zip", type="string", length=10, nullable=true)
     */
    private $zip;
	
	/**
     * @var string
     *
	 * @ORM\Column(name="country", type="string", length=25, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
	 * @Assert\NotBlank() (message="Required Filed")
     * @ORM\Column(name="email_address", type="string", length=255, nullable=true)
     */
    private $emailAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_no", type="string", length=15, nullable=true)
     */
    private $contactNo;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_shipping", type="boolean")
     */
    private $isShipping;

    /**
     * @var string
     *
	 * @Assert\NotBlank() (message="Required Filed")
     * @ORM\Column(name="cc_holder_name", type="string", length=255, nullable=true)
     */
    private $ccHolderName;

    /**
     * @var string
     *
	 * @Assert\NotBlank() (message="Required Filed")
     * @ORM\Column(name="cc_type", type="string", length=100, nullable=true)
     */
    private $ccType;

    /**
     * @var string
     *
	 * @Assert\NotBlank() (message="Required Filed")
     * @ORM\Column(name="cc_no", type="string", length=50, nullable=true)
     */
    private $ccNo;

    /**
     * @var string
     *
	 * @Assert\NotBlank() (message="Required Filed")
     * @ORM\Column(name="cc_expdate", type="string", length=10, nullable=true)
     */
    private $ccExpdate;

    /**
     * @var string
     *
	 * @Assert\NotBlank() (message="Required Filed")
     * @ORM\Column(name="cc_cvv2", type="string", length=10, nullable=true)
     */
    private $ccCvv2;
	
	protected $shippedto;
	
	
	 public function getShippedto()
    {
        return $this->shippedto;
    }

    public function setShippedto(Shippedto $shippedto = null)
    {
        $this->shippedto = $shippedto;
    }
	
	/**
     * Get custId
     *
     * @return integer 
     */
    public function getCustId()
    {
        return $this->custId;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return customers
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return customers
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set address1
     *
     * @param string $address1
     * @return customers
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;

        return $this;
    }

    /**
     * Get address1
     *
     * @return string 
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set address2
     *
     * @param string $address2
     * @return customers
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * Get address2
     *
     * @return string 
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return customers
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return customers
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set zip
     *
     * @param string $zip
     * @return customers
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Get zip
     *
     * @return string 
     */
    public function getZip()
    {
        return $this->zip;
    }
	
	 /**
     * Set country
     *
     * @param string $country
     * @return customers
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get sCountry
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }
	
    /**
     * Set emailAddress
     *
     * @param string $emailAddress
     * @return customers
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * Get emailAddress
     *
     * @return string 
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Set contactNo
     *
     * @param string $contactNo
     * @return customers
     */
    public function setContactNo($contactNo)
    {
        $this->contactNo = $contactNo;

        return $this;
    }

    /**
     * Get contactNo
     *
     * @return string 
     */
    public function getContactNo()
    {
        return $this->contactNo;
    }

    /**
     * Set isShipping
     *
     * @param boolean $isShipping
     * @return customers
     */
    public function setIsShipping($isShipping)
    {
        $this->isShipping = $isShipping;

        return $this;
    }

    /**
     * Get isShipping
     *
     * @return boolean 
     */
    public function getIsShipping()
    {
        return $this->isShipping;
    }

    /**
     * Set ccHolderName
     *
     * @param string $ccHolderName
     * @return customers
     */
    public function setCcHolderName($ccHolderName)
    {
        $this->ccHolderName = $ccHolderName;

        return $this;
    }

    /**
     * Get ccHolderName
     *
     * @return string 
     */
    public function getCcHolderName()
    {
        return $this->ccHolderName;
    }

    /**
     * Set ccType
     *
     * @param string $ccType
     * @return customers
     */
    public function setCcType($ccType)
    {
        $this->ccType = $ccType;

        return $this;
    }

    /**
     * Get ccType
     *
     * @return string 
     */
    public function getCcType()
    {
        return $this->ccType;
    }

    /**
     * Set ccNo
     *
     * @param string $ccNo
     * @return customers
     */
    public function setCcNo($ccNo)
    {
        $this->ccNo = $ccNo;

        return $this;
    }

    /**
     * Get ccNo
     *
     * @return string 
     */
    public function getCcNo()
    {
        return $this->ccNo;
    }

    /**
     * Set ccExpdate
     *
     * @param string $ccExpdate
     * @return customers
     */
    public function setCcExpdate($ccExpdate)
    {
        $this->ccExpdate = $ccExpdate;

        return $this;
    }

    /**
     * Get ccExpdate
     *
     * @return string 
     */
    public function getCcExpdate()
    {
        return $this->ccExpdate;
    }

    /**
     * Set ccCvv2
     *
     * @param string $ccCvv2
     * @return customers
     */
    public function setCcCvv2($ccCvv2)
    {
        $this->ccCvv2 = $ccCvv2;

        return $this;
    }

    /**
     * Get ccCvv2
     *
     * @return string 
     */
    public function getCcCvv2()
    {
        return $this->ccCvv2;
    }
	
	/*public function getshippedto()
    {
        return $this->shippedto;
    }*/
}
