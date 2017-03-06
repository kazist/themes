<?php

namespace Media\Usage\Code\Tables;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usage
 *
 * @ORM\Table(name="media_usage")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Usage extends \Kazist\Table\BaseTable {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="record_id", type="integer", length=11, nullable=true)
     */
    protected $record_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="media_id", type="integer", length=11, nullable=false)
     */
    protected $media_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="subset_id", type="integer", length=11, nullable=false)
     */
    protected $subset_id;

    /**
     * @var string
     *
     * @ORM\Column(name="field_name", type="string", length=255, nullable=true)
     */
    protected $field_name;

    /**
     * @var integer
     *
     * @ORM\Column(name="created_by", type="integer", length=11, nullable=false)
     */
    protected $created_by;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=false)
     */
    protected $date_created;

    /**
     * @var integer
     *
     * @ORM\Column(name="modified_by", type="integer", length=11, nullable=false)
     */
    protected $modified_by;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=false)
     */
    protected $date_modified;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set record_id
     *
     * @param integer $recordId
     * @return Usage
     */
    public function setRecordId($recordId) {
        $this->record_id = $recordId;

        return $this;
    }

    /**
     * Get record_id
     *
     * @return integer 
     */
    public function getRecordId() {
        return $this->record_id;
    }

    /**
     * Set media_id
     *
     * @param integer $mediaId
     * @return Usage
     */
    public function setMediaId($mediaId) {
        $this->media_id = $mediaId;

        return $this;
    }

    /**
     * Get media_id
     *
     * @return integer 
     */
    public function getMediaId() {
        return $this->media_id;
    }

    /**
     * Set subset_id
     *
     * @param integer $subsetId
     * @return Usage
     */
    public function setSubsetId($subsetId) {
        $this->subset_id = $subsetId;

        return $this;
    }

    /**
     * Get subset_id
     *
     * @return integer 
     */
    public function getSubsetId() {
        return $this->subset_id;
    }

    /**
     * Set field_name
     *
     * @param string $fieldName
     * @return Usage
     */
    public function setFieldName($fieldName) {
        $this->field_name = $fieldName;

        return $this;
    }

    /**
     * Get field_name
     *
     * @return string 
     */
    public function getFieldName() {
        return $this->field_name;
    }

    /**
     * Get created_by
     *
     * @return integer 
     */
    public function getCreatedBy() {
        return $this->created_by;
    }

    /**
     * Get date_created
     *
     * @return \DateTime 
     */
    public function getDateCreated() {
        return $this->date_created;
    }

    /**
     * Get modified_by
     *
     * @return integer 
     */
    public function getModifiedBy() {
        return $this->modified_by;
    }

    /**
     * Get date_modified
     *
     * @return \DateTime 
     */
    public function getDateModified() {
        return $this->date_modified;
    }

}
