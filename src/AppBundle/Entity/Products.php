<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Products
 *
 * @ORM\Table(name="products")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductsRepository")
 */
class Products
{
    /**
     * @var int
     *
     * @ORM\Column(name="prod_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $prodId;

    /**
     * @var string
     *
     * @ORM\Column(name="product_code", type="string", length=100)
     */
    private $productCode;

    /**
     * @var string
     *
     * @ORM\Column(name="product_name", type="string", length=100)
     */
    private $productName;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;

    /**
     * @var float
     *
     * @ORM\Column(name="ship_price", type="float")
     */
    private $shipPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_image", type="string", length=100)
     */
    private $prodImage;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_parent", type="boolean")
     */
    private $isParent;


    /**
     * Get prodId
     *
     * @return integer 
     */
    public function getProdId()
    {
        return $this->prodId;
    }

    /**
     * Set productCode
     *
     * @param string $productCode
     * @return Products
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;

        return $this;
    }

    /**
     * Get productCode
     *
     * @return string 
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * Set productName
     *
     * @param string $productName
     * @return Products
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;

        return $this;
    }

    /**
     * Get productName
     *
     * @return string 
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return Products
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set shipPrice
     *
     * @param float $shipPrice
     * @return Products
     */
    public function setShipPrice($shipPrice)
    {
        $this->shipPrice = $shipPrice;

        return $this;
    }

    /**
     * Get shipPrice
     *
     * @return float 
     */
    public function getShipPrice()
    {
        return $this->shipPrice;
    }

    /**
     * Set prodImage
     *
     * @param string $prodImage
     * @return Products
     */
    public function setProdImage($prodImage)
    {
        $this->prodImage = $prodImage;

        return $this;
    }

    /**
     * Get prodImage
     *
     * @return string 
     */
    public function getProdImage()
    {
        return $this->prodImage;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Products
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set isParent
     *
     * @param boolean $isParent
     * @return Products
     */
    public function setIsParent($isParent)
    {
        $this->isParent = $isParent;

        return $this;
    }

    /**
     * Get isParent
     *
     * @return boolean 
     */
    public function getIsParent()
    {
        return $this->isParent;
    }
}
