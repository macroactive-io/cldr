<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Variant;

/** @psalm-immutable */
interface VariantInterface
{
    /**
     * @return non-empty-string
     */
    public function code(): string;
}
