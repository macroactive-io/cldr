<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule7;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageBs;

class LanguageBsTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageBs();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('bs', $language->code());
    }
}
