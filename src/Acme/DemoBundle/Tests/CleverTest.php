<?php

namespace Acme\DemoBundle\Tests;

final class CleverTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @depends testB
     */
    public function testA()
    {
        $this->addToAssertionCount(2);
    }

    public function testB()
    {
        $this->addToAssertionCount(3);
    }
}