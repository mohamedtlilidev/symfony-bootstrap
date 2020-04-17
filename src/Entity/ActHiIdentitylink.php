<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ActHiIdentitylink
 *
 * @ORM\Table(name="act_hi_identitylink", indexes={@ORM\Index(name="act_idx_hi_ident_lnk_procinst", columns={"proc_inst_id_"}), @ORM\Index(name="act_idx_hi_ident_lnk_user", columns={"user_id_"}), @ORM\Index(name="act_idx_hi_ident_lnk_task", columns={"task_id_"})})
 * @ORM\Entity
 */
class ActHiIdentitylink
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="act_hi_identitylink_id__seq", allocationSize=1, initialValue=1)
     */
    private $id;

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


}
