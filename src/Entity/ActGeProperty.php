<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ActGeProperty
 *
 * @ORM\Table(name="act_ge_property")
 * @ORM\Entity
 */
class ActGeProperty
{
    /**
     * @var string
     *
     * @ORM\Column(name="name_", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="act_ge_property_name__seq", allocationSize=1, initialValue=1)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value_", type="string", length=300, nullable=true)
     */
    private $value;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rev_", type="integer", nullable=true)
     */
    private $rev;


}
