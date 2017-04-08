<?php

namespace Mosdef\Helpers\Tests\App\Support;

use Mosdef\Helpers\Support\Pages\Title;
use Mosdef\Helpers\Support\Pages\Meta;

class HelpersTest extends \Tests\TestCase
{
    /**
     * test the various modifications for a page title
     */
    public function testTitle()
    {
        $title = title();
        $this->assertInstanceOf(Title::class, $title);

        $title->append('Test');
        $this->assertEquals('Test', $title->render());

        $title->prepend('Site Name');
        $this->assertEquals('Site Name | Test', $title->render());

        $title->setDelimiter(' - ');
        $this->assertEquals('Site Name - Test', $title->render());
    }

    public function testMeta()
    {
        $meta = meta();
        $this->assertInstanceOf(Meta::class, $meta);

        $meta->add('twitter:description', 'test meta content');
        $this->assertContains('<meta name="twitter:description" content="test meta content">', $meta->render());

        $meta->add('http-equiv', '5; url=http://www.google.com', true);
        $this->assertContains('<meta name="http-equiv" content="5; url=http://www.google.com">', $meta->render());

        $meta->add('http-equiv', '5; url=http://www.google.com', true);
        $this->assertContains('<meta name="http-equiv" content="5; url=http://www.google.com">', $meta->render());
    }
}