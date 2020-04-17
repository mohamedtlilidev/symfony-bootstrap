<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ActIdInfo
 *
 * @ORM\Table(name="act_id_info")
 * @ORM\Entity
 */
class ActIdInfo
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="act_id_info_id__seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="user_id_", type="string", length=64, nullable=true)
     */
    private $userId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type_", type="string", length=64, nullable=true)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="key_", type="string", length=255, nullable=true)
     */
    private $key;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value_", type="string", length=255, nullable=true)
     */
    private $value;

    /**
     * @var string|null
     *
     * @ORM\Column(name="password_", type="blob", nullable=true)
     */
    private $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="parent_id_", type="string", length=255, nullable=true)
     */
    private $parentId;


}
