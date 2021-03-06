<?php

/*
 * This file is part of the Alice package.
 *
 * (c) Nelmio <hello@nelm.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nelmio\Alice;

interface ORMInterface
{
    /**
     * Loads a fixture file
     *
     * @param array[object] $objects instance to persist in the DB
     */
    public function persist(array $objects);
}
