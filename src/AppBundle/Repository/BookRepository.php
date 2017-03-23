<?php

namespace AppBundle\Repository;

/**
 * BookRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BookRepository extends \Doctrine\ORM\EntityRepository {

    public function findLast($limit) {
        return $this->getEntityManager()
                        ->createQueryBuilder()
                        ->select('b', 'a')
                        ->from('AppBundle:Book', 'b')
                        ->innerJoin('b.author', 'a')
                        ->orderBy('b.createdAt', 'DESC')
                        ->setMaxResults($limit)
                        ->getQuery()
                        ->getResult()
        ;
    }

    public function suggestBook($book) {
        $qb = $this->getEntityManager()->createQueryBuilder();

            $in = $this->getEntityManager()
                        ->createQueryBuilder()
                        ->select('b', 'a')
                        ->from('AppBundle:Book', 'b')
                        ->innerJoin('b.author', 'a')
                        ->orderBy('b.createdAt', 'DESC')
                        ->getQuery()
                        ->getResult();

            return $qb->select('b')
                        ->from('AppBundle:Book', 'b')
                        ->where($qb->expr()->notIn('b.id', $book))
                        ->getQuery()
                        ->getResult();

    }
}
