<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageEs;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageEsTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageEs();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('es', $language->code());
    }
}
