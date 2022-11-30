<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule7;
use Macroactive\Cldr\Script\ScriptCyrl;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageBe;

class LanguageBeTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageBe();

        self::assertSame(ScriptCyrl::class, $language->defaultScript()::class);
        self::assertSame('be', $language->code());
    }
}
