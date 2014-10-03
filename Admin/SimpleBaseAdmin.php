<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tecnocreaciones\Vzla\EntityBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

/**
 * Base de admin de maestros de venezuela
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
abstract class SimpleBaseAdmin extends Admin {
    const FORMAT_DATETIME = 'Y-m-d h:i:s a';
    
    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('description')
            ->add('createdAt','datetime',array(
                'format' => self::FORMAT_DATETIME
            ))
            ->add('updatedAt','datetime',array(
                'format' => self::FORMAT_DATETIME
            ))
            ->add('active',null,array('editable' => true))
        ;
    }
}
