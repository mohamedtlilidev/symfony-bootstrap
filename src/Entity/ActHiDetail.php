<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ActHiDetail
 *
 * @ORM\Table(name="act_hi_detail", indexes={@ORM\Index(name="act_idx_hi_detail_act_inst", columns={"act_inst_id_"}), @ORM\Index(name="act_idx_hi_detail_time", columns={"time_"}), @ORM\Index(name="act_idx_hi_detail_name", columns={"name_"}), @ORM\Index(name="act_idx_hi_detail_proc_inst", columns={"proc_inst_id_"}), @ORM\Index(name="act_idx_hi_detail_task_id", columns={"task_id_"})})
 * @ORM\Entity
 */
class ActHiDetail
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="act_hi_detail_id__seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type_", type="string", length=255, nullable=false)
     */
    private $type;

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
     * @var string|null
     *
     * @ORM\Column(name="act_inst_id_", type="string", length=64, nullable=true)
     */
    private $actInstId;

    /**
     * @var string
     *
     * @ORM\Column(name="name_", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="var_type_", type="string", length=64, nullable=true)
     */
    private $varType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rev_", type="integer", nullable=true)
     */
    private $rev;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time_", type="datetime", nullable=false)
     */
    private $time;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bytearray_id_", type="string", length=64, nullable=true)
     */
    private $bytearrayId;

    /**
     * @var float|null
     *
     * @ORM\Column(name="double_", type="float", precision=10, scale=0, nullable=true)
     */
    private $double;

    /**
     * @var int|null
     *
     * @ORM\Column(name="long_", type="bigint", nullable=true)
     */
    private $long;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text_", type="string", length=4000, nullable=true)
     */
    private $text;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text2_", type="string", length=4000, nullable=true)
     */
    private $text2;


}
