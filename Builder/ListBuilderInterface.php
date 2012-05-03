<?php

/*
 * This file is part of the Sonata package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\AdminBundle\Builder;

use Sonata\AdminBundle\Admin\FieldDescriptionInterface;
use Sonata\AdminBundle\Model\ModelManagerInterface;
use Sonata\AdminBundle\Admin\AdminInterface;
use Sonata\AdminBundle\Admin\FieldDescriptionCollection;


interface ListBuilderInterface
{
    /**
     * @abstract
     * @param array $options
     * @return \Sonata\AdminBundle\Admin\FieldDescriptionCollection
     */
    function getBaseList(array $options = array());

    /**
     * @abstract
     * @param \Sonata\AdminBundle\Admin\FieldDescriptionCollection $list
     * @param null|mixed $type
     * @param \Sonata\AdminBundle\Admin\FieldDescriptionInterface $fieldDescription
     * @param \Sonata\AdminBundle\Admin\AdminInterface $admin
     */
    function addField(FieldDescriptionCollection $list, $type = null, FieldDescriptionInterface $fieldDescription, AdminInterface $admin);

    /**
     * @abstract
     * @param \Sonata\AdminBundle\Admin\AdminInterface $admin
     * @param \Sonata\AdminBundle\Admin\FieldDescriptionInterface $fieldDescription
     */
    function fixFieldDescription(AdminInterface $admin, FieldDescriptionInterface $fieldDescription);
}
