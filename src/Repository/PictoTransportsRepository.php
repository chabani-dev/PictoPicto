<?php

namespace App\Repository;

use App\Entity\PictoTransports;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PictoTransports>
 *
 * @method PictoTransports|null find($id, $lockMode = null, $lockVersion = null)
 * @method PictoTransports|null findOneBy(array $criteria, array $orderBy = null)
 * @method PictoTransports[]    findAll()
 * @method PictoTransports[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PictoTransportsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PictoTransports::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(PictoTransports $entity, bool $flush = true): void
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
    public function remove(PictoTransports $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return PictoTransports[] Returns an array of PictoTransports objects
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
    public function findOneBySomeField($value): ?PictoTransports
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
