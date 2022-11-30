<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Language;

use Macroactive\Cldr\Language\LanguageMgo;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

class LanguageMgoTest extends TestCase
{
    public function testProperties(): void
    {
        $language = new LanguageMgo();

        self::assertSame(ScriptLatn::class, $language->defaultScript()::class);
        self::assertSame('mgo', $language->code());
    }
}
