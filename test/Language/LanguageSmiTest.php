<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageSmi;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageSmiTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageSmi();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('smi', $language->code());
    }
}
