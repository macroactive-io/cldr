<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageLkt;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageLktTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageLkt();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('lkt', $language->code());
    }
}