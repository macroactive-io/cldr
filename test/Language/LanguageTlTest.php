<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRuleTagalog;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageTl;

class LanguageTlTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageTl();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('tl', $language->code());
    }
}
