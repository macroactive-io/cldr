<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptMult - Representation of the  Multani script.
 * @psalm-immutable
 */
class ScriptMult extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Mult';
    }

    public function number(): string
    {
        return '323';
    }

    public function unicodeName(): string
    {
        return 'Multani';
    }
}
