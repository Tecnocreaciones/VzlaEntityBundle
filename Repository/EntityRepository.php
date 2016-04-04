<?php

/*
 * This file is part of the TecnocreacionesVzlaEntityBundle package.
 * 
 * (c) www.tecnocreaciones.com.ve
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tecnocreaciones\Vzla\EntityBundle\Repository;

use Tecnocreaciones\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository as BaseEntityRepository;

/**
 * Description of BaseRepository
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class EntityRepository extends BaseEntityRepository
{
    function getAllActive() {
        return $this->getQueryAllActive()->getQuery()->getResult();
    }
    
    function getAllInactive() {
        return $this->findBy(array('active' => false));
    }
    
    /**
     * @return \Doctrine\ORM\QueryBuilder
     */
    function getQueryAllActive() {
        $a = $this->getAlias();
        $qb = $this->createQueryBuilder($a);
        $qb
                ->andWhere($a.'.active = :active')
                ->setParameter('active', true);
        return $qb;
    }
    
    protected function addSort(\Doctrine\ORM\QueryBuilder $qb,$field = "description") {
        $qb->orderBy($this->getAlias().".".$field,"ASC");
    }
}
