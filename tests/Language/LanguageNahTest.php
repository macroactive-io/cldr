<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageNah;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageNahTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageNah();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('nah', $language->code());
    }
}
