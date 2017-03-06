<?php

namespace Notification\Emails\Code\Tables;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emails
 *
 * @ORM\Table(name="notification_emails")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Emails extends \Kazist\Table\BaseTable
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
     * @ORM\Column(name="subject", type="text", nullable=false)
     */
    protected $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text", nullable=false)
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
     * @ORM\Column(name="recipients", type="text", nullable=false)
     */
    protected $recipients;

    /**
     * @var string
     *
     * @ORM\Column(name="parameters", type="text", nullable=true)
     */
    protected $parameters;

    /**
     * @var string
     *
     * @ORM\Column(name="attachments", type="text", nullable=true)
     */
    protected $attachments;

    /**
     * @var integer
     *
     * @ORM\Column(name="priority", type="integer", length=11, nullable=true)
     */
    protected $priority;

    /**
     * @var string
     *
     * @ORM\Column(name="email_type", type="string", length=255, nullable=false)
     */
    protected $email_type;

    /**
     * @var integer
     *
     * @ORM\Column(name="sent_counter", type="integer", length=11, nullable=true)
     */
    protected $sent_counter;

    /**
     * @var integer
     *
     * @ORM\Column(name="completed", type="integer", length=11, nullable=true)
     */
    protected $completed;

    /**
     * @var string
     *
     * @ORM\Column(name="params", type="text", nullable=true)
     */
    protected $params;

    /**
     * @var string
     *
     * @ORM\Column(name="uniq_name", type="string", length=255, nullable=true)
     */
    protected $uniq_name;

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
     * Set subject
     *
     * @param string $subject
     * @return Emails
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
     * @return Emails
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
     * @return Emails
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
     * Set recipients
     *
     * @param string $recipients
     * @return Emails
     */
    public function setRecipients($recipients)
    {
        $this->recipients = $recipients;

        return $this;
    }

    /**
     * Get recipients
     *
     * @return string 
     */
    public function getRecipients()
    {
        return $this->recipients;
    }

    /**
     * Set parameters
     *
     * @param string $parameters
     * @return Emails
     */
    public function setParameters($parameters)
    {
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * Get parameters
     *
     * @return string 
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Set attachments
     *
     * @param string $attachments
     * @return Emails
     */
    public function setAttachments($attachments)
    {
        $this->attachments = $attachments;

        return $this;
    }

    /**
     * Get attachments
     *
     * @return string 
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * Set priority
     *
     * @param integer $priority
     * @return Emails
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return integer 
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set email_type
     *
     * @param string $emailType
     * @return Emails
     */
    public function setEmailType($emailType)
    {
        $this->email_type = $emailType;

        return $this;
    }

    /**
     * Get email_type
     *
     * @return string 
     */
    public function getEmailType()
    {
        return $this->email_type;
    }

    /**
     * Set sent_counter
     *
     * @param integer $sentCounter
     * @return Emails
     */
    public function setSentCounter($sentCounter)
    {
        $this->sent_counter = $sentCounter;

        return $this;
    }

    /**
     * Get sent_counter
     *
     * @return integer 
     */
    public function getSentCounter()
    {
        return $this->sent_counter;
    }

    /**
     * Set completed
     *
     * @param integer $completed
     * @return Emails
     */
    public function setCompleted($completed)
    {
        $this->completed = $completed;

        return $this;
    }

    /**
     * Get completed
     *
     * @return integer 
     */
    public function getCompleted()
    {
        return $this->completed;
    }

    /**
     * Set params
     *
     * @param string $params
     * @return Emails
     */
    public function setParams($params)
    {
        $this->params = $params;

        return $this;
    }

    /**
     * Get params
     *
     * @return string 
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Set uniq_name
     *
     * @param string $uniqName
     * @return Emails
     */
    public function setUniqName($uniqName)
    {
        $this->uniq_name = $uniqName;

        return $this;
    }

    /**
     * Get uniq_name
     *
     * @return string 
     */
    public function getUniqName()
    {
        return $this->uniq_name;
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
