<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ActRuTask
 *
 * @ORM\Table(name="act_ru_task", indexes={@ORM\Index(name="act_idx_task_exec", columns={"execution_id_"}), @ORM\Index(name="act_idx_task_create", columns={"create_time_"}), @ORM\Index(name="act_idx_task_procdef", columns={"proc_def_id_"}), @ORM\Index(name="act_idx_task_procinst", columns={"proc_inst_id_"})})
 * @ORM\Entity
 */
class ActRuTask
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="act_ru_task_id__seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="task_def_key_", type="string", length=255, nullable=true)
     */
    private $taskDefKey;

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
     * @var string|null
     *
     * @ORM\Column(name="delegation_", type="string", length=64, nullable=true)
     */
    private $delegation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="priority_", type="integer", nullable=true)
     */
    private $priority;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="create_time_", type="datetime", nullable=true)
     */
    private $createTime;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="due_date_", type="datetime", nullable=true)
     */
    private $dueDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="category_", type="string", length=255, nullable=true)
     */
    private $category;

    /**
     * @var int|null
     *
     * @ORM\Column(name="suspension_state_", type="integer", nullable=true)
     */
    private $suspensionState;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tenant_id_", type="string", length=255, nullable=true)
     */
    private $tenantId = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="form_key_", type="string", length=255, nullable=true)
     */
    private $formKey;

    /**
     * @var \ActRuExecution
     *
     * @ORM\ManyToOne(targetEntity="ActRuExecution")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="execution_id_", referencedColumnName="id_")
     * })
     */
    private $executionId;

    /**
     * @var \ActReProcdef
     *
     * @ORM\ManyToOne(targetEntity="ActReProcdef")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proc_def_id_", referencedColumnName="id_")
     * })
     */
    private $procDefId;

    /**
     * @var \ActRuExecution
     *
     * @ORM\ManyToOne(targetEntity="ActRuExecution")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proc_inst_id_", referencedColumnName="id_")
     * })
     */
    private $procInstId;


}
