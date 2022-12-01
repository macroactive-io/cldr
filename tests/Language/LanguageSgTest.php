<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageSg;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageSgTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageSg();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('sg', $language->code());
    }
}
