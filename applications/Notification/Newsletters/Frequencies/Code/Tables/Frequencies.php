<?php

namespace Notification\Newsletters\Frequencies\Code\Tables;

use Doctrine\ORM\Mapping as ORM;

/**
 * Frequencies
 *
 * @ORM\Table(name="notification_newsletters_frequencies")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Frequencies extends \Kazist\Table\BaseTable {

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
     * @ORM\Column(name="how_to_repeat", type="string", length=255, nullable=true)
     */
    protected $how_to_repeat;

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
     * @return Frequencies
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
     * @return Frequencies
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
     * Set how_to_repeat
     *
     * @param string $howToRepeat
     * @return Frequencies
     */
    public function setHowToRepeat($howToRepeat) {
        $this->how_to_repeat = $howToRepeat;

        return $this;
    }

    /**
     * Get how_to_repeat
     *
     * @return string 
     */
    public function getHowToRepeat() {
        return $this->how_to_repeat;
    }

    /**
     * Set start_date
     *
     * @param \DateTime $startDate
     * @return Frequencies
     */
    public function setStartDate($startDate) {
        $this->start_date = $startDate;

        return $this;
    }

    /**
     * Get start_date
     *
     * @return \DateTime 
     */
    public function getStartDate() {
        return $this->start_date;
    }

    /**
     * Set end_date
     *
     * @param \DateTime $endDate
     * @return Frequencies
     */
    public function setEndDate($endDate) {
        $this->end_date = $endDate;

        return $this;
    }

    /**
     * Get end_date
     *
     * @return \DateTime 
     */
    public function getEndDate() {
        return $this->end_date;
    }

    /**
     * Set forever
     *
     * @param integer $forever
     * @return Frequencies
     */
    public function setForever($forever) {
        $this->forever = $forever;

        return $this;
    }

    /**
     * Get forever
     *
     * @return integer 
     */
    public function getForever() {
        return $this->forever;
    }

    /**
     * Set repeated
     *
     * @param integer $repeated
     * @return Frequencies
     */
    public function setRepeated($repeated) {
        $this->repeated = $repeated;

        return $this;
    }

    /**
     * Get repeated
     *
     * @return integer 
     */
    public function getRepeated() {
        return $this->repeated;
    }

    /**
     * Set repeated_every
     *
     * @param integer $repeatedEvery
     * @return Frequencies
     */
    public function setRepeatedEvery($repeatedEvery) {
        $this->repeated_every = $repeatedEvery;

        return $this;
    }

    /**
     * Get repeated_every
     *
     * @return integer 
     */
    public function getRepeatedEvery() {
        return $this->repeated_every;
    }

    /**
     * Set repeated_on
     *
     * @param string $repeatedOn
     * @return Frequencies
     */
    public function setRepeatedOn($repeatedOn) {
        $this->repeated_on = $repeatedOn;

        return $this;
    }

    /**
     * Get repeated_on
     *
     * @return string 
     */
    public function getRepeatedOn() {
        return $this->repeated_on;
    }

    /**
     * Set repeated_minute
     *
     * @param string $repeatedMinute
     * @return Frequencies
     */
    public function setRepeatedMinute($repeatedMinute) {
        $this->repeated_minute = $repeatedMinute;

        return $this;
    }

    /**
     * Get repeated_minute
     *
     * @return string 
     */
    public function getRepeatedMinute() {
        return $this->repeated_minute;
    }

    /**
     * Set repeated_hour
     *
     * @param string $repeatedHour
     * @return Frequencies
     */
    public function setRepeatedHour($repeatedHour) {
        $this->repeated_hour = $repeatedHour;

        return $this;
    }

    /**
     * Get repeated_hour
     *
     * @return string 
     */
    public function getRepeatedHour() {
        return $this->repeated_hour;
    }

    /**
     * Set repeated_day_of_month
     *
     * @param string $repeatedDayOfMonth
     * @return Frequencies
     */
    public function setRepeatedDayOfMonth($repeatedDayOfMonth) {
        $this->repeated_day_of_month = $repeatedDayOfMonth;

        return $this;
    }

    /**
     * Get repeated_day_of_month
     *
     * @return string 
     */
    public function getRepeatedDayOfMonth() {
        return $this->repeated_day_of_month;
    }

    /**
     * Set repeated_month
     *
     * @param string $repeatedMonth
     * @return Frequencies
     */
    public function setRepeatedMonth($repeatedMonth) {
        $this->repeated_month = $repeatedMonth;

        return $this;
    }

    /**
     * Get repeated_month
     *
     * @return string 
     */
    public function getRepeatedMonth() {
        return $this->repeated_month;
    }

    /**
     * Set repeated_day_of_week
     *
     * @param string $repeatedDayOfWeek
     * @return Frequencies
     */
    public function setRepeatedDayOfWeek($repeatedDayOfWeek) {
        $this->repeated_day_of_week = $repeatedDayOfWeek;

        return $this;
    }

    /**
     * Get repeated_day_of_week
     *
     * @return string 
     */
    public function getRepeatedDayOfWeek() {
        return $this->repeated_day_of_week;
    }

    /**
     * Set repeated_year
     *
     * @param string $repeatedYear
     * @return Frequencies
     */
    public function setRepeatedYear($repeatedYear) {
        $this->repeated_year = $repeatedYear;

        return $this;
    }

    /**
     * Get repeated_year
     *
     * @return string 
     */
    public function getRepeatedYear() {
        return $this->repeated_year;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     * @return Frequencies
     */
    public function setDuration($duration) {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer 
     */
    public function getDuration() {
        return $this->duration;
    }

    /**
     * Set duration_type
     *
     * @param string $durationType
     * @return Frequencies
     */
    public function setDurationType($durationType) {
        $this->duration_type = $durationType;

        return $this;
    }

    /**
     * Get duration_type
     *
     * @return string 
     */
    public function getDurationType() {
        return $this->duration_type;
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
