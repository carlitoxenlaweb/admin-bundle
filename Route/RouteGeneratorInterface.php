<?php

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\AdminBundle\Route;

use Sonata\AdminBundle\Admin\AdminInterface;

/**
 * Interface RouteGeneratorInterface.
 *
 * @author  Thomas Rabaix <thomas.rabaix@sonata-project.org>
 */
interface RouteGeneratorInterface
{
    /**
     * @param AdminInterface $admin
     * @param string         $name
     * @param array          $parameters
     * @param bool           $absolute
     *
     * @return string
     */
    public function generateUrl(AdminInterface $admin, $name, array $parameters = array(), $absolute = false);

    /**
     * @param AdminInterface $admin
     * @param string         $name
     * @param array          $parameters
     * @param bool           $absolute
     *
     * @return array
     */
    public function generateMenuUrl(AdminInterface $admin, $name, array $parameters = array(), $absolute = false);

    /**
     * @param string $name
     * @param array  $parameters
     * @param bool   $absolute
     *
     * @return string
     */
    public function generate($name, array $parameters = array(), $absolute = false);

    /**
     * @param AdminInterface $admin
     * @param string         $name
     *
     * @return bool
     */
    public function hasAdminRoute(AdminInterface $admin, $name);
}
