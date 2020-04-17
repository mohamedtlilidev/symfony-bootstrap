<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ActReModel
 *
 * @ORM\Table(name="act_re_model", indexes={@ORM\Index(name="act_idx_model_deployment", columns={"deployment_id_"}), @ORM\Index(name="act_idx_model_source", columns={"editor_source_value_id_"}), @ORM\Index(name="act_idx_model_source_extra", columns={"editor_source_extra_value_id_"})})
 * @ORM\Entity
 */
class ActReModel
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="act_re_model_id__seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="name_", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="key_", type="string", length=255, nullable=true)
     */
    private $key;

    /**
     * @var string|null
     *
     * @ORM\Column(name="category_", type="string", length=255, nullable=true)
     */
    private $category;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="create_time_", type="datetime", nullable=true)
     */
    private $createTime;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_update_time_", type="datetime", nullable=true)
     */
    private $lastUpdateTime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="version_", type="integer", nullable=true)
     */
    private $version;

    /**
     * @var string|null
     *
     * @ORM\Column(name="meta_info_", type="string", length=4000, nullable=true)
     */
    private $metaInfo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tenant_id_", type="string", length=255, nullable=true)
     */
    private $tenantId = '';

    /**
     * @var \ActReDeployment
     *
     * @ORM\ManyToOne(targetEntity="ActReDeployment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="deployment_id_", referencedColumnName="id_")
     * })
     */
    private $deploymentId;

    /**
     * @var \ActGeBytearray
     *
     * @ORM\ManyToOne(targetEntity="ActGeBytearray")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="editor_source_value_id_", referencedColumnName="id_")
     * })
     */
    private $editorSourceValueId;

    /**
     * @var \ActGeBytearray
     *
     * @ORM\ManyToOne(targetEntity="ActGeBytearray")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="editor_source_extra_value_id_", referencedColumnName="id_")
     * })
     */
    private $editorSourceExtraValueId;


}
