<?php

namespace App\Repository;

use App\Entity\PictoChiffres;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PictoChiffres>
 *
 * @method PictoChiffres|null find($id, $lockMode = null, $lockVersion = null)
 * @method PictoChiffres|null findOneBy(array $criteria, array $orderBy = null)
 * @method PictoChiffres[]    findAll()
 * @method PictoChiffres[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PictoChiffresRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PictoChiffres::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(PictoChiffres $entity, bool $flush = true): void
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
    public function remove(PictoChiffres $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return PictoChiffres[] Returns an array of PictoChiffres objects
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
    public function findOneBySomeField($value): ?PictoChiffres
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
