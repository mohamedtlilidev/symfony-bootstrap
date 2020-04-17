<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ActEvtLog
 *
 * @ORM\Table(name="act_evt_log")
 * @ORM\Entity
 */
class ActEvtLog
{
    /**
     * @var int
     *
     * @ORM\Column(name="log_nr_", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="act_evt_log_log_nr__seq", allocationSize=1, initialValue=1)
     */
    private $logNr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type_", type="string", length=64, nullable=true)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="proc_def_id_", type="string", length=64, nullable=true)
     */
    private $procDefId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="proc_inst_id_", type="string", length=64, nullable=true)
     */
    private $procInstId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="execution_id_", type="string", length=64, nullable=true)
     */
    private $executionId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="task_id_", type="string", length=64, nullable=true)
     */
    private $taskId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time_stamp_", type="datetime", nullable=false)
     */
    private $timeStamp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_id_", type="string", length=255, nullable=true)
     */
    private $userId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="data_", type="blob", nullable=true)
     */
    private $data;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lock_owner_", type="string", length=255, nullable=true)
     */
    private $lockOwner;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="lock_time_", type="datetime", nullable=true)
     */
    private $lockTime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="is_processed_", type="smallint", nullable=true)
     */
    private $isProcessed = '0';


}
