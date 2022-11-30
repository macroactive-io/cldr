<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageIg;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageIgTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageIg();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('ig', $language->code());
    }
}
