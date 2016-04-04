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
 * Repositorio de codigo postal
 *
 * @author Carlos Mendoza <inhack20@gmail.com>
 */
class PostalCodeRepository extends EntityRepository 
{
    protected function getAlias() {
        return "pc";
    }
}
