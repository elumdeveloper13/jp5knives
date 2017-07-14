<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaymentTrans
 *
 * @ORM\Table(name="payment_trans")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PaymentTransRepository")
 */
class PaymentTrans
{
     /**
     * @var int
     *
     * @ORM\Column(name="trans_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $transId;

    /**
     * @var int
     *
     * @ORM\Column(name="cust_id", type="integer")
     */
    private $custId;

    /**
     * @var int
     *
     * @ORM\Column(name="order_id", type="integer")
     */
    private $orderId;

    /**
     * @var string
     *
     * @ORM\Column(name="trans_response", type="text")
     */
    private $transResponse;

    /**
     * @var string
     *
     * @ORM\Column(name="trans_status", type="string", length=10)
     */
    private $transStatus;

    /**
     * Get transId
     *
     * @return integer 
     */
    public function getTransId()
    {
        return $this->transId;
    }

    /**
     * Set custId
     *
     * @param integer $custId
     * @return PaymentTrans
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
     * Set orderId
     *
     * @param integer $orderId
     * @return PaymentTrans
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

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
     * Set transResponse
     *
     * @param string $transResponse
     * @return PaymentTrans
     */
    public function setTransResponse($transResponse)
    {
        $this->transResponse = $transResponse;

        return $this;
    }

    /**
     * Get transResponse
     *
     * @return string 
     */
    public function getTransResponse()
    {
        return $this->transResponse;
    }

    /**
     * Set transStatus
     *
     * @param string $transStatus
     * @return PaymentTrans
     */
    public function setTransStatus($transStatus)
    {
        $this->transStatus = $transStatus;

        return $this;
    }

    /**
     * Get transStatus
     *
     * @return string 
     */
    public function getTransStatus()
    {
        return $this->transStatus;
    }
}
