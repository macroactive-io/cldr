<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageKl;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageKlTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageKl();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('kl', $language->code());
    }
}
