<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptPhli - Representation of the Inscriptional Pahlavi script.
 * @psalm-immutable
 */
class ScriptPhli extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Phli';
    }

    public function number(): string
    {
        return '131';
    }

    public function unicodeName(): string
    {
        return 'Inscriptional_Pahlavi';
    }
}
