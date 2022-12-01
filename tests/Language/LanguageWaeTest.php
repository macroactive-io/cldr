<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageWae;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageWaeTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageWae();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('wae', $language->code());
    }
}
