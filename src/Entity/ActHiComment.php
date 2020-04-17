<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ActHiComment
 *
 * @ORM\Table(name="act_hi_comment")
 * @ORM\Entity
 */
class ActHiComment
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="act_hi_comment_id__seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type_", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time_", type="datetime", nullable=false)
     */
    private $time;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_id_", type="string", length=255, nullable=true)
     */
    private $userId;

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
     * @ORM\Column(name="action_", type="string", length=255, nullable=true)
     */
    private $action;

    /**
     * @var string|null
     *
     * @ORM\Column(name="message_", type="string", length=4000, nullable=true)
     */
    private $message;

    /**
     * @var string|null
     *
     * @ORM\Column(name="full_msg_", type="blob", nullable=true)
     */
    private $fullMsg;


}
