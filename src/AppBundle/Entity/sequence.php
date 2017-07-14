<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sequence
 *
 * @ORM\Table(name="sequence")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\sequenceRepository")
 */
class sequence
{
    /**
     * @var int
     *
     * @ORM\Column(name="seq_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $seqId;

    /**
     * @var int
     *
     * @ORM\Column(name="parent_prod_id", type="integer")
     */
    private $parentProdId;

    /**
     * @var int
     *
     * @ORM\Column(name="sub_prod_id", type="integer")
     */
    private $subProdId;

    /**
     * @var int
     *
     * @ORM\Column(name="seq_order", type="integer")
     */
    private $seqOrder;


    /**
     * Get seqId
     *
     * @return integer 
     */
    public function getSeqId()
    {
        return $this->seqId;
    }

    /**
     * Set parentProdId
     *
     * @param integer $parentProdId
     * @return sequence
     */
    public function setParentProdId($parentProdId)
    {
        $this->parentProdId = $parentProdId;

        return $this;
    }

    /**
     * Get parentProdId
     *
     * @return integer 
     */
    public function getParentProdId()
    {
        return $this->parentProdId;
    }

    /**
     * Set subProdId
     *
     * @param integer $subProdId
     * @return sequence
     */
    public function setSubProdId($subProdId)
    {
        $this->subProdId = $subProdId;

        return $this;
    }

    /**
     * Get subProdId
     *
     * @return integer 
     */
    public function getSubProdId()
    {
        return $this->subProdId;
    }

    /**
     * Set seqOrder
     *
     * @param integer $seqOrder
     * @return sequence
     */
    public function setSeqOrder($seqOrder)
    {
        $this->seqOrder = $seqOrder;

        return $this;
    }

    /**
     * Get seqOrder
     *
     * @return integer 
     */
    public function getSeqOrder()
    {
        return $this->seqOrder;
    }
}
