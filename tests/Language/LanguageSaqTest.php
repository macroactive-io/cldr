<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageSaq;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageSaqTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageSaq();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('saq', $language->code());
    }
}
