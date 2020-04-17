<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * MailCnfg
 *
 * @ORM\Table(name="mail_cnfg")
 * @ORM\Entity
 */
class MailCnfg
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_mail_cnfg", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mail_cnfg_id_mail_cnfg_seq", allocationSize=1, initialValue=1)
     */
    private $idMailCnfg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="corp", type="string", length=3500, nullable=true)
     */
    private $corp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="langue", type="string", length=255, nullable=true)
     */
    private $langue;

    /**
     * @var string|null
     *
     * @ORM\Column(name="objet", type="string", length=255, nullable=true)
     */
    private $objet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=true)
     */
    private $titre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;


}
