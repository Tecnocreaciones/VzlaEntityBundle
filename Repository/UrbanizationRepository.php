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
    public function findQueryByCity(\Tecnocreaciones\Vzla\EntityBundle\Entity\City $city = null) {
        $qb = $this->getQueryAllActive();
        $qb
            ->innerJoin("u.city","u_c")
            ->andWhere("u_c.id = :city")
            ->setParameter("city", $city)
            ;
        return $qb;
    }
    
    protected function getAlias() {
        return 'u';
    }
}
