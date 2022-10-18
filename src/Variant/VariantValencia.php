<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Variant;

/**
 * Class VariantValencia - Representation of the Valencia variant of ca-ES.
 * @psalm-immutable
 */
class VariantValencia implements VariantInterface
{
    public function code(): string
    {
        return 'valencia';
    }
}
