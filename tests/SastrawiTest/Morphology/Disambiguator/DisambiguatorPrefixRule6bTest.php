<?php
/**
 * Sastrawi (https://github.com/sastrawi/sastrawi)
 *
 * @link      http://github.com/sastrawi/sastrawi for the canonical source repository
 * @license   https://github.com/sastrawi/sastrawi/blob/master/LICENSE The MIT License (MIT)
 */

namespace SastrawiTest\Morphology\Disambiguator;

/**
 * Disambiguate Prefix Rule 6b
 * Rule 6b : terV -> te-rV
 */
class DisambiguatorPrefixRule6bTest extends \PHPUnit\Framework\TestCase
{
    public function setUp(): void
    {
        $this->subject = new \Sastrawi\Morphology\Disambiguator\DisambiguatorPrefixRule6b();
    }

    public function testDisambiguate()
    {
        $this->assertEquals('racun', $this->subject->disambiguate('teracun'));
        $this->assertNull($this->subject->disambiguate('terbalik'));
    }
}
