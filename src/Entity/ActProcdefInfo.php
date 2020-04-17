<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ActProcdefInfo
 *
 * @ORM\Table(name="act_procdef_info", uniqueConstraints={@ORM\UniqueConstraint(name="act_uniq_info_procdef", columns={"proc_def_id_"})}, indexes={@ORM\Index(name="act_idx_procdef_info_json", columns={"info_json_id_"}), @ORM\Index(name="act_idx_procdef_info_proc", columns={"proc_def_id_"})})
 * @ORM\Entity
 */
class ActProcdefInfo
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="act_procdef_info_id__seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rev_", type="integer", nullable=true)
     */
    private $rev;

    /**
     * @var \ActGeBytearray
     *
     * @ORM\ManyToOne(targetEntity="ActGeBytearray")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="info_json_id_", referencedColumnName="id_")
     * })
     */
    private $infoJsonId;

    /**
     * @var \ActReProcdef
     *
     * @ORM\ManyToOne(targetEntity="ActReProcdef")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proc_def_id_", referencedColumnName="id_")
     * })
     */
    private $procDefId;


}
