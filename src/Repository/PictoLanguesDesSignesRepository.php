<?php

namespace App\Repository;

use App\Entity\PictoLanguesDesSignes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PictoLanguesDesSignes>
 *
 * @method PictoLanguesDesSignes|null find($id, $lockMode = null, $lockVersion = null)
 * @method PictoLanguesDesSignes|null findOneBy(array $criteria, array $orderBy = null)
 * @method PictoLanguesDesSignes[]    findAll()
 * @method PictoLanguesDesSignes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PictoLanguesDesSignesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PictoLanguesDesSignes::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(PictoLanguesDesSignes $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(PictoLanguesDesSignes $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return PictoLanguesDesSignes[] Returns an array of PictoLanguesDesSignes objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PictoLanguesDesSignes
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
