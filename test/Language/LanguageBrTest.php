<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\PluralRule\PluralRule16;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Language\LanguageBr;

class LanguageBrTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageBr();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('br', $language->code());
    }
}
