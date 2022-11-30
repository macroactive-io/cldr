<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageFr;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageFrTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageFr();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('fr', $language->code());
    }
}
