<?php

namespace Notification\Newsletters\Automated\Groups\Code\Tables;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groups
 *
 * @ORM\Table(name="notification_newsletters_automated_groups", indexes={@ORM\Index(name="automated_id_index", columns={"automated_id"}), @ORM\Index(name="group_id_index", columns={"group_id"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Groups extends \Kazist\Table\BaseTable
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
     * @ORM\Column(name="automated_id", type="integer", length=11, nullable=false)
     */
    protected $automated_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="group_id", type="integer", length=11, nullable=false)
     */
    protected $group_id;

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
     * Set automated_id
     *
     * @param integer $automatedId
     * @return Groups
     */
    public function setAutomatedId($automatedId)
    {
        $this->automated_id = $automatedId;

        return $this;
    }

    /**
     * Get automated_id
     *
     * @return integer 
     */
    public function getAutomatedId()
    {
        return $this->automated_id;
    }

    /**
     * Set group_id
     *
     * @param integer $groupId
     * @return Groups
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
