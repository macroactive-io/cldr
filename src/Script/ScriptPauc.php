<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Pau Cin Hau
 *
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
