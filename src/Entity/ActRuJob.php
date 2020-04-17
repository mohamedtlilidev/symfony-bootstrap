<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ActRuJob
 *
 * @ORM\Table(name="act_ru_job", indexes={@ORM\Index(name="act_idx_job_exception", columns={"exception_stack_id_"})})
 * @ORM\Entity
 */
class ActRuJob
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="act_ru_job_id__seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rev_", type="integer", nullable=true)
     */
    private $rev;

    /**
     * @var string
     *
     * @ORM\Column(name="type_", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="lock_exp_time_", type="datetime", nullable=true)
     */
    private $lockExpTime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lock_owner_", type="string", length=255, nullable=true)
     */
    private $lockOwner;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="exclusive_", type="boolean", nullable=true)
     */
    private $exclusive;

    /**
     * @var string|null
     *
     * @ORM\Column(name="execution_id_", type="string", length=64, nullable=true)
     */
    private $executionId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="process_instance_id_", type="string", length=64, nullable=true)
     */
    private $processInstanceId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="proc_def_id_", type="string", length=64, nullable=true)
     */
    private $procDefId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="retries_", type="integer", nullable=true)
     */
    private $retries;

    /**
     * @var string|null
     *
     * @ORM\Column(name="exception_msg_", type="string", length=4000, nullable=true)
     */
    private $exceptionMsg;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="duedate_", type="datetime", nullable=true)
     */
    private $duedate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="repeat_", type="string", length=255, nullable=true)
     */
    private $repeat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="handler_type_", type="string", length=255, nullable=true)
     */
    private $handlerType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="handler_cfg_", type="string", length=4000, nullable=true)
     */
    private $handlerCfg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tenant_id_", type="string", length=255, nullable=true)
     */
    private $tenantId = '';

    /**
     * @var \ActGeBytearray
     *
     * @ORM\ManyToOne(targetEntity="ActGeBytearray")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="exception_stack_id_", referencedColumnName="id_")
     * })
     */
    private $exceptionStackId;


}
