<?php

namespace Notification\Subscribers\Harvesters\Code\Tables;

use Doctrine\ORM\Mapping as ORM;

/**
 * Harvesters
 *
 * @ORM\Table(name="notification_subscribers_harvesters", indexes={@ORM\Index(name="subset_id_index", columns={"subset_id"}), @ORM\Index(name="created_by_index", columns={"created_by"}), @ORM\Index(name="modified_by_index", columns={"modified_by"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Harvesters extends \Kazist\Table\BaseTable {

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
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    protected $title;

    /**
     * @var string
     *
     * @ORM\Column(name="email_field", type="string", length=255, nullable=true)
     */
    protected $email_field;

    /**
     * @var string
     *
     * @ORM\Column(name="user_field", type="string", length=255, nullable=true)
     */
    protected $user_field;

    /**
     * @var string
     *
     * @ORM\Column(name="extension_path", type="string", length=255)
     */
    protected $extension_path;

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
     * @return Harvesters
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
     * Set title
     *
     * @param string $title
     * @return Harvesters
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
     * Set email_field
     *
     * @param string $emailField
     * @return Harvesters
     */
    public function setEmailField($emailField) {
        $this->email_field = $emailField;

        return $this;
    }

    /**
     * Get email_field
     *
     * @return string 
     */
    public function getEmailField() {
        return $this->email_field;
    }

    /**
     * Set user_field
     *
     * @param string $userField
     * @return Harvesters
     */
    public function setUserField($userField) {
        $this->user_field = $userField;

        return $this;
    }

    /**
     * Get user_field
     *
     * @return string 
     */
    public function getUserField() {
        return $this->user_field;
    }

    /**
     * Set extension_path
     *
     * @param string $extensionPath
     * @return Harvesters
     */
    public function setExtensionPath($extensionPath) {
        $this->extension_path = $extensionPath;

        return $this;
    }

    /**
     * Get extension_path
     *
     * @return string 
     */
    public function getExtensionPath() {
        return $this->extension_path;
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
