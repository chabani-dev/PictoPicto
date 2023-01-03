<?php

namespace App\Repository;

use App\Entity\PictoCorpsHumain;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PictoCorpsHumain>
 *
 * @method PictoCorpsHumain|null find($id, $lockMode = null, $lockVersion = null)
 * @method PictoCorpsHumain|null findOneBy(array $criteria, array $orderBy = null)
 * @method PictoCorpsHumain[]    findAll()
 * @method PictoCorpsHumain[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PictoCorpsHumainRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PictoCorpsHumain::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(PictoCorpsHumain $entity, bool $flush = true): void
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
    public function remove(PictoCorpsHumain $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return PictoCorpsHumain[] Returns an array of PictoCorpsHumain objects
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
    public function findOneBySomeField($value): ?PictoCorpsHumain
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
