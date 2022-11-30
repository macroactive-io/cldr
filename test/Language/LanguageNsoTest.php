<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageNso;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageNsoTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageNso();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('nso', $language->code());
    }
}
