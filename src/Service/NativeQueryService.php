<?php


namespace App\Service;


use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Query\ResultSetMapping;

class NativeQueryService
{
    private $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function executeNativeQuery(string $query = '', $scalarFields = array()) {

        $rsm = new ResultSetMapping();

        $rsm->addScalarResult('proc_inst_id_', 'identifiant')
            ->addScalarResult('proc_def_id_', 'Titre')
            ->addScalarResult('start_time_', 'start_time_')
            ->addScalarResult('end_time_', 'end_time_')
            ->addScalarResult('duration_', 'duration_')
            ->addScalarResult('name_', 'name_')
            ->addScalarResult('text_', 'text_');

        foreach ($scalarFields as $column => $alias) {
            $rsm->addScalarResult($column, $alias);
        }

        $qn = $this->em->createNativeQuery($query, $rsm);

        return $qn->getResult();
    }
}