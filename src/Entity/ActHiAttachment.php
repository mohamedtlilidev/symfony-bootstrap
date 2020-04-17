<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ActHiAttachment
 *
 * @ORM\Table(name="act_hi_attachment")
 * @ORM\Entity
 */
class ActHiAttachment
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="act_hi_attachment_id__seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rev_", type="integer", nullable=true)
     */
    private $rev;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_id_", type="string", length=255, nullable=true)
     */
    private $userId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name_", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_", type="string", length=4000, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type_", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="task_id_", type="string", length=64, nullable=true)
     */
    private $taskId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="proc_inst_id_", type="string", length=64, nullable=true)
     */
    private $procInstId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url_", type="string", length=4000, nullable=true)
     */
    private $url;

    /**
     * @var string|null
     *
     * @ORM\Column(name="content_id_", type="string", length=64, nullable=true)
     */
    private $contentId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="time_", type="datetime", nullable=true)
     */
    private $time;


}
