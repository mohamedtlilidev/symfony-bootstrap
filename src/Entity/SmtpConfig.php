<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SmtpConfig
 *
 * @ORM\Table(name="smtp_config")
 * @ORM\Entity
 */
class SmtpConfig
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="smtp_config_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="auth", type="string", length=255, nullable=true)
     */
    private $auth;

    /**
     * @var string|null
     *
     * @ORM\Column(name="debug", type="string", length=255, nullable=true)
     */
    private $debug;

    /**
     * @var string|null
     *
     * @ORM\Column(name="from_mail", type="string", length=255, nullable=true)
     */
    private $fromMail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="from_name", type="string", length=255, nullable=true)
     */
    private $fromName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="host", type="string", length=255, nullable=true)
     */
    private $host;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mdp_email", type="string", length=255, nullable=true)
     */
    private $mdpEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="port", type="string", length=255, nullable=true)
     */
    private $port;

    /**
     * @var string|null
     *
     * @ORM\Column(name="protocol", type="string", length=255, nullable=true)
     */
    private $protocol;

    /**
     * @var string|null
     *
     * @ORM\Column(name="socket_factory_class", type="string", length=255, nullable=true)
     */
    private $socketFactoryClass;

    /**
     * @var string|null
     *
     * @ORM\Column(name="socket_factory_fallback", type="string", length=255, nullable=true)
     */
    private $socketFactoryFallback;

    /**
     * @var string|null
     *
     * @ORM\Column(name="socket_factory_port", type="string", length=255, nullable=true)
     */
    private $socketFactoryPort;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ssl", type="string", length=255, nullable=true)
     */
    private $ssl;


}
