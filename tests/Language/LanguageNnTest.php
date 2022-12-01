<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageNn;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageNnTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageNn();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('nn', $language->code());
    }
}
