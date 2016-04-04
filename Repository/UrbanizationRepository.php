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
    public function getUrbanizationByCity($cityId)
    {
        return $this->findQueryByCity($cityId)->getQuery()->getResult();
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
