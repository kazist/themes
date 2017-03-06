<?php

namespace Search\Subsets\Code\Tables;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subsets
 *
 * @ORM\Table(name="search_subsets", indexes={@ORM\Index(name="subset_id_index", columns={"subset_id"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Subsets extends \Kazist\Table\BaseTable {

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
     * @ORM\Column(name="alias", type="string", length=255, nullable=false)
     */
    protected $alias;

    /**
     * @var string
     *
     * @ORM\Column(name="table_name", type="string", length=255, nullable=false)
     */
    protected $table_name;

    /**
     * @var integer
     *
     * @ORM\Column(name="subset_id", type="integer", length=11, nullable=true)
     */
    protected $subset_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="record_id", type="integer", length=11, nullable=true)
     */
    protected $record_id;

    /**
     * @var string
     *
     * @ORM\Column(name="title_field", type="string", length=255, nullable=true)
     */
    protected $title_field;

    /**
     * @var string
     *
     * @ORM\Column(name="content_field", type="string", length=255, nullable=true)
     */
    protected $content_field;

    /**
     * @var string
     *
     * @ORM\Column(name="image_field", type="string", length=255, nullable=true)
     */
    protected $image_field;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_indexed", type="datetime", nullable=true)
     */
    protected $date_indexed;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_processed", type="integer", length=11, nullable=true)
     */
    protected $is_processed;

    /**
     * @var integer
     *
     * @ORM\Column(name="published", type="integer", length=11, nullable=true)
     */
    protected $published;

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
     * Set title
     *
     * @param string $title
     * @return Subsets
     */
    public function setTitle($title) {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set alias
     *
     * @param string $alias
     * @return Subsets
     */
    public function setAlias($alias) {
        $this->alias = $alias;

        return $this;
    }

    /**
     * Get alias
     *
     * @return string 
     */
    public function getAlias() {
        return $this->alias;
    }

    /**
     * Set table_name
     *
     * @param string $tableName
     * @return Subsets
     */
    public function setTableName($tableName) {
        $this->table_name = $tableName;

        return $this;
    }

    /**
     * Get table_name
     *
     * @return string 
     */
    public function getTableName() {
        return $this->table_name;
    }

    /**
     * Set subset_id
     *
     * @param integer $subsetId
     * @return Subsets
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
     * @return Subsets
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
     * Set title_field
     *
     * @param string $titleField
     * @return Subsets
     */
    public function setTitleField($titleField) {
        $this->title_field = $titleField;

        return $this;
    }

    /**
     * Get title_field
     *
     * @return string 
     */
    public function getTitleField() {
        return $this->title_field;
    }

    /**
     * Set content_field
     *
     * @param string $contentField
     * @return Subsets
     */
    public function setContentField($contentField) {
        $this->content_field = $contentField;

        return $this;
    }

    /**
     * Get content_field
     *
     * @return string 
     */
    public function getContentField() {
        return $this->content_field;
    }

    /**
     * Set image_field
     *
     * @param string $imageField
     * @return Subsets
     */
    public function setImageField($imageField) {
        $this->image_field = $imageField;

        return $this;
    }

    /**
     * Get image_field
     *
     * @return string 
     */
    public function getImageField() {
        return $this->image_field;
    }

    /**
     * Set date_indexed
     *
     * @param \DateTime $dateIndexed
     * @return Subsets
     */
    public function setDateIndexed($dateIndexed) {
        $this->date_indexed = $dateIndexed;

        return $this;
    }

    /**
     * Get date_indexed
     *
     * @return \DateTime 
     */
    public function getDateIndexed() {
        return $this->date_indexed;
    }

    /**
     * Set is_processed
     *
     * @param integer $isProcessed
     * @return Subsets
     */
    public function setIsProcessed($isProcessed) {
        $this->is_processed = $isProcessed;

        return $this;
    }

    /**
     * Get is_processed
     *
     * @return integer 
     */
    public function getIsProcessed() {
        return $this->is_processed;
    }

    /**
     * Set published
     *
     * @param integer $published
     * @return Subsets
     */
    public function setPublished($published) {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return integer 
     */
    public function getPublished() {
        return $this->published;
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
