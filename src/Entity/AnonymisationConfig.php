<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AnonymisationConfig
 *
 * @ORM\Table(name="anonymisation_config")
 * @ORM\Entity
 */
class AnonymisationConfig
{
    /**
     * @var string
     *
     * @ORM\Column(name="process_def_id", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="anonymisation_config_process_def_id_seq", allocationSize=1, initialValue=1)
     */
    private $processDefId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="duree_conservation", type="bigint", nullable=true)
     */
    private $dureeConservation;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="effacement_pj", type="boolean", nullable=true)
     */
    private $effacementPj;


}
