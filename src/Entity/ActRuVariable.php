<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ActRuVariable
 *
 * @ORM\Table(name="act_ru_variable", indexes={@ORM\Index(name="act_idx_var_exe", columns={"execution_id_"}), @ORM\Index(name="act_idx_variable_task_id", columns={"task_id_"}), @ORM\Index(name="act_idx_var_procinst", columns={"proc_inst_id_"}), @ORM\Index(name="act_idx_var_bytearray", columns={"bytearray_id_"})})
 * @ORM\Entity
 */
class ActRuVariable
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="act_ru_variable_id__seq", allocationSize=1, initialValue=1)
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
     * @var string
     *
     * @ORM\Column(name="name_", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="task_id_", type="string", length=64, nullable=true)
     */
    private $taskId;

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

    /**
     * @var \ActGeBytearray
     *
     * @ORM\ManyToOne(targetEntity="ActGeBytearray")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bytearray_id_", referencedColumnName="id_")
     * })
     */
    private $bytearrayId;

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
     * @var \ActRuExecution
     *
     * @ORM\ManyToOne(targetEntity="ActRuExecution")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proc_inst_id_", referencedColumnName="id_")
     * })
     */
    private $procInstId;


}
