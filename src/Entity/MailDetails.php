<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * MailDetails
 *
 * @ORM\Table(name="mail_details", indexes={@ORM\Index(name="IDX_A89B8AE5DA06B04A", columns={"id_mail"})})
 * @ORM\Entity
 */
class MailDetails
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_mail_detail", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mail_details_id_mail_detail_seq", allocationSize=1, initialValue=1)
     */
    private $idMailDetail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="beneficaire", type="string", length=255, nullable=true)
     */
    private $beneficaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="corp", type="string", length=255, nullable=true)
     */
    private $corp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="date", type="string", length=255, nullable=true)
     */
    private $date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="demandeur", type="string", length=255, nullable=true)
     */
    private $demandeur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="domaine", type="string", length=255, nullable=true)
     */
    private $domaine;

    /**
     * @var string|null
     *
     * @ORM\Column(name="process_id", type="string", length=255, nullable=true)
     */
    private $processId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="task_id", type="string", length=255, nullable=true)
     */
    private $taskId;

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

    /**
     * @var \Mail
     *
     * @ORM\ManyToOne(targetEntity="Mail")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_mail", referencedColumnName="id_mail")
     * })
     */
    private $idMail;


}
