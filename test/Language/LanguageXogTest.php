<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageXog;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageXogTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageXog();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('xog', $language->code());
    }
}
