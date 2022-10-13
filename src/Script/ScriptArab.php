<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptArab - Representation of the Arabic script.
 * @psalm-immutable
 */
class ScriptArab extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Arab';
    }

    public function numerals(): array
    {
        return ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'];
    }

    public function number(): string
    {
        return '160';
    }

    public function unicodeName(): string
    {
        return 'Arabic';
    }
}
