<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSund - Representation of the Sundanese script.
 * @psalm-immutable
 */
class ScriptSund extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Sund';
    }

    public function numerals(): array
    {
        return ['᮰', '᮱', '᮲', '᮳', '᮴', '᮵', '᮶', '᮷', '᮸', '᮹'];
    }

    public function number(): string
    {
        return '362';
    }

    public function unicodeName(): string
    {
        return 'Sundanese';
    }
}
