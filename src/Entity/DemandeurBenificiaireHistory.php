<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * DemandeurBenificiaireHistory
 *
 * @ORM\Table(name="demandeur_benificiaire_history")
 * @ORM\Entity
 */
class DemandeurBenificiaireHistory
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="demandeur_benificiaire_history_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="beneficiaire", type="string", length=255, nullable=true)
     */
    private $beneficiaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="beneficiaire_actuel", type="string", length=255, nullable=true)
     */
    private $beneficiaireActuel;

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
     * @ORM\Column(name="demandeur_actuel", type="string", length=255, nullable=true)
     */
    private $demandeurActuel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="matricule", type="string", length=255, nullable=true)
     */
    private $matricule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="process_id", type="string", length=255, nullable=true)
     */
    private $processId;


}
