<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptGong;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptGongTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptGong();

        self::assertSame('Gong', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('312', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Gunjala_Gondi', $script->unicodeName());
    }
}
