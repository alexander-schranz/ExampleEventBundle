<?php

/*
 * This file is part of Sulu.
 *
 * (c) MASSIVE ART WebServices GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Sulu\Bundle\ExampleEventBundle\Tests\Unit\Model\Query;

use PHPUnit\Framework\TestCase;
use Sulu\Bundle\ExampleEventBundle\Model\Query\FindEventQuery;

class FindEventQueryTest extends TestCase
{
    public function testGetId()
    {
        $command = new FindEventQuery('123-123-123');

        $this->assertEquals('123-123-123', $command->getId());
    }
}
