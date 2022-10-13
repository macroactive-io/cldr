<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Variant;

/**
 * Class Posix - Representation of the Posix variant of en-US.
 */
class VariantPosix implements VariantInterface
{
    public function code(): string
    {
        return 'posix';
    }
}
