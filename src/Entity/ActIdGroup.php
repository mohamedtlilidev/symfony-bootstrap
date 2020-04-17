<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ActIdGroup
 *
 * @ORM\Table(name="act_id_group")
 * @ORM\Entity
 */
class ActIdGroup
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="act_id_group_id__seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="type_", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="ActIdUser", mappedBy="groupId")
     */
    private $userId;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->userId = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
