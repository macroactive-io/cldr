<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageAf;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageAfTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageAf();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('af', $language->code());
    }
}
