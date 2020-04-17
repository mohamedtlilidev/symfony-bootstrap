<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EmpCnfgMail
 *
 * @ORM\Table(name="emp_cnfg_mail")
 * @ORM\Entity
 */
class EmpCnfgMail
{
    /**
     * @var string
     *
     * @ORM\Column(name="matricule", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="emp_cnfg_mail_matricule_seq", allocationSize=1, initialValue=1)
     */
    private $matricule;

    /**
     * @var int|null
     *
     * @ORM\Column(name="heure", type="integer", nullable=true)
     */
    private $heure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="langue", type="string", length=255, nullable=true)
     */
    private $langue;


}
