<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Variant;

/**
 * Posix variant of en-US.
 *
 * @psalm-immutable
 */
class VariantPosix implements VariantInterface
{
    public function code(): string
    {
        return 'posix';
    }
}
