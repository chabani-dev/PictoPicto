<?php

namespace App\Repository;

use App\Entity\PictoBoissons;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PictoBoissons>
 *
 * @method PictoBoissons|null find($id, $lockMode = null, $lockVersion = null)
 * @method PictoBoissons|null findOneBy(array $criteria, array $orderBy = null)
 * @method PictoBoissons[]    findAll()
 * @method PictoBoissons[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PictoBoissonsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PictoBoissons::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(PictoBoissons $entity, bool $flush = true): void
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
    public function remove(PictoBoissons $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return PictoBoissons[] Returns an array of PictoBoissons objects
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
    public function findOneBySomeField($value): ?PictoBoissons
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
