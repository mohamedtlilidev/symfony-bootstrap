<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ActHiTaskinst
 *
 * @ORM\Table(name="act_hi_taskinst", indexes={@ORM\Index(name="act_idx_hi_task_inst_procinst", columns={"proc_inst_id_"})})
 * @ORM\Entity
 */
class ActHiTaskinst
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="act_hi_taskinst_id__seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="proc_def_id_", type="string", length=64, nullable=true)
     */
    private $procDefId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="task_def_key_", type="string", length=255, nullable=true)
     */
    private $taskDefKey;

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
     * @ORM\Column(name="name_", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="parent_task_id_", type="string", length=64, nullable=true)
     */
    private $parentTaskId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_", type="string", length=4000, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="owner_", type="string", length=255, nullable=true)
     */
    private $owner;

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
     * @ORM\Column(name="claim_time_", type="datetime", nullable=true)
     */
    private $claimTime;

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
     * @ORM\Column(name="delete_reason_", type="string", length=4000, nullable=true)
     */
    private $deleteReason;

    /**
     * @var int|null
     *
     * @ORM\Column(name="priority_", type="integer", nullable=true)
     */
    private $priority;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="due_date_", type="datetime", nullable=true)
     */
    private $dueDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="form_key_", type="string", length=255, nullable=true)
     */
    private $formKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="category_", type="string", length=255, nullable=true)
     */
    private $category;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tenant_id_", type="string", length=255, nullable=true)
     */
    private $tenantId = '';


}
