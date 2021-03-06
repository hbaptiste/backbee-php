<?php

/*
 * Copyright (c) 2011-2015 Lp digital system
 *
 * This file is part of BackBee.
 *
 * BackBee is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * BackBee is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with BackBee. If not, see <http://www.gnu.org/licenses/>.
 *
 * @author Charles Rouillon <charles.rouillon@lp-digital.fr>
 */

namespace BackBee\Cache;

/**
 * Abstract class for cache adapters with extended features
 * as tag and expire date time.
 *
 * @category    BackBee
 *
 * @copyright   Lp digital system
 * @author      c.rouillon <charles.rouillon@lp-digital.fr>
 */
abstract class AbstractExtendedCache extends AbstractCache implements CacheExtendedInterface
{
    /**
     * @{inheritdoc}
     */
    abstract public function removeByTag($tag);

    /**
     * @{inheritdoc}
     */
    abstract public function updateExpireByTag($tag, $lifetime = null);

    /**
     * @{inheritdoc}
     */
    abstract public function getMinExpireByTag($tag, $lifetime = 0);

    /**
     * @{inheritdoc}
     */
    public function saveTag($id, $tag)
    {
        return null;
    }
}
