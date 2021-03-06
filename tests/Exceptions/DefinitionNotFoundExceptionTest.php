<?php

namespace Watson\Breadcrumbs\Tests\Exceptions;

use Watson\Breadcrumbs\Exceptions\DefinitionNotFoundException;
use Watson\Breadcrumbs\Tests\TestCase;

class DefinitionNotFoundExceptionTest extends TestCase
{
    /** @test */
    function it_can_be_instantiated()
    {
        $result = new DefinitionNotFoundException;

        $this->assertInstanceOf(DefinitionNotFoundException::class, $result);
    }
}
