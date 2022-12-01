<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageMfe;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageMfeTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageMfe();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('mfe', $language->code());
    }
}
