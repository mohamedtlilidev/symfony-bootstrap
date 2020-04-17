<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ServicesTransverses
 *
 * @ORM\Table(name="services_transverses")
 * @ORM\Entity
 */
class ServicesTransverses
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="services_transverses_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="order_num", type="integer", nullable=true)
     */
    private $orderNum;

    /**
     * @var string|null
     *
     * @ORM\Column(name="org_niv", type="string", length=255, nullable=true)
     */
    private $orgNiv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="perimetre", type="string", length=255, nullable=true)
     */
    private $perimetre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="process_name", type="string", length=255, nullable=true)
     */
    private $processName;


}
