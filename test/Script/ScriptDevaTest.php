<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

class ScriptDevaTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptDeva();

        self::assertSame('Deva', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('315', $script->number());
        self::assertSame(['०', '१', '२', '३', '४', '५', '६', '७', '८', '९'], $script->numerals());
        self::assertSame('Devanagari', $script->unicodeName());
    }
}
