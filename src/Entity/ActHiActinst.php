<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ActHiActinst
 *
 * @ORM\Table(name="act_hi_actinst", indexes={@ORM\Index(name="act_idx_hi_act_inst_end", columns={"end_time_"}), @ORM\Index(name="act_idx_hi_act_inst_start", columns={"start_time_"}), @ORM\Index(name="act_idx_hi_act_inst_procinst", columns={"proc_inst_id_", "act_id_"}), @ORM\Index(name="act_idx_hi_act_inst_exec", columns={"execution_id_", "act_id_"})})
 * @ORM\Entity
 */
class ActHiActinst
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="act_hi_actinst_id__seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="proc_def_id_", type="string", length=64, nullable=false)
     */
    private $procDefId;

    /**
     * @var string
     *
     * @ORM\Column(name="proc_inst_id_", type="string", length=64, nullable=false)
     */
    private $procInstId;

    /**
     * @var string
     *
     * @ORM\Column(name="execution_id_", type="string", length=64, nullable=false)
     */
    private $executionId;

    /**
     * @var string
     *
     * @ORM\Column(name="act_id_", type="string", length=255, nullable=false)
     */
    private $actId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="task_id_", type="string", length=64, nullable=true)
     */
    private $taskId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="call_proc_inst_id_", type="string", length=64, nullable=true)
     */
    private $callProcInstId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="act_name_", type="string", length=255, nullable=true)
     */
    private $actName;

    /**
     * @var string
     *
     * @ORM\Column(name="act_type_", type="string", length=255, nullable=false)
     */
    private $actType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="assignee_", type="string", length=255, nullable=true)
     */
    private $assignee;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time_", type="datetime", nullable=false)
     */
    private $startTime;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="end_time_", type="datetime", nullable=true)
     */
    private $endTime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="duration_", type="bigint", nullable=true)
     */
    private $duration;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tenant_id_", type="string", length=255, nullable=true)
     */
    private $tenantId = '';


}
