<?php

namespace Mosdef\Helpers\Tests\App\Support;

use Mosdef\Helpers\Support\Pages\Title;

class HelpersTest extends \Tests\TestCase
{
    public function testTitle()
    {

        $title = title();
        $this->assertInstanceOf(Title::class, $title);

        $title->append('Test');

        $this->assertEquals('Test', $title->render());

    }
}