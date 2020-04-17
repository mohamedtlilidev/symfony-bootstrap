<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ActIdUser
 *
 * @ORM\Table(name="act_id_user")
 * @ORM\Entity
 */
class ActIdUser
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="act_id_user_id__seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="first_", type="string", length=255, nullable=true)
     */
    private $first;

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_", type="string", length=255, nullable=true)
     */
    private $last;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pwd_", type="string", length=255, nullable=true)
     */
    private $pwd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="picture_id_", type="string", length=64, nullable=true)
     */
    private $pictureId;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="ActIdGroup", inversedBy="userId")
     * @ORM\JoinTable(name="act_id_membership",
     *   joinColumns={
     *     @ORM\JoinColumn(name="user_id_", referencedColumnName="id_")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="group_id_", referencedColumnName="id_")
     *   }
     * )
     */
    private $groupId;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->groupId = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
