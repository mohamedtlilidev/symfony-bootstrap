<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Variables
 *
 * @ORM\Table(name="variables")
 * @ORM\Entity(repositoryClass="App\Repository\VariablesRepository")
 */
class Variables
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="variables_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="generic_label", type="string", length=255, nullable=true)
     */
    private $genericLabel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=true)
     */
    private $label;

    /**
     * @var string|null
     *
     * @ORM\Column(name="langue", type="string", length=255, nullable=true)
     */
    private $langue;

    /**
     * @var string|null
     *
     * @ORM\Column(name="list", type="string", length=255, nullable=true)
     */
    private $list;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="obligatoire", type="boolean", nullable=true)
     */
    private $obligatoire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="process_name", type="string", length=255, nullable=true)
     */
    private $processName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="task_name", type="string", length=255, nullable=true)
     */
    private $taskName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="max_select", type="string", length=100, nullable=true)
     */
    private $maxSelect;

    /**
     * @var string|null
     *
     * @ORM\Column(name="decision", type="string", length=255, nullable=true)
     */
    private $decision;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id=$id;
    }

    /**
     * @return null|string
     */
    public function getGenericLabel(): ?string
    {
        return $this->genericLabel;
    }

    /**
     * @param null|string $genericLabel
     */
    public function setGenericLabel(?string $genericLabel): void
    {
        $this->genericLabel=$genericLabel;
    }

    /**
     * @return null|string
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * @param null|string $label
     */
    public function setLabel(?string $label): void
    {
        $this->label=$label;
    }

    /**
     * @return null|string
     */
    public function getLangue(): ?string
    {
        return $this->langue;
    }

    /**
     * @param null|string $langue
     */
    public function setLangue(?string $langue): void
    {
        $this->langue=$langue;
    }

    /**
     * @return null|string
     */
    public function getList(): ?string
    {
        return $this->list;
    }

    /**
     * @param null|string $list
     */
    public function setList(?string $list): void
    {
        $this->list=$list;
    }

    /**
     * @return bool|null
     */
    public function getObligatoire(): ?bool
    {
        return $this->obligatoire;
    }

    /**
     * @param bool|null $obligatoire
     */
    public function setObligatoire(?bool $obligatoire): void
    {
        $this->obligatoire=$obligatoire;
    }

    /**
     * @return null|string
     */
    public function getProcessName(): ?string
    {
        return $this->processName;
    }

    /**
     * @param null|string $processName
     */
    public function setProcessName(?string $processName): void
    {
        $this->processName=$processName;
    }

    /**
     * @return null|string
     */
    public function getTaskName(): ?string
    {
        return $this->taskName;
    }

    /**
     * @param null|string $taskName
     */
    public function setTaskName(?string $taskName): void
    {
        $this->taskName=$taskName;
    }

    /**
     * @return null|string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param null|string $type
     */
    public function setType(?string $type): void
    {
        $this->type=$type;
    }

    /**
     * @return null|string
     */
    public function getMaxSelect(): ?string
    {
        return $this->maxSelect;
    }

    /**
     * @param null|string $maxSelect
     */
    public function setMaxSelect(?string $maxSelect): void
    {
        $this->maxSelect=$maxSelect;
    }

    /**
     * @return null|string
     */
    public function getDecision(): ?string
    {
        return $this->decision;
    }

    /**
     * @param null|string $decision
     */
    public function setDecision(?string $decision): void
    {
        $this->decision=$decision;
    }
    public function __toString():string
    {
        // TODO: Implement __toString() method.
        return $this->getName();
    }

}
