<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * DelegationConfig
 *
 * @ORM\Table(name="delegation_config")
 * @ORM\Entity
 */
class DelegationConfig
{
    /**
     * @var string
     *
     * @ORM\Column(name="delegateur", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="delegation_config_delegateur_seq", allocationSize=1, initialValue=1)
     */
    private $delegateur;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_debut", type="datetime", nullable=true)
     */
    private $dateDebut;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_fin", type="datetime", nullable=true)
     */
    private $dateFin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="delegue", type="string", length=255, nullable=true)
     */
    private $delegue;


}
