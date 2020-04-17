<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ActGeBytearray
 *
 * @ORM\Table(name="act_ge_bytearray", indexes={@ORM\Index(name="act_idx_bytear_depl", columns={"deployment_id_"})})
 * @ORM\Entity
 */
class ActGeBytearray
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="act_ge_bytearray_id__seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="bytes_", type="blob", nullable=true)
     */
    private $bytes;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="generated_", type="boolean", nullable=true)
     */
    private $generated;

    /**
     * @var \ActReDeployment
     *
     * @ORM\ManyToOne(targetEntity="ActReDeployment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="deployment_id_", referencedColumnName="id_")
     * })
     */
    private $deploymentId;


}
