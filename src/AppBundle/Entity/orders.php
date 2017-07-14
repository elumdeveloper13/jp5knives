<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * orders
 *
 * @ORM\Table(name="orders")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ordersRepository")
 */
class orders
{
   /**
     * @var int
     *
     * @ORM\Column(name="order_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $orderId;

    /**
     * @var int
     *
     * @ORM\Column(name="cust_id", type="integer")
     */
    private $custId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="order_date", type="datetime")
     */
    private $orderDate;

    /**
     * @var string
     *
     * @ORM\Column(name="order_status", type="string", length=25)
     */
    private $orderStatus;

    /**
     * @var int
     *
     * @ORM\Column(name="ship_to_id", type="integer")
     */
    private $shipToId;

    /**
     * @var float
     *
     * @ORM\Column(name="order_amt", type="float")
     */
    private $orderAmt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="export_date", type="datetime")
     */
    private $exportDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="shipped_date", type="datetime")
     */
    private $shippedDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="receipt_email", type="boolean")
     */
    private $receiptEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="gateway_type", type="string", length=10)
     */
    private $gatewayType;


    /**
     * Get orderId
     *
     * @return integer 
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set custId
     *
     * @param integer $custId
     * @return orders
     */
    public function setCustId($custId)
    {
        $this->custId = $custId;

        return $this;
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
     * Set orderDate
     *
     * @param \DateTime $orderDate
     * @return orders
     */
    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;

        return $this;
    }

    /**
     * Get orderDate
     *
     * @return \DateTime 
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * Set orderStatus
     *
     * @param string $orderStatus
     * @return orders
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;

        return $this;
    }

    /**
     * Get orderStatus
     *
     * @return string 
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * Set shipToId
     *
     * @param integer $shipToId
     * @return orders
     */
    public function setShipToId($shipToId)
    {
        $this->shipToId = $shipToId;

        return $this;
    }

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
     * Set orderAmt
     *
     * @param float $orderAmt
     * @return orders
     */
    public function setOrderAmt($orderAmt)
    {
        $this->orderAmt = $orderAmt;

        return $this;
    }

    /**
     * Get orderAmt
     *
     * @return float 
     */
    public function getOrderAmt()
    {
        return $this->orderAmt;
    }

    /**
     * Set exportDate
     *
     * @param \DateTime $exportDate
     * @return orders
     */
    public function setExportDate($exportDate)
    {
        $this->exportDate = $exportDate;

        return $this;
    }

    /**
     * Get exportDate
     *
     * @return \DateTime 
     */
    public function getExportDate()
    {
        return $this->exportDate;
    }

    /**
     * Set shippedDate
     *
     * @param string $shippedDate
     * @return orders
     */
    public function setShippedDate($shippedDate)
    {
        $this->shippedDate = $shippedDate;

        return $this;
    }

    /**
     * Get shippedDate
     *
     * @return string 
     */
    public function getShippedDate()
    {
        return $this->shippedDate;
    }

    /**
     * Set receiptEmail
     *
     * @param boolean $receiptEmail
     * @return orders
     */
    public function setReceiptEmail($receiptEmail)
    {
        $this->receiptEmail = $receiptEmail;

        return $this;
    }

    /**
     * Get receiptEmail
     *
     * @return boolean 
     */
    public function getReceiptEmail()
    {
        return $this->receiptEmail;
    }

    /**
     * Set gatewayType
     *
     * @param string $gatewayType
     * @return orders
     */
    public function setGatewayType($gatewayType)
    {
        $this->gatewayType = $gatewayType;

        return $this;
    }

    /**
     * Get gatewayType
     *
     * @return string 
     */
    public function getGatewayType()
    {
        return $this->gatewayType;
    }
}
