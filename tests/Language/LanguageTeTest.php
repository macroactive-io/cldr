<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageTe;
use Macroactive\Cldr\Script\ScriptTelu;
use PHPUnit\Framework\TestCase;

class LanguageTeTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageTe();

        self::assertSame(ScriptTelu::class, $language->defaultScript()::class);
        self::assertSame('te', $language->code());
    }
}
