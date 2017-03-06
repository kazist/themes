<?php

namespace Notification\Newsletters\Scheduled\Code\Tables;

use Doctrine\ORM\Mapping as ORM;

/**
 * Scheduled
 *
 * @ORM\Table(name="notification_newsletters_scheduled", indexes={@ORM\Index(name="subset_id_index", columns={"subset_id"}), @ORM\Index(name="extension_path_index", columns={"extension_path"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Scheduled extends \Kazist\Table\BaseTable
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
     * @ORM\Column(name="subset_id", type="integer", length=11, nullable=true)
     */
    protected $subset_id;

    /**
     * @var string
     *
     * @ORM\Column(name="unique_name", type="string", length=255, nullable=true)
     */
    protected $unique_name;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=255, nullable=false)
     */
    protected $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="string", length=255, nullable=false)
     */
    protected $body;

    /**
     * @var string
     *
     * @ORM\Column(name="user_field", type="string", length=255, nullable=true)
     */
    protected $user_field;

    /**
     * @var string
     *
     * @ORM\Column(name="date_field", type="string", length=255, nullable=true)
     */
    protected $date_field;

    /**
     * @var string
     *
     * @ORM\Column(name="email_field", type="string", length=255, nullable=true)
     */
    protected $email_field;

    /**
     * @var integer
     *
     * @ORM\Column(name="wait_period", type="integer", length=11, nullable=true)
     */
    protected $wait_period;

    /**
     * @var integer
     *
     * @ORM\Column(name="repeat_after", type="integer", length=11, nullable=true)
     */
    protected $repeat_after;

    /**
     * @var integer
     *
     * @ORM\Column(name="repeat_stop", type="integer", length=11, nullable=true)
     */
    protected $repeat_stop;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_repeated", type="integer", length=11, nullable=true)
     */
    protected $is_repeated;

    /**
     * @var integer
     *
     * @ORM\Column(name="published", type="integer", length=11, nullable=true)
     */
    protected $published;

    /**
     * @var string
     *
     * @ORM\Column(name="extension_path", type="string", length=255, nullable=true)
     */
    protected $extension_path;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="scheduled_newsletter_date", type="date", nullable=true)
     */
    protected $scheduled_newsletter_date;

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
     * @return Scheduled
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
     * Set unique_name
     *
     * @param string $uniqueName
     * @return Scheduled
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
     * Set subject
     *
     * @param string $subject
     * @return Scheduled
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
     * @return Scheduled
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
     * Set user_field
     *
     * @param string $userField
     * @return Scheduled
     */
    public function setUserField($userField)
    {
        $this->user_field = $userField;

        return $this;
    }

    /**
     * Get user_field
     *
     * @return string 
     */
    public function getUserField()
    {
        return $this->user_field;
    }

    /**
     * Set date_field
     *
     * @param string $dateField
     * @return Scheduled
     */
    public function setDateField($dateField)
    {
        $this->date_field = $dateField;

        return $this;
    }

    /**
     * Get date_field
     *
     * @return string 
     */
    public function getDateField()
    {
        return $this->date_field;
    }

    /**
     * Set email_field
     *
     * @param string $emailField
     * @return Scheduled
     */
    public function setEmailField($emailField)
    {
        $this->email_field = $emailField;

        return $this;
    }

    /**
     * Get email_field
     *
     * @return string 
     */
    public function getEmailField()
    {
        return $this->email_field;
    }

    /**
     * Set wait_period
     *
     * @param integer $waitPeriod
     * @return Scheduled
     */
    public function setWaitPeriod($waitPeriod)
    {
        $this->wait_period = $waitPeriod;

        return $this;
    }

    /**
     * Get wait_period
     *
     * @return integer 
     */
    public function getWaitPeriod()
    {
        return $this->wait_period;
    }

    /**
     * Set repeat_after
     *
     * @param integer $repeatAfter
     * @return Scheduled
     */
    public function setRepeatAfter($repeatAfter)
    {
        $this->repeat_after = $repeatAfter;

        return $this;
    }

    /**
     * Get repeat_after
     *
     * @return integer 
     */
    public function getRepeatAfter()
    {
        return $this->repeat_after;
    }

    /**
     * Set repeat_stop
     *
     * @param integer $repeatStop
     * @return Scheduled
     */
    public function setRepeatStop($repeatStop)
    {
        $this->repeat_stop = $repeatStop;

        return $this;
    }

    /**
     * Get repeat_stop
     *
     * @return integer 
     */
    public function getRepeatStop()
    {
        return $this->repeat_stop;
    }

    /**
     * Set is_repeated
     *
     * @param integer $isRepeated
     * @return Scheduled
     */
    public function setIsRepeated($isRepeated)
    {
        $this->is_repeated = $isRepeated;

        return $this;
    }

    /**
     * Get is_repeated
     *
     * @return integer 
     */
    public function getIsRepeated()
    {
        return $this->is_repeated;
    }

    /**
     * Set published
     *
     * @param integer $published
     * @return Scheduled
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
     * Set extension_path
     *
     * @param string $extensionPath
     * @return Scheduled
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
     * Set scheduled_newsletter_date
     *
     * @param \DateTime $scheduledNewsletterDate
     * @return Scheduled
     */
    public function setScheduledNewsletterDate($scheduledNewsletterDate)
    {
        $this->scheduled_newsletter_date = $scheduledNewsletterDate;

        return $this;
    }

    /**
     * Get scheduled_newsletter_date
     *
     * @return \DateTime 
     */
    public function getScheduledNewsletterDate()
    {
        return $this->scheduled_newsletter_date;
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
