<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptBeng;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageBn;

class LanguageBnTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageBn();

        self::assertSame(ScriptBeng::class, $language->defaultScript()::class);
        self::assertSame('bn', $language->code());
    }
}
