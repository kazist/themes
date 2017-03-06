<?php

namespace Notification\Newsletters\Automated\Code\Tables;

use Doctrine\ORM\Mapping as ORM;

/**
 * Automated
 *
 * @ORM\Table(name="notification_newsletters_automated", indexes={@ORM\Index(name="subset_id_index", columns={"subset_id"}), @ORM\Index(name="frequency_id_index", columns={"frequency_id"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Automated extends \Kazist\Table\BaseTable
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
     * @var integer
     *
     * @ORM\Column(name="subset_id", type="integer", length=11, nullable=false)
     */
    protected $subset_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="frequency_id", type="integer", length=11, nullable=false)
     */
    protected $frequency_id;

    /**
     * @var string
     *
     * @ORM\Column(name="unique_name", type="string", length=255, nullable=false)
     */
    protected $unique_name;

    /**
     * @var string
     *
     * @ORM\Column(name="table_name", type="string", length=255, nullable=false)
     */
    protected $table_name;

    /**
     * @var integer
     *
     * @ORM\Column(name="email_limit", type="integer", length=11, nullable=false)
     */
    protected $email_limit;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=255, nullable=false)
     */
    protected $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text", nullable=true)
     */
    protected $body;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="send_date", type="datetime", nullable=true)
     */
    protected $send_date;

    /**
     * @var string
     *
     * @ORM\Column(name="parameter_name", type="string", length=255, nullable=true)
     */
    protected $parameter_name;

    /**
     * @var string
     *
     * @ORM\Column(name="category_field", type="string", length=255, nullable=true)
     */
    protected $category_field;

    /**
     * @var string
     *
     * @ORM\Column(name="category_table", type="string", length=255, nullable=true)
     */
    protected $category_table;

    /**
     * @var string
     *
     * @ORM\Column(name="category_table_mainfield", type="string", length=255, nullable=true)
     */
    protected $category_table_mainfield;

    /**
     * @var string
     *
     * @ORM\Column(name="extension_path", type="string", length=255, nullable=true)
     */
    protected $extension_path;

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
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set subset_id
     *
     * @param integer $subsetId
     * @return Automated
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
     * Set frequency_id
     *
     * @param integer $frequencyId
     * @return Automated
     */
    public function setFrequencyId($frequencyId)
    {
        $this->frequency_id = $frequencyId;

        return $this;
    }

    /**
     * Get frequency_id
     *
     * @return integer 
     */
    public function getFrequencyId()
    {
        return $this->frequency_id;
    }

    /**
     * Set unique_name
     *
     * @param string $uniqueName
     * @return Automated
     */
    public function setUniqueName($uniqueName)
    {
        $this->unique_name = $uniqueName;

        return $this;
    }

    /**
     * Get unique_name
     *
     * @return string 
     */
    public function getUniqueName()
    {
        return $this->unique_name;
    }

    /**
     * Set table_name
     *
     * @param string $tableName
     * @return Automated
     */
    public function setTableName($tableName)
    {
        $this->table_name = $tableName;

        return $this;
    }

    /**
     * Get table_name
     *
     * @return string 
     */
    public function getTableName()
    {
        return $this->table_name;
    }

    /**
     * Set email_limit
     *
     * @param integer $emailLimit
     * @return Automated
     */
    public function setEmailLimit($emailLimit)
    {
        $this->email_limit = $emailLimit;

        return $this;
    }

    /**
     * Get email_limit
     *
     * @return integer 
     */
    public function getEmailLimit()
    {
        return $this->email_limit;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return Automated
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set body
     *
     * @param string $body
     * @return Automated
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set send_date
     *
     * @param \DateTime $sendDate
     * @return Automated
     */
    public function setSendDate($sendDate)
    {
        $this->send_date = $sendDate;

        return $this;
    }

    /**
     * Get send_date
     *
     * @return \DateTime 
     */
    public function getSendDate()
    {
        return $this->send_date;
    }

    /**
     * Set parameter_name
     *
     * @param string $parameterName
     * @return Automated
     */
    public function setParameterName($parameterName)
    {
        $this->parameter_name = $parameterName;

        return $this;
    }

    /**
     * Get parameter_name
     *
     * @return string 
     */
    public function getParameterName()
    {
        return $this->parameter_name;
    }

    /**
     * Set category_field
     *
     * @param string $categoryField
     * @return Automated
     */
    public function setCategoryField($categoryField)
    {
        $this->category_field = $categoryField;

        return $this;
    }

    /**
     * Get category_field
     *
     * @return string 
     */
    public function getCategoryField()
    {
        return $this->category_field;
    }

    /**
     * Set category_table
     *
     * @param string $categoryTable
     * @return Automated
     */
    public function setCategoryTable($categoryTable)
    {
        $this->category_table = $categoryTable;

        return $this;
    }

    /**
     * Get category_table
     *
     * @return string 
     */
    public function getCategoryTable()
    {
        return $this->category_table;
    }

    /**
     * Set category_table_mainfield
     *
     * @param string $categoryTableMainfield
     * @return Automated
     */
    public function setCategoryTableMainfield($categoryTableMainfield)
    {
        $this->category_table_mainfield = $categoryTableMainfield;

        return $this;
    }

    /**
     * Get category_table_mainfield
     *
     * @return string 
     */
    public function getCategoryTableMainfield()
    {
        return $this->category_table_mainfield;
    }

    /**
     * Set extension_path
     *
     * @param string $extensionPath
     * @return Automated
     */
    public function setExtensionPath($extensionPath)
    {
        $this->extension_path = $extensionPath;

        return $this;
    }

    /**
     * Get extension_path
     *
     * @return string 
     */
    public function getExtensionPath()
    {
        return $this->extension_path;
    }

    /**
     * Set published
     *
     * @param integer $published
     * @return Automated
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
