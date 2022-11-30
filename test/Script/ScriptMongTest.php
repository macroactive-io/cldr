<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptMong;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptMongTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptMong();

        self::assertSame('Mong', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('145', $script->number());
        self::assertSame(['᠐', '᠑', '᠒', '᠓', '᠔', '᠕', '᠖', '᠗', '᠘', '᠙'], $script->numerals());
        self::assertSame('Mongolian', $script->unicodeName());
    }
}
