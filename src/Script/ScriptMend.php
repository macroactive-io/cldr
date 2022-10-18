<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Mende Kikakui
 *
 * @psalm-immutable
 */
class ScriptMend extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Mend';
    }

    public function number(): string
    {
        return '438';
    }

    public function unicodeName(): string
    {
        return 'Mende_Kikakui';
    }
}
