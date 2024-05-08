<?php

namespace SastrawiTest\Stemmer;

use Sastrawi\Stemmer\StemmerFactory;

class StemmerFactoryTest extends \PHPUnit\Framework\TestCase
{
    protected $factory;

    public function setUp(): void
    {
        $this->factory = new StemmerFactory();
    }

    public function testCreateStemmerReturnStemmer()
    {
        $stemmer = $this->factory->createStemmer();

        $this->assertNotNull($stemmer);
        $this->assertInstanceOf('Sastrawi\Stemmer\StemmerInterface', $stemmer);
    }
}
