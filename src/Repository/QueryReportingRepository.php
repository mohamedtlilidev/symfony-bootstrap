<?php

namespace App\Repository;

use App\Entity\QueryReporting;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping;

/**
 * @method QueryReporting|null find($id, $lockMode = null, $lockVersion = null)
 * @method QueryReporting|null findOneBy(array $criteria, array $orderBy = null)
 * @method QueryReporting[]    findAll()
 * @method QueryReporting[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QueryReportingRepository extends EntityRepository
{
    public function __construct(EntityManagerInterface $em, Mapping\ClassMetadata $class)
    {
        parent::__construct($em, $class);
    }

    /**
     * @param $value
     * @return QueryReporting|null
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function findOneByNameQuery($value): ?QueryReporting
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.nameQuery = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
}