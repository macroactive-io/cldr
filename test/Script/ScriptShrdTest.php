<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Script;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Script\ScriptShrd;

use Macroactive\Cldr\Script\ScriptDirection;

class ScriptShrdTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptShrd();

        self::assertSame('Shrd', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('319', $script->number());
        self::assertSame(['𑇐', '𑇑', '𑇒', '𑇓', '𑇔', '𑇕', '𑇖', '𑇗', '𑇘', '𑇙'], $script->numerals());
        self::assertSame('Sharada', $script->unicodeName());
    }
}
