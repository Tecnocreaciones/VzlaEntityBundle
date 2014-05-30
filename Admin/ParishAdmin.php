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
 * Description of ParishAdmin
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class ParishAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('description', 'text', array('label' => 'Description'))
            ->add('municipality', 'entity', array(
                'property' => 'description',
                'class' => 'Tecnocreaciones\Vzla\EntityBundle\Entity\Municipality',
            ))
            ->add('active')
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('description')
            ->add('municipality',null,array(),'entity', array(
                'property' => 'description',
                'class' => 'Tecnocreaciones\Vzla\EntityBundle\Entity\Municipality',
            ))
            ->add('active')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('description')
            ->add('municipality', 'entity', array(
                'associated_property' => 'description',
                'class' => 'Tecnocreaciones\Vzla\EntityBundle\Entity\Municipality',
            ))
            ->add('createdAt')
            ->add('updatedAt')
            ->add('active')
        ;
    }
}
