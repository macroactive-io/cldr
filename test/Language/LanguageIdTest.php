<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageId;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageIdTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageId();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('id', $language->code());
    }
}
