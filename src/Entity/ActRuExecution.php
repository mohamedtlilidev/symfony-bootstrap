<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ActRuExecution
 *
 * @ORM\Table(name="act_ru_execution", indexes={@ORM\Index(name="act_idx_exe_procdef", columns={"proc_def_id_"}), @ORM\Index(name="act_idx_exe_parent", columns={"parent_id_"}), @ORM\Index(name="act_idx_exe_procinst", columns={"proc_inst_id_"}), @ORM\Index(name="act_idx_exec_buskey", columns={"business_key_"}), @ORM\Index(name="act_idx_exe_super", columns={"super_exec_"})})
 * @ORM\Entity
 */
class ActRuExecution
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="act_ru_execution_id__seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="business_key_", type="string", length=255, nullable=true)
     */
    private $businessKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="act_id_", type="string", length=255, nullable=true)
     */
    private $actId;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_active_", type="boolean", nullable=true)
     */
    private $isActive;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_concurrent_", type="boolean", nullable=true)
     */
    private $isConcurrent;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_scope_", type="boolean", nullable=true)
     */
    private $isScope;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_event_scope_", type="boolean", nullable=true)
     */
    private $isEventScope;

    /**
     * @var int|null
     *
     * @ORM\Column(name="suspension_state_", type="integer", nullable=true)
     */
    private $suspensionState;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cached_ent_state_", type="integer", nullable=true)
     */
    private $cachedEntState;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tenant_id_", type="string", length=255, nullable=true)
     */
    private $tenantId = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="name_", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="lock_time_", type="datetime", nullable=true)
     */
    private $lockTime;

    /**
     * @var \ActRuExecution
     *
     * @ORM\ManyToOne(targetEntity="ActRuExecution")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id_", referencedColumnName="id_")
     * })
     */
    private $parentId;

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

    /**
     * @var \ActRuExecution
     *
     * @ORM\ManyToOne(targetEntity="ActRuExecution")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="super_exec_", referencedColumnName="id_")
     * })
     */
    private $superExec;


}
