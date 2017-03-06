<?php

namespace Notification\Gateways\Code\Tables;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gateways
 *
 * @ORM\Table(name="notification_gateways")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Gateways extends \Kazist\Table\BaseTable
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
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    protected $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="smtp_auth", type="integer", length=11, nullable=true)
     */
    protected $smtp_auth;

    /**
     * @var string
     *
     * @ORM\Column(name="smtp_secure", type="string", length=255, nullable=true)
     */
    protected $smtp_secure;

    /**
     * @var string
     *
     * @ORM\Column(name="smtp_host", type="string", length=255, nullable=true)
     */
    protected $smtp_host;

    /**
     * @var string
     *
     * @ORM\Column(name="smtp_username", type="string", length=255, nullable=true)
     */
    protected $smtp_username;

    /**
     * @var string
     *
     * @ORM\Column(name="smtp_password", type="string", length=255, nullable=true)
     */
    protected $smtp_password;

    /**
     * @var string
     *
     * @ORM\Column(name="smtp_port", type="string", length=255, nullable=true)
     */
    protected $smtp_port;

    /**
     * @var string
     *
     * @ORM\Column(name="from_email", type="string", length=255, nullable=true)
     */
    protected $from_email;

    /**
     * @var string
     *
     * @ORM\Column(name="from_name", type="string", length=255, nullable=true)
     */
    protected $from_name;

    /**
     * @var string
     *
     * @ORM\Column(name="auto_reply_to", type="string", length=255, nullable=true)
     */
    protected $auto_reply_to;

    /**
     * @var integer
     *
     * @ORM\Column(name="mail_debuger", type="integer", length=11, nullable=true)
     */
    protected $mail_debuger;

    /**
     * @var integer
     *
     * @ORM\Column(name="debug_exit", type="integer", length=11, nullable=true)
     */
    protected $debug_exit;

    /**
     * @var integer
     *
     * @ORM\Column(name="use_template", type="integer", length=11, nullable=true)
     */
    protected $use_template;

    /**
     * @var integer
     *
     * @ORM\Column(name="sql_limit", type="integer", length=11, nullable=true)
     */
    protected $sql_limit;

    /**
     * @var integer
     *
     * @ORM\Column(name="anti_flood", type="integer", length=11, nullable=true)
     */
    protected $anti_flood;

    /**
     * @var integer
     *
     * @ORM\Column(name="throttler", type="integer", length=11, nullable=true)
     */
    protected $throttler;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_html", type="integer", length=11, nullable=true)
     */
    protected $is_html;

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
     * Set title
     *
     * @param string $title
     * @return Gateways
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
     * Set type
     *
     * @param string $type
     * @return Gateways
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set smtp_auth
     *
     * @param integer $smtpAuth
     * @return Gateways
     */
    public function setSmtpAuth($smtpAuth)
    {
        $this->smtp_auth = $smtpAuth;

        return $this;
    }

    /**
     * Get smtp_auth
     *
     * @return integer 
     */
    public function getSmtpAuth()
    {
        return $this->smtp_auth;
    }

    /**
     * Set smtp_secure
     *
     * @param string $smtpSecure
     * @return Gateways
     */
    public function setSmtpSecure($smtpSecure)
    {
        $this->smtp_secure = $smtpSecure;

        return $this;
    }

    /**
     * Get smtp_secure
     *
     * @return string 
     */
    public function getSmtpSecure()
    {
        return $this->smtp_secure;
    }

    /**
     * Set smtp_host
     *
     * @param string $smtpHost
     * @return Gateways
     */
    public function setSmtpHost($smtpHost)
    {
        $this->smtp_host = $smtpHost;

        return $this;
    }

    /**
     * Get smtp_host
     *
     * @return string 
     */
    public function getSmtpHost()
    {
        return $this->smtp_host;
    }

    /**
     * Set smtp_username
     *
     * @param string $smtpUsername
     * @return Gateways
     */
    public function setSmtpUsername($smtpUsername)
    {
        $this->smtp_username = $smtpUsername;

        return $this;
    }

    /**
     * Get smtp_username
     *
     * @return string 
     */
    public function getSmtpUsername()
    {
        return $this->smtp_username;
    }

    /**
     * Set smtp_password
     *
     * @param string $smtpPassword
     * @return Gateways
     */
    public function setSmtpPassword($smtpPassword)
    {
        $this->smtp_password = $smtpPassword;

        return $this;
    }

    /**
     * Get smtp_password
     *
     * @return string 
     */
    public function getSmtpPassword()
    {
        return $this->smtp_password;
    }

    /**
     * Set smtp_port
     *
     * @param string $smtpPort
     * @return Gateways
     */
    public function setSmtpPort($smtpPort)
    {
        $this->smtp_port = $smtpPort;

        return $this;
    }

    /**
     * Get smtp_port
     *
     * @return string 
     */
    public function getSmtpPort()
    {
        return $this->smtp_port;
    }

    /**
     * Set from_email
     *
     * @param string $fromEmail
     * @return Gateways
     */
    public function setFromEmail($fromEmail)
    {
        $this->from_email = $fromEmail;

        return $this;
    }

    /**
     * Get from_email
     *
     * @return string 
     */
    public function getFromEmail()
    {
        return $this->from_email;
    }

    /**
     * Set from_name
     *
     * @param string $fromName
     * @return Gateways
     */
    public function setFromName($fromName)
    {
        $this->from_name = $fromName;

        return $this;
    }

    /**
     * Get from_name
     *
     * @return string 
     */
    public function getFromName()
    {
        return $this->from_name;
    }

    /**
     * Set auto_reply_to
     *
     * @param string $autoReplyTo
     * @return Gateways
     */
    public function setAutoReplyTo($autoReplyTo)
    {
        $this->auto_reply_to = $autoReplyTo;

        return $this;
    }

    /**
     * Get auto_reply_to
     *
     * @return string 
     */
    public function getAutoReplyTo()
    {
        return $this->auto_reply_to;
    }

    /**
     * Set mail_debuger
     *
     * @param integer $mailDebuger
     * @return Gateways
     */
    public function setMailDebuger($mailDebuger)
    {
        $this->mail_debuger = $mailDebuger;

        return $this;
    }

    /**
     * Get mail_debuger
     *
     * @return integer 
     */
    public function getMailDebuger()
    {
        return $this->mail_debuger;
    }

    /**
     * Set debug_exit
     *
     * @param integer $debugExit
     * @return Gateways
     */
    public function setDebugExit($debugExit)
    {
        $this->debug_exit = $debugExit;

        return $this;
    }

    /**
     * Get debug_exit
     *
     * @return integer 
     */
    public function getDebugExit()
    {
        return $this->debug_exit;
    }

    /**
     * Set use_template
     *
     * @param integer $useTemplate
     * @return Gateways
     */
    public function setUseTemplate($useTemplate)
    {
        $this->use_template = $useTemplate;

        return $this;
    }

    /**
     * Get use_template
     *
     * @return integer 
     */
    public function getUseTemplate()
    {
        return $this->use_template;
    }

    /**
     * Set sql_limit
     *
     * @param integer $sqlLimit
     * @return Gateways
     */
    public function setSqlLimit($sqlLimit)
    {
        $this->sql_limit = $sqlLimit;

        return $this;
    }

    /**
     * Get sql_limit
     *
     * @return integer 
     */
    public function getSqlLimit()
    {
        return $this->sql_limit;
    }

    /**
     * Set anti_flood
     *
     * @param integer $antiFlood
     * @return Gateways
     */
    public function setAntiFlood($antiFlood)
    {
        $this->anti_flood = $antiFlood;

        return $this;
    }

    /**
     * Get anti_flood
     *
     * @return integer 
     */
    public function getAntiFlood()
    {
        return $this->anti_flood;
    }

    /**
     * Set throttler
     *
     * @param integer $throttler
     * @return Gateways
     */
    public function setThrottler($throttler)
    {
        $this->throttler = $throttler;

        return $this;
    }

    /**
     * Get throttler
     *
     * @return integer 
     */
    public function getThrottler()
    {
        return $this->throttler;
    }

    /**
     * Set is_html
     *
     * @param integer $isHtml
     * @return Gateways
     */
    public function setIsHtml($isHtml)
    {
        $this->is_html = $isHtml;

        return $this;
    }

    /**
     * Get is_html
     *
     * @return integer 
     */
    public function getIsHtml()
    {
        return $this->is_html;
    }

    /**
     * Set published
     *
     * @param integer $published
     * @return Gateways
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
