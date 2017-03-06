<?php

namespace Notification\Newsletters\Code\Tables;

use Doctrine\ORM\Mapping as ORM;

/**
 * Newsletters
 *
 * @ORM\Table(name="notification_newsletters", indexes={@ORM\Index(name="template_id_index", columns={"template_id"}), @ORM\Index(name="group_id_index", columns={"group_id"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Newsletters extends \Kazist\Table\BaseTable
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
     * @ORM\Column(name="subject", type="string", length=255, nullable=false)
     */
    protected $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text", nullable=false)
     */
    protected $body;

    /**
     * @var integer
     *
     * @ORM\Column(name="template_id", type="integer", length=11, nullable=true)
     */
    protected $template_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="group_id", type="integer", length=11, nullable=true)
     */
    protected $group_id;

    /**
     * @var string
     *
     * @ORM\Column(name="how_to_repeat", type="string", length=255, nullable=true)
     */
    protected $how_to_repeat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="send_date", type="datetime", nullable=true)
     */
    protected $send_date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="datetime", nullable=true)
     */
    protected $start_date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="datetime", nullable=true)
     */
    protected $end_date;

    /**
     * @var integer
     *
     * @ORM\Column(name="forever", type="integer", length=11, nullable=true)
     */
    protected $forever;

    /**
     * @var integer
     *
     * @ORM\Column(name="repeated", type="integer", length=11, nullable=true)
     */
    protected $repeated;

    /**
     * @var integer
     *
     * @ORM\Column(name="repeated_every", type="integer", length=11, nullable=true)
     */
    protected $repeated_every;

    /**
     * @var string
     *
     * @ORM\Column(name="repeated_on", type="string", length=255, nullable=true)
     */
    protected $repeated_on;

    /**
     * @var string
     *
     * @ORM\Column(name="repeated_minute", type="string", length=255, nullable=true)
     */
    protected $repeated_minute;

    /**
     * @var string
     *
     * @ORM\Column(name="repeated_hour", type="string", length=255, nullable=true)
     */
    protected $repeated_hour;

    /**
     * @var string
     *
     * @ORM\Column(name="repeated_day_of_month", type="string", length=255, nullable=true)
     */
    protected $repeated_day_of_month;

    /**
     * @var string
     *
     * @ORM\Column(name="repeated_month", type="string", length=255, nullable=true)
     */
    protected $repeated_month;

    /**
     * @var string
     *
     * @ORM\Column(name="repeated_day_of_week", type="string", length=255, nullable=true)
     */
    protected $repeated_day_of_week;

    /**
     * @var string
     *
     * @ORM\Column(name="repeated_year", type="string", length=255, nullable=true)
     */
    protected $repeated_year;

    /**
     * @var integer
     *
     * @ORM\Column(name="duration", type="integer", length=11, nullable=true)
     */
    protected $duration;

    /**
     * @var string
     *
     * @ORM\Column(name="duration_type", type="string", length=255, nullable=true)
     */
    protected $duration_type;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_sent", type="integer", length=11, nullable=true)
     */
    protected $is_sent;

    /**
     * @var integer
     *
     * @ORM\Column(name="published", type="integer", length=11, nullable=false)
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
     * Set subject
     *
     * @param string $subject
     * @return Newsletters
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
     * @return Newsletters
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
     * Set template_id
     *
     * @param integer $templateId
     * @return Newsletters
     */
    public function setTemplateId($templateId)
    {
        $this->template_id = $templateId;

        return $this;
    }

    /**
     * Get template_id
     *
     * @return integer 
     */
    public function getTemplateId()
    {
        return $this->template_id;
    }

    /**
     * Set group_id
     *
     * @param integer $groupId
     * @return Newsletters
     */
    public function setGroupId($groupId)
    {
        $this->group_id = $groupId;

        return $this;
    }

    /**
     * Get group_id
     *
     * @return integer 
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * Set how_to_repeat
     *
     * @param string $howToRepeat
     * @return Newsletters
     */
    public function setHowToRepeat($howToRepeat)
    {
        $this->how_to_repeat = $howToRepeat;

        return $this;
    }

    /**
     * Get how_to_repeat
     *
     * @return string 
     */
    public function getHowToRepeat()
    {
        return $this->how_to_repeat;
    }

    /**
     * Set send_date
     *
     * @param \DateTime $sendDate
     * @return Newsletters
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
     * Set start_date
     *
     * @param \DateTime $startDate
     * @return Newsletters
     */
    public function setStartDate($startDate)
    {
        $this->start_date = $startDate;

        return $this;
    }

    /**
     * Get start_date
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * Set end_date
     *
     * @param \DateTime $endDate
     * @return Newsletters
     */
    public function setEndDate($endDate)
    {
        $this->end_date = $endDate;

        return $this;
    }

    /**
     * Get end_date
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * Set forever
     *
     * @param integer $forever
     * @return Newsletters
     */
    public function setForever($forever)
    {
        $this->forever = $forever;

        return $this;
    }

    /**
     * Get forever
     *
     * @return integer 
     */
    public function getForever()
    {
        return $this->forever;
    }

    /**
     * Set repeated
     *
     * @param integer $repeated
     * @return Newsletters
     */
    public function setRepeated($repeated)
    {
        $this->repeated = $repeated;

        return $this;
    }

    /**
     * Get repeated
     *
     * @return integer 
     */
    public function getRepeated()
    {
        return $this->repeated;
    }

    /**
     * Set repeated_every
     *
     * @param integer $repeatedEvery
     * @return Newsletters
     */
    public function setRepeatedEvery($repeatedEvery)
    {
        $this->repeated_every = $repeatedEvery;

        return $this;
    }

    /**
     * Get repeated_every
     *
     * @return integer 
     */
    public function getRepeatedEvery()
    {
        return $this->repeated_every;
    }

    /**
     * Set repeated_on
     *
     * @param string $repeatedOn
     * @return Newsletters
     */
    public function setRepeatedOn($repeatedOn)
    {
        $this->repeated_on = $repeatedOn;

        return $this;
    }

    /**
     * Get repeated_on
     *
     * @return string 
     */
    public function getRepeatedOn()
    {
        return $this->repeated_on;
    }

    /**
     * Set repeated_minute
     *
     * @param string $repeatedMinute
     * @return Newsletters
     */
    public function setRepeatedMinute($repeatedMinute)
    {
        $this->repeated_minute = $repeatedMinute;

        return $this;
    }

    /**
     * Get repeated_minute
     *
     * @return string 
     */
    public function getRepeatedMinute()
    {
        return $this->repeated_minute;
    }

    /**
     * Set repeated_hour
     *
     * @param string $repeatedHour
     * @return Newsletters
     */
    public function setRepeatedHour($repeatedHour)
    {
        $this->repeated_hour = $repeatedHour;

        return $this;
    }

    /**
     * Get repeated_hour
     *
     * @return string 
     */
    public function getRepeatedHour()
    {
        return $this->repeated_hour;
    }

    /**
     * Set repeated_day_of_month
     *
     * @param string $repeatedDayOfMonth
     * @return Newsletters
     */
    public function setRepeatedDayOfMonth($repeatedDayOfMonth)
    {
        $this->repeated_day_of_month = $repeatedDayOfMonth;

        return $this;
    }

    /**
     * Get repeated_day_of_month
     *
     * @return string 
     */
    public function getRepeatedDayOfMonth()
    {
        return $this->repeated_day_of_month;
    }

    /**
     * Set repeated_month
     *
     * @param string $repeatedMonth
     * @return Newsletters
     */
    public function setRepeatedMonth($repeatedMonth)
    {
        $this->repeated_month = $repeatedMonth;

        return $this;
    }

    /**
     * Get repeated_month
     *
     * @return string 
     */
    public function getRepeatedMonth()
    {
        return $this->repeated_month;
    }

    /**
     * Set repeated_day_of_week
     *
     * @param string $repeatedDayOfWeek
     * @return Newsletters
     */
    public function setRepeatedDayOfWeek($repeatedDayOfWeek)
    {
        $this->repeated_day_of_week = $repeatedDayOfWeek;

        return $this;
    }

    /**
     * Get repeated_day_of_week
     *
     * @return string 
     */
    public function getRepeatedDayOfWeek()
    {
        return $this->repeated_day_of_week;
    }

    /**
     * Set repeated_year
     *
     * @param string $repeatedYear
     * @return Newsletters
     */
    public function setRepeatedYear($repeatedYear)
    {
        $this->repeated_year = $repeatedYear;

        return $this;
    }

    /**
     * Get repeated_year
     *
     * @return string 
     */
    public function getRepeatedYear()
    {
        return $this->repeated_year;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     * @return Newsletters
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer 
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set duration_type
     *
     * @param string $durationType
     * @return Newsletters
     */
    public function setDurationType($durationType)
    {
        $this->duration_type = $durationType;

        return $this;
    }

    /**
     * Get duration_type
     *
     * @return string 
     */
    public function getDurationType()
    {
        return $this->duration_type;
    }

    /**
     * Set is_sent
     *
     * @param integer $isSent
     * @return Newsletters
     */
    public function setIsSent($isSent)
    {
        $this->is_sent = $isSent;

        return $this;
    }

    /**
     * Get is_sent
     *
     * @return integer 
     */
    public function getIsSent()
    {
        return $this->is_sent;
    }

    /**
     * Set published
     *
     * @param integer $published
     * @return Newsletters
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
