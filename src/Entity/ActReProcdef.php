<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ActReProcdef
 *
 * @ORM\Table(name="act_re_procdef", uniqueConstraints={@ORM\UniqueConstraint(name="act_uniq_procdef", columns={"key_", "version_", "tenant_id_"})})
 * @ORM\Entity
 */
class ActReProcdef
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="act_re_procdef_id__seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="category_", type="string", length=255, nullable=true)
     */
    private $category;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name_", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="key_", type="string", length=255, nullable=false)
     */
    private $key;

    /**
     * @var int
     *
     * @ORM\Column(name="version_", type="integer", nullable=false)
     */
    private $version;

    /**
     * @var string|null
     *
     * @ORM\Column(name="deployment_id_", type="string", length=64, nullable=true)
     */
    private $deploymentId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="resource_name_", type="string", length=4000, nullable=true)
     */
    private $resourceName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dgrm_resource_name_", type="string", length=4000, nullable=true)
     */
    private $dgrmResourceName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_", type="string", length=4000, nullable=true)
     */
    private $description;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="has_start_form_key_", type="boolean", nullable=true)
     */
    private $hasStartFormKey;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="has_graphical_notation_", type="boolean", nullable=true)
     */
    private $hasGraphicalNotation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="suspension_state_", type="integer", nullable=true)
     */
    private $suspensionState;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tenant_id_", type="string", length=255, nullable=true)
     */
    private $tenantId = '';


}
