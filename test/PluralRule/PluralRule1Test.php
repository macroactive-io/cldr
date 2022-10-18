<?php

declare(strict_types=1);

namespace Macroactive\Cldr\PluralRule;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the PluralRule1 class
 *
 * @coversNothing
 */
class PluralRule1Test extends TestCase
{
    public function testNumberOfPluralForms(): void
    {
        $plural_rule = new PluralRule1();

        self::assertSame(2, $plural_rule->plurals());
    }

    public function testPluralRules(): void
    {
        $plural_rule = new PluralRule1();

        self::assertSame(0, $plural_rule->plural(1));
        foreach ([0, 2, 3, 4, 5, 6, 7, 8, 9] as $n) {
            self::assertSame(1, $plural_rule->plural($n));
        }
    }
}
