<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Mail
 *
 * @ORM\Table(name="mail", uniqueConstraints={@ORM\UniqueConstraint(name="uk_rn56n3vrbdqh16rvkmmgcqw4l", columns={"matricule"})})
 * @ORM\Entity
 */
class Mail
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_mail", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mail_id_mail_seq", allocationSize=1, initialValue=1)
     */
    private $idMail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="corp", type="string", length=3500, nullable=true)
     */
    private $corp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="matricule", type="string", length=255, nullable=true)
     */
    private $matricule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="objet", type="string", length=255, nullable=true)
     */
    private $objet;


}
