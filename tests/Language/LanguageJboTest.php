<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageJbo;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageJboTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageJbo();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('jbo', $language->code());
    }
}
