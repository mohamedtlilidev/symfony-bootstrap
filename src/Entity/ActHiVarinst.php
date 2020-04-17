<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * ActHiVarinst
 *
 * @ORM\Table(name="act_hi_varinst", indexes={@ORM\Index(name="act_idx_hi_procvar_name_type", columns={"name_", "var_type_"}), @ORM\Index(name="act_idx_hi_procvar_task_id", columns={"task_id_"}), @ORM\Index(name="act_idx_hi_procvar_proc_inst", columns={"proc_inst_id_"})})
 * @ORM\Entity(repositoryClass="App\Repository\ActHiVarinstRepository")
 */
class ActHiVarinst
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="act_hi_varinst_id__seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * @var string
     *
     * @ORM\Column(name="name_", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="var_type_", type="string", length=100, nullable=true)
     */
    private $varType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rev_", type="integer", nullable=true)
     */
    private $rev;

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

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="create_time_", type="datetime", nullable=true)
     */
    private $createTime;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_updated_time_", type="datetime", nullable=true)
     */
    private $lastUpdatedTime;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id=$id;
    }

    /**
     * @return null|string
     */
    public function getProcInstId(): ?string
    {
        return $this->procInstId;
    }

    /**
     * @param null|string $procInstId
     */
    public function setProcInstId(?string $procInstId): void
    {
        $this->procInstId=$procInstId;
    }

    /**
     * @return null|string
     */
    public function getExecutionId(): ?string
    {
        return $this->executionId;
    }

    /**
     * @param null|string $executionId
     */
    public function setExecutionId(?string $executionId): void
    {
        $this->executionId=$executionId;
    }

    /**
     * @return null|string
     */
    public function getTaskId(): ?string
    {
        return $this->taskId;
    }

    /**
     * @param null|string $taskId
     */
    public function setTaskId(?string $taskId): void
    {
        $this->taskId=$taskId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name=$name;
    }

    /**
     * @return null|string
     */
    public function getVarType(): ?string
    {
        return $this->varType;
    }

    /**
     * @param null|string $varType
     */
    public function setVarType(?string $varType): void
    {
        $this->varType=$varType;
    }

    /**
     * @return int|null
     */
    public function getRev(): ?int
    {
        return $this->rev;
    }

    /**
     * @param int|null $rev
     */
    public function setRev(?int $rev): void
    {
        $this->rev=$rev;
    }

    /**
     * @return null|string
     */
    public function getBytearrayId(): ?string
    {
        return $this->bytearrayId;
    }

    /**
     * @param null|string $bytearrayId
     */
    public function setBytearrayId(?string $bytearrayId): void
    {
        $this->bytearrayId=$bytearrayId;
    }

    /**
     * @return float|null
     */
    public function getDouble(): ?float
    {
        return $this->double;
    }

    /**
     * @param float|null $double
     */
    public function setDouble(?float $double): void
    {
        $this->double=$double;
    }

    /**
     * @return int|null
     */
    public function getLong(): ?int
    {
        return $this->long;
    }

    /**
     * @param int|null $long
     */
    public function setLong(?int $long): void
    {
        $this->long=$long;
    }

    /**
     * @return null|string
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @param null|string $text
     */
    public function setText(?string $text): void
    {
        $this->text=$text;
    }

    /**
     * @return null|string
     */
    public function getText2(): ?string
    {
        return $this->text2;
    }

    /**
     * @param null|string $text2
     */
    public function setText2(?string $text2): void
    {
        $this->text2=$text2;
    }

    /**
     * @return DateTime|null
     */
    public function getCreateTime(): ?DateTime
    {
        return $this->createTime;
    }

    /**
     * @param DateTime|null $createTime
     */
    public function setCreateTime(?DateTime $createTime): void
    {
        $this->createTime=$createTime;
    }

    /**
     * @return DateTime|null
     */
    public function getLastUpdatedTime(): ?DateTime
    {
        return $this->lastUpdatedTime;
    }

    /**
     * @param DateTime|null $lastUpdatedTime
     */
    public function setLastUpdatedTime(?DateTime $lastUpdatedTime): void
    {
        $this->lastUpdatedTime=$lastUpdatedTime;
    }
    public function __toString():string
    {
        // TODO: Implement __toString() method.
        return $this->getName();
    }

}
