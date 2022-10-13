<?php

declare(strict_types=1);

namespace Fisharebest\Localization\PluralRule;

use DomainException;

/**
 * Class PluralRuleUnknown - used by languages for which the plural rules are not known.
 *
 * We cannot use this language for translation, but we can use its other attributes.
 */
class PluralRuleUnknown implements PluralRuleInterface
{
    public function plurals(): int
    {
        throw new DomainException('No plural rule defined for this language');
    }

    public function plural(int $number): int
    {
        throw new DomainException('No plural rule defined for this language');
    }
}
