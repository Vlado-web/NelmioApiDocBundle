<?php

/*
 * This file is part of the NelmioApiDocBundle package.
 *
 * (c) Nelmio
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nelmio\ApiDocBundle\PropertyDescriber;

use OpenApi\Annotations\Schema;
use Symfony\Component\PropertyInfo\Type;

interface PropertyDescriberInterface
{
    /**
     * @param Type[] $types
     * @param Schema $schema Allows to make changes inside of the schema (e.g. adding required fields)
     */
    public function describe(array $types, Schema $property, array $groups = null /* , ?Schema $schema = null */);

    /**
     * @param Type[] $types
     */
    public function supports(array $types): bool;
}
