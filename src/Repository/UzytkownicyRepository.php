<?php

namespace App\Repository;

use App\Entity\Uzytkownicy;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Uzytkownicy>
 *
 * @method Uzytkownicy|null find($id, $lockMode = null, $lockVersion = null)
 * @method Uzytkownicy|null findOneBy(array $criteria, array $orderBy = null)
 * @method Uzytkownicy[]    findAll()
 * @method Uzytkownicy[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UzytkownicyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Uzytkownicy::class);
    }

    public function save(Uzytkownicy $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Uzytkownicy $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Uzytkownicy[] Returns an array of Uzytkownicy objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Uzytkownicy
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
