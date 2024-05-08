<?php

namespace SastrawiTest\StopWordRemover;

use Sastrawi\StopWordRemover\StopWordRemoverFactory;

class StopWordRemoverFactoryTest extends \PHPUnit\Framework\TestCase
{
    protected $factory;

    public function setUp(): void
    {
        $this->factory = new StopWordRemoverFactory();
    }

    public function testCreateStopWordRemover()
    {
        $this->assertInstanceOf(
            'Sastrawi\StopWordRemover\StopWordRemover',
            $this->factory->createStopWordRemover()
        );
    }
}
