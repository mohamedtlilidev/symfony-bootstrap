<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SimulationConfig
 *
 * @ORM\Table(name="simulation_config")
 * @ORM\Entity
 */
class SimulationConfig
{
    /**
     * @var string
     *
     * @ORM\Column(name="delegateur", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="simulation_config_delegateur_seq", allocationSize=1, initialValue=1)
     */
    private $delegateur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="delegue", type="string", length=255, nullable=true)
     */
    private $delegue;


}
