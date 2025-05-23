<?php

namespace App\Repository;

use App\Entity\PictoSecuriteRoutiere;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PictoSecuriteRoutiere>
 *
 * @method PictoSecuriteRoutiere|null find($id, $lockMode = null, $lockVersion = null)
 * @method PictoSecuriteRoutiere|null findOneBy(array $criteria, array $orderBy = null)
 * @method PictoSecuriteRoutiere[]    findAll()
 * @method PictoSecuriteRoutiere[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PictoSecuriteRoutiereRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PictoSecuriteRoutiere::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(PictoSecuriteRoutiere $entity, bool $flush = true): void
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
    public function remove(PictoSecuriteRoutiere $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return PictoSecuriteRoutiere[] Returns an array of PictoSecuriteRoutiere objects
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
    public function findOneBySomeField($value): ?PictoSecuriteRoutiere
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
