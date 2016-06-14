<?php

/*
 * This file is part of the TecnoReady Solutions C.A. package.
 * 
 * (c) www.tecnoready.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tecnocreaciones\Vzla\EntityBundle\Repository;

/**
 * Repositorio de urbanizacion
 *
 * @author Carlos Mendoza <inhack20@gmail.com>
 */
class UrbanizationRepository extends EntityRepository 
{
    public function getQueryUrbanizationByCity($cityId,$parishId){
        $qb = $this->findQueryByCity($cityId);
        $qb
            ->innerJoin("u.parish","u_p")
            ->andWhere("u_p.id = :parish")
            ->setParameter("parish", $parishId)
            ;
        return $qb;
    }
    public function getUrbanizationByCity($cityId,$parishId)
    {
        return $this->getQueryUrbanizationByCity($cityId, $parishId)->getQuery()->getResult();
    }
    public function findQueryByCity($cityId) {
        $qb = $this->getQueryAllActive();
        $qb
            ->innerJoin("u.city","u_c")
            ->andWhere("u_c.id = :city")
            ->setParameter("city", $cityId)
            ;
        $this->addSort($qb);
        return $qb;
    }
    
    protected function getAlias() {
        return 'u';
    }
}
