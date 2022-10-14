<?php

declare(strict_types=1);

namespace Fisharebest\Localization\PluralRule;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the PluralRule2 class
 *
 * @coversNothing
 */
class PluralRule2Test extends TestCase
{
    public function testNumberOfPluralForms(): void
    {
        $plural_rule = new PluralRule2();

        self::assertSame(2, $plural_rule->plurals());
    }

    public function testPluralRules(): void
    {
        $plural_rule = new PluralRule2();

        foreach ([0, 1] as $n) {
            self::assertSame(0, $plural_rule->plural($n));
        }
        foreach ([2, 3, 4, 5, 6, 7, 8, 9] as $n) {
            self::assertSame(1, $plural_rule->plural($n));
        }
    }
}
