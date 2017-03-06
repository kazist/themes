<?php

namespace Notification\Comments\Code\Tables;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comments
 *
 * @ORM\Table(name="notification_comments", indexes={@ORM\Index(name="subset_id_index", columns={"subset_id"}), @ORM\Index(name="parent_id_index", columns={"parent_id"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Comments extends \Kazist\Table\BaseTable {

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
     * @ORM\Column(name="parent_id", type="integer", length=11, nullable=true)
     */
    protected $parent_id;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    protected $comment;

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
     * Set subset_id
     *
     * @param integer $subsetId
     * @return Comments
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
     * Set record_id
     *
     * @param integer $recordId
     * @return Comments
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
     * Set parent_id
     *
     * @param integer $parentId
     * @return Comments
     */
    public function setParentId($parentId) {
        $this->parent_id = $parentId;

        return $this;
    }

    /**
     * Get parent_id
     *
     * @return integer 
     */
    public function getParentId() {
        return $this->parent_id;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Comments
     */
    public function setComment($comment) {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment() {
        return $this->comment;
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
