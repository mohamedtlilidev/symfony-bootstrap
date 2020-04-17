<?php
/**
 * Created by PhpStorm.
 * User: g361183
 * Date: 4/15/20
 * Time: 12:12 PM
 */
namespace App\Enum;

abstract class StatusProcess
{

    const  STATUS_TERMINEE = 'terminee';

    const  STATUS_TERMINEE_Etape = 'terminee_etape';

	/** The Constant REFUSEE. */
    const  STATUS_REFUSEE = 'refusee';

	/** The Constant ACCEPTEE. */
	const   STATUS_ACCEPTEE = 'acceptee';

	/** The Constant EN_COURS. */
    const  STATUS_EN_COURS = 'en cours';

    const  STATUS_EN_COURS_ETAPE = 'enCours_etape';

	/** The Constant EN_COURS. */
    const   STATUS_ABONDONNEE = 'abondonne';
}
