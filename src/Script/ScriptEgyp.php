<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptEgyp - Representation of the Egyptian hieroglyphs script.
 * @psalm-immutable
 */
class ScriptEgyp extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Egyp';
    }

    public function number(): string
    {
        return '050';
    }

    public function unicodeName(): string
    {
        return 'Egyptian_Hieroglyphs';
    }
}
