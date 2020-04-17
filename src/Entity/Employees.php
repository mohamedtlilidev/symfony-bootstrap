<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Employees
 *
 * @ORM\Table(name="employees")
 * @ORM\Entity
 */
class Employees
{
    /**
     * @var string
     *
     * @ORM\Column(name="matricule", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="employees_matricule_seq", allocationSize=1, initialValue=1)
     */
    private $matricule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="matricule_sup", type="string", length=255, nullable=true)
     */
    private $matriculeSup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="matricule_supn2", type="string", length=255, nullable=true)
     */
    private $matriculeSupn2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_sup", type="string", length=255, nullable=true)
     */
    private $nomSup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_supn2", type="string", length=255, nullable=true)
     */
    private $nomSupn2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="org_niv", type="string", length=255, nullable=true)
     */
    private $orgNiv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenom_sup", type="string", length=255, nullable=true)
     */
    private $prenomSup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenom_supn2", type="string", length=255, nullable=true)
     */
    private $prenomSupn2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="societe", type="string", length=255, nullable=true)
     */
    private $societe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="environnement", type="string", length=255, nullable=true)
     */
    private $environnement;


}
