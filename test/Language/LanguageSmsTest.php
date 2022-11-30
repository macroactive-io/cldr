<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageSms;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageSmsTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageSms();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('sms', $language->code());
    }
}
