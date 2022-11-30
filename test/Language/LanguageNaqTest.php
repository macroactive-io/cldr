<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageNaq;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageNaqTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageNaq();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('naq', $language->code());
    }
}
