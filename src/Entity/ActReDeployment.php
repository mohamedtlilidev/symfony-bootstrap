<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ActReDeployment
 *
 * @ORM\Table(name="act_re_deployment")
 * @ORM\Entity
 */
class ActReDeployment
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="act_re_deployment_id__seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name_", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="category_", type="string", length=255, nullable=true)
     */
    private $category;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tenant_id_", type="string", length=255, nullable=true)
     */
    private $tenantId = '';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="deploy_time_", type="datetime", nullable=true)
     */
    private $deployTime;


}
