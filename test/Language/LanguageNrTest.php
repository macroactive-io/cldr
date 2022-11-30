<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageNr;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageNrTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageNr();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('nr', $language->code());
    }
}
