<?php
/**
 * Created by PhpStorm.
 * User: fredrsf
 * Date: 27.05.16
 * Time: 21:15
 */

namespace AppBundle\Repository;


use AppBundle\Entity\Genus;
use Doctrine\ORM\EntityRepository;

class GenusNoteRepository extends EntityRepository
{
    /**
     * @param Genus $genus
     * @return GenusNote[]
     */
    public function findAllRecentNotesForGenus(Genus $genus)
    {
        return $this->createQueryBuilder('genus_note')
                ->andWhere('genus_note.genus = :genus')
                ->setParameter('genus', $genus)
                ->andWhere('genus_note.createdAt > :recentDate')
                ->setParameter('recentDate', new \DateTime('-3 months'))
                ->getQuery()
                ->execute();
    }
}