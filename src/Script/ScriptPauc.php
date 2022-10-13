<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptPauc - Representation of the Pau Cin Hau script.
 * @psalm-immutable
 */
class ScriptPauc extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Pauc';
    }

    public function number(): string
    {
        return '263';
    }

    public function unicodeName(): string
    {
        return 'Pau_Cin_Hau';
    }
}
