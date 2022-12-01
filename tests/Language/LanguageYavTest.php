<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageYav;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageYavTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageYav();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('yav', $language->code());
    }
}
