<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ActRuEventSubscr
 *
 * @ORM\Table(name="act_ru_event_subscr", indexes={@ORM\Index(name="act_idx_event_subscr", columns={"execution_id_"}), @ORM\Index(name="act_idx_event_subscr_config_", columns={"configuration_"})})
 * @ORM\Entity
 */
class ActRuEventSubscr
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="act_ru_event_subscr_id__seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="event_type_", type="string", length=255, nullable=false)
     */
    private $eventType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="event_name_", type="string", length=255, nullable=true)
     */
    private $eventName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="proc_inst_id_", type="string", length=64, nullable=true)
     */
    private $procInstId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="activity_id_", type="string", length=64, nullable=true)
     */
    private $activityId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="configuration_", type="string", length=255, nullable=true)
     */
    private $configuration;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_", type="datetime", nullable=false)
     */
    private $created;

    /**
     * @var string|null
     *
     * @ORM\Column(name="proc_def_id_", type="string", length=64, nullable=true)
     */
    private $procDefId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tenant_id_", type="string", length=255, nullable=true)
     */
    private $tenantId = '';

    /**
     * @var \ActRuExecution
     *
     * @ORM\ManyToOne(targetEntity="ActRuExecution")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="execution_id_", referencedColumnName="id_")
     * })
     */
    private $executionId;


}
