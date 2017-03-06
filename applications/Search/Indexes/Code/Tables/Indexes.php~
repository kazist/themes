<?php

namespace Search\Indexes\Code\Tables;

use Doctrine\ORM\Mapping as ORM;

/**
 * Indexes
 *
 * @ORM\Table(name="search_indexes", indexes={@ORM\Index(name="subset_id_index", columns={"subset_id"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Indexes extends \Kazist\Table\BaseTable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    protected $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    protected $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="subset_id", type="integer", length=11, nullable=false)
     */
    protected $subset_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="record_id", type="integer", length=11, nullable=false)
     */
    protected $record_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="image", type="integer", length=11, nullable=true)
     */
    protected $image;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_index", type="date", nullable=true)
     */
    protected $date_index;

    /**
     * @var integer
     *
     * @ORM\Column(name="published", type="integer", length=11, nullable=true)
     */
    protected $published;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="publish_up", type="date", nullable=true)
     */
    protected $publish_up;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="publish_down", type="date", nullable=true)
     */
    protected $publish_down;

    /**
     * @var integer
     *
     * @ORM\Column(name="sale_price", type="integer", length=11, nullable=true)
     */
    protected $sale_price;

    /**
     * @var integer
     *
     * @ORM\Column(name="discounted_price", type="integer", length=11, nullable=true)
     */
    protected $discounted_price;

    /**
     * @var integer
     *
     * @ORM\Column(name="created_by", type="integer", length=11, nullable=true)
     */
    protected $created_by;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=true)
     */
    protected $date_created;

    /**
     * @var integer
     *
     * @ORM\Column(name="modified_by", type="integer", length=11, nullable=true)
     */
    protected $modified_by;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=true)
     */
    protected $date_modified;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Indexes
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Indexes
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
     * Set subset_id
     *
     * @param integer $subsetId
     * @return Indexes
     */
    public function setSubsetId($subsetId)
    {
        $this->subset_id = $subsetId;

        return $this;
    }

    /**
     * Get subset_id
     *
     * @return integer 
     */
    public function getSubsetId()
    {
        return $this->subset_id;
    }

    /**
     * Set record_id
     *
     * @param integer $recordId
     * @return Indexes
     */
    public function setRecordId($recordId)
    {
        $this->record_id = $recordId;

        return $this;
    }

    /**
     * Get record_id
     *
     * @return integer 
     */
    public function getRecordId()
    {
        return $this->record_id;
    }

    /**
     * Set image
     *
     * @param integer $image
     * @return Indexes
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return integer 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set date_index
     *
     * @param \DateTime $dateIndex
     * @return Indexes
     */
    public function setDateIndex($dateIndex)
    {
        $this->date_index = $dateIndex;

        return $this;
    }

    /**
     * Get date_index
     *
     * @return \DateTime 
     */
    public function getDateIndex()
    {
        return $this->date_index;
    }

    /**
     * Set published
     *
     * @param integer $published
     * @return Indexes
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return integer 
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set publish_up
     *
     * @param \DateTime $publishUp
     * @return Indexes
     */
    public function setPublishUp($publishUp)
    {
        $this->publish_up = $publishUp;

        return $this;
    }

    /**
     * Get publish_up
     *
     * @return \DateTime 
     */
    public function getPublishUp()
    {
        return $this->publish_up;
    }

    /**
     * Set publish_down
     *
     * @param \DateTime $publishDown
     * @return Indexes
     */
    public function setPublishDown($publishDown)
    {
        $this->publish_down = $publishDown;

        return $this;
    }

    /**
     * Get publish_down
     *
     * @return \DateTime 
     */
    public function getPublishDown()
    {
        return $this->publish_down;
    }

    /**
     * Set sale_price
     *
     * @param integer $salePrice
     * @return Indexes
     */
    public function setSalePrice($salePrice)
    {
        $this->sale_price = $salePrice;

        return $this;
    }

    /**
     * Get sale_price
     *
     * @return integer 
     */
    public function getSalePrice()
    {
        return $this->sale_price;
    }

    /**
     * Set discounted_price
     *
     * @param integer $discountedPrice
     * @return Indexes
     */
    public function setDiscountedPrice($discountedPrice)
    {
        $this->discounted_price = $discountedPrice;

        return $this;
    }

    /**
     * Get discounted_price
     *
     * @return integer 
     */
    public function getDiscountedPrice()
    {
        return $this->discounted_price;
    }

    /**
     * Get created_by
     *
     * @return integer 
     */
    public function getCreatedBy()
    {
        return $this->created_by;
    }

    /**
     * Get date_created
     *
     * @return \DateTime 
     */
    public function getDateCreated()
    {
        return $this->date_created;
    }

    /**
     * Get modified_by
     *
     * @return integer 
     */
    public function getModifiedBy()
    {
        return $this->modified_by;
    }

    /**
     * Get date_modified
     *
     * @return \DateTime 
     */
    public function getDateModified()
    {
        return $this->date_modified;
    }
    /**
     * @ORM\PreUpdate
     */
    public function onPreUpdate()
    {
        // Add your code here
    }
}
