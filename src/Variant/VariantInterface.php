<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Variant;

interface VariantInterface
{
    /**
     * @return non-empty-string
     */
    public function code(): string;
}
