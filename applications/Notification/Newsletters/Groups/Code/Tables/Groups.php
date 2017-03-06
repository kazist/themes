<?php

namespace Notification\Newsletters\Groups\Code\Tables;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groups
 *
 * @ORM\Table(name="notification_newsletters_groups", indexes={@ORM\Index(name="group_id_index", columns={"group_id"}), @ORM\Index(name="newsletter_id_index", columns={"newsletter_id"})})
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
     * @ORM\Column(name="group_id", type="integer", length=11, nullable=false)
     */
    protected $group_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="newsletter_id", type="integer", length=11, nullable=false)
     */
    protected $newsletter_id;

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
     * Set newsletter_id
     *
     * @param integer $newsletterId
     * @return Groups
     */
    public function setNewsletterId($newsletterId)
    {
        $this->newsletter_id = $newsletterId;

        return $this;
    }

    /**
     * Get newsletter_id
     *
     * @return integer 
     */
    public function getNewsletterId()
    {
        return $this->newsletter_id;
    }

    /**
     * Set published
     *
     * @param integer $published
     * @return Groups
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
