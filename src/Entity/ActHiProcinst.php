<?php


namespace App\Entity;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * ActHiProcinstRepository
 *
 * @ORM\Table(name="act_hi_procinst", uniqueConstraints={@ORM\UniqueConstraint(name="act_hi_procinst_proc_inst_id__key", columns={"proc_inst_id_"})}, indexes={@ORM\Index(name="act_idx_hi_pro_i_buskey", columns={"business_key_"}), @ORM\Index(name="act_idx_hi_pro_inst_end", columns={"end_time_"})})
 * @ORM\Entity(repositoryClass="App\Repository\ActHiProcinstRepository")
 */
class ActHiProcinst
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="act_hi_procinst_id__seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="proc_inst_id_", type="string", length=64, nullable=false)
     * @OneToMany(targetEntity="ActHiVarinst", indexBy="procInstId")
     * @JoinTable(name="proc_inst_id_")
     */
    private $procInstId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="business_key_", type="string", length=255, nullable=true)
     */
    private $businessKey;

    /**
     * @var string
     *
     * @ORM\Column(name="proc_def_id_", type="string", length=64, nullable=false)
     */
    private $procDefId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time_", type="datetime", nullable=false)
     */
    private $startTime;

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
     * @ORM\Column(name="start_user_id_", type="string", length=255, nullable=true)
     */
    private $startUserId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="start_act_id_", type="string", length=255, nullable=true)
     */
    private $startActId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="end_act_id_", type="string", length=255, nullable=true)
     */
    private $endActId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="super_process_instance_id_", type="string", length=64, nullable=true)
     */
    private $superProcessInstanceId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="delete_reason_", type="string", length=4000, nullable=true)
     */
    private $deleteReason;

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
     * @return string
     */
    public function getProcInstId(): string
    {
        return $this->procInstId;
    }

    /**
     * @param string $procInstId
     */
    public function setProcInstId(string $procInstId): void
    {
        $this->procInstId=$procInstId;
    }

    /**
     * @return null|string
     */
    public function getBusinessKey(): ?string
    {
        return $this->businessKey;
    }

    /**
     * @param null|string $businessKey
     */
    public function setBusinessKey(?string $businessKey): void
    {
        $this->businessKey=$businessKey;
    }

    /**
     * @return string
     */
    public function getProcDefId(): string
    {
        return $this->procDefId;
    }

    /**
     * @param string $procDefId
     */
    public function setProcDefId(string $procDefId): void
    {
        $this->procDefId=$procDefId;
    }

    /**
     * @return DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param DateTime $startTime
     */
    public function setStartTime(DateTime $startTime): void
    {
        $this->startTime=$startTime;
    }

    /**
     * @return DateTime|null
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param DateTime|null $endTime
     */
    public function setEndTime(?DateTime $endTime): void
    {
        $this->endTime=$endTime;
    }

    /**
     * @return int|null
     */
    public function getDuration(): ?int
    {
        return $this->duration;
    }

    /**
     * @param int|null $duration
     */
    public function setDuration(?int $duration): void
    {
        $this->duration=$duration;
    }

    /**
     * @return null|string
     */
    public function getStartUserId(): ?string
    {
        return $this->startUserId;
    }

    /**
     * @param null|string $startUserId
     */
    public function setStartUserId(?string $startUserId): void
    {
        $this->startUserId=$startUserId;
    }

    /**
     * @return null|string
     */
    public function getStartActId(): ?string
    {
        return $this->startActId;
    }

    /**
     * @param null|string $startActId
     */
    public function setStartActId(?string $startActId): void
    {
        $this->startActId=$startActId;
    }

    /**
     * @return null|string
     */
    public function getEndActId(): ?string
    {
        return $this->endActId;
    }

    /**
     * @param null|string $endActId
     */
    public function setEndActId(?string $endActId): void
    {
        $this->endActId=$endActId;
    }

    /**
     * @return null|string
     */
    public function getSuperProcessInstanceId(): ?string
    {
        return $this->superProcessInstanceId;
    }

    /**
     * @param null|string $superProcessInstanceId
     */
    public function setSuperProcessInstanceId(?string $superProcessInstanceId): void
    {
        $this->superProcessInstanceId=$superProcessInstanceId;
    }

    /**
     * @return null|string
     */
    public function getDeleteReason(): ?string
    {
        return $this->deleteReason;
    }

    /**
     * @param null|string $deleteReason
     */
    public function setDeleteReason(?string $deleteReason): void
    {
        $this->deleteReason=$deleteReason;
    }

    /**
     * @return null|string
     */
    public function getTenantId(): ?string
    {
        return $this->tenantId;
    }

    /**
     * @param null|string $tenantId
     */
    public function setTenantId(?string $tenantId): void
    {
        $this->tenantId=$tenantId;
    }

    /**
     * @return null|string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param null|string $name
     */
    public function setName(?string $name): void
    {
        $this->name=$name;
    }
    public function __toString():string
    {
        // TODO: Implement __toString() method.
        return $this->getName();
    }


}
