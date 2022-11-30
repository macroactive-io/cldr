<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageSq;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageSqTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageSq();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('sq', $language->code());
    }
}
