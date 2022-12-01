<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageCy;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageCyTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageCy();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('cy', $language->code());
    }
}
