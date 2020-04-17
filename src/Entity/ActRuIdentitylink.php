<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ActRuIdentitylink
 *
 * @ORM\Table(name="act_ru_identitylink", indexes={@ORM\Index(name="act_idx_ident_lnk_group", columns={"group_id_"}), @ORM\Index(name="act_idx_ident_lnk_user", columns={"user_id_"}), @ORM\Index(name="act_idx_tskass_task", columns={"task_id_"}), @ORM\Index(name="act_idx_athrz_procedef", columns={"proc_def_id_"}), @ORM\Index(name="act_idx_idl_procinst", columns={"proc_inst_id_"})})
 * @ORM\Entity
 */
class ActRuIdentitylink
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="act_ru_identitylink_id__seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="group_id_", type="string", length=255, nullable=true)
     */
    private $groupId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type_", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_id_", type="string", length=255, nullable=true)
     */
    private $userId;

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
     * @var \ActRuTask
     *
     * @ORM\ManyToOne(targetEntity="ActRuTask")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="task_id_", referencedColumnName="id_")
     * })
     */
    private $taskId;


}
