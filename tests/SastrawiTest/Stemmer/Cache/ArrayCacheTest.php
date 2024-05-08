<?php

namespace SastrawiTest\Stemmer\Cache;

class ArrayCacheTest extends \PHPUnit\Framework\TestCase
{
    protected $arrayCache;

    public function setUp(): void
    {
        $this->arrayCache = new \Sastrawi\Stemmer\Cache\ArrayCache();
    }

    public function testInstanceOfCacheInterface()
    {
        $this->assertInstanceOf('Sastrawi\Stemmer\Cache\CacheInterface', $this->arrayCache);
    }

    public function testSetGetHas()
    {
        $this->assertFalse($this->arrayCache->has('abc'));
        $this->assertNull($this->arrayCache->get('abc'));

        $this->arrayCache->set('abc', 123);
        $this->assertTrue($this->arrayCache->has('abc'));
        $this->assertEquals(123, $this->arrayCache->get('abc'));
    }
}
