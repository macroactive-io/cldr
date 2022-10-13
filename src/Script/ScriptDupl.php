<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptDupl - Representation of the Duployan shorthand, Duployan stenography script.
 * @psalm-immutable
 */
class ScriptDupl extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Dupl';
    }

    public function number(): string
    {
        return '755';
    }

    public function unicodeName(): string
    {
        return 'Duployan';
    }
}
