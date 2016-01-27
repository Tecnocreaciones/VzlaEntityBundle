<?php

/*
 * This file is part of the TecnoReady Solutions C.A. package.
 * 
 * (c) www.tecnoready.com
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
 * Description of UrbanizationAdmin
 *
 * @author Carlos Mendoza <inhack20@gmail.com>
 */
class UrbanizationAdmin extends SimpleBaseAdmin 
{
    protected function configureFormFields(FormMapper $formMapper) 
    {
        $formMapper
            ->add('description')
            ->add('city')
            ->add('active')
        ;
    }
    protected function configureDatagridFilters(DatagridMapper $filter) {
        $filter
            ->add('description')
            ->add('city')
            ->add('active')
        ;
    }
    
    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
            ->addIdentifier('description')
            ->add('city', 'entity', array(
                'associated_property' => 'description',
                'class' => 'Tecnocreaciones\Vzla\EntityBundle\Entity\City',
            ))
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
