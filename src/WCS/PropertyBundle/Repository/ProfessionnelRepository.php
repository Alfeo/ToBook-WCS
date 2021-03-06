<?php

namespace WCS\PropertyBundle\Repository;

/**
 * ProfessionnelRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProfessionnelRepository extends \Doctrine\ORM\EntityRepository
{
    public function getLatLng($latitude, $longitude, $radius)
    {

        $qb = $this->createQueryBuilder('LatLng');

        $qb->select('LatLng.profLatitude as lat',
                    'LatLng.profLongitude as lng',
                    'LatLng.profNom as name',
                    'LatLng.profDescriptif as description',
                    'LatLng.profWeb as email')
            ->addSelect('( 6371 * acos(cos(radians(' . $latitude . ')) * cos( radians( LatLng.profLatitude ) ) * cos( radians( LatLng.profLongitude ) - radians(' . $longitude . ') ) + sin( radians(' . $latitude . ') ) * sin( radians( LatLng.profLatitude ) ) ) ) as radius')
            ->having('radius < :radius')
            ->orderBy('radius', 'ASC')
            // ->setFirstResult(0)
            // ->setMaxResults(45)
            ->setParameter('radius', $radius);
        ;
    
        return $qb->getQuery()->getResult();    
    }

    public function getEtablissement($latitude, $longitude, $radius)
    {

        $qb = $this->createQueryBuilder('Detail');

        $qb->select('Detail.id as id',    
                    'Detail.profLatitude as lat',
                    'Detail.profLongitude as lng',
                    'Detail.profNom as name',
                    'Detail.profCode as page',
                    'Detail.profDescriptif as description',
                    'Detail.profEtoiles as etoile',
                    'Detail.profPrixMini as prixmini')
            ->addSelect('( 6371 * acos(cos(radians(' . $latitude . ')) * cos( radians( Detail.profLatitude ) ) * cos( radians( Detail.profLongitude ) - radians(' . $longitude . ') ) + sin( radians(' . $latitude . ') ) * sin( radians( Detail.profLatitude ) ) ) ) as radius')
            ->leftJoin('Detail.profimages', 'profimages')
            ->addSelect('profimages.primImgUrl as path')
            ->having('radius < :radius')
            ->orderBy('radius', 'ASC')
            ->setFirstResult(0)
            ->setMaxResults(150)
            ->setParameter('radius', $radius);
        ;
    
        return $qb->getQuery()->getResult();    
    }

    public function getSortingEtablissement($latitude, $longitude, $radius, $sorting, $direction)
    {

        $qb = $this->createQueryBuilder('Detail');

        $qb->select('Detail.id as id',
                    'Detail.profLatitude as lat',
                    'Detail.profLongitude as lng',
                    'Detail.profNom as name',
                    'Detail.profCode as page',
                    'Detail.profDescriptif as description',
                    'Detail.profEtoiles as etoile',
                    'Detail.profPrixMini as prixmini')
            ->addSelect('( 6371 * acos(cos(radians(' . $latitude . ')) * cos( radians( Detail.profLatitude ) ) * cos( radians( Detail.profLongitude ) - radians(' . $longitude . ') ) + sin( radians(' . $latitude . ') ) * sin( radians( Detail.profLatitude ) ) ) ) as radius')
            ->leftJoin('Detail.profimages', 'profimages')
            ->addSelect('profimages.primImgUrl as path')
            ->having('radius < :radius')
            ->addOrderBy($sorting, $direction)
            ->setParameter('radius', $radius);
        ;
    
        return $qb->getQuery()->getResult();    
    }

    public function getStarEtablissement($latitude, $longitude, $radius, $star, $direction)
    {

        $qb = $this->createQueryBuilder('Detail');

        $qb->select('Detail.id as id',
                    'Detail.profLatitude as lat',
                    'Detail.profLongitude as lng',
                    'Detail.profNom as name',
                    'Detail.profCode as page',
                    'Detail.profDescriptif as description',
                    'Detail.profEtoiles as etoile',
                    'Detail.profPrixMini as prixmini')
            ->addSelect('( 6371 * acos(cos(radians(' . $latitude . ')) * cos( radians( Detail.profLatitude ) ) * cos( radians( Detail.profLongitude ) - radians(' . $longitude . ') ) + sin( radians(' . $latitude . ') ) * sin( radians( Detail.profLatitude ) ) ) ) as radius')
            ->leftJoin('Detail.profimages', 'profimages')
            ->addSelect('profimages.primImgUrl as path')
            ->having('radius < :radius')
            ->addOrderBy($star, $direction)
            // ->setFirstResult(0)
            // ->setMaxResults(15)
            ->setParameter('radius', $radius);
        ;
    
        return $qb->getQuery()->getResult();    
    }
}