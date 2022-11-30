<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageEs;

class LanguageEsTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageEs();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('es', $language->code());
    }
}
