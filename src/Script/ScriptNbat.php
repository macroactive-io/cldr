<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptNbat - Representation of the Nabataean script.
 * @psalm-immutable
 */
class ScriptNbat extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Nbat';
    }

    public function number(): string
    {
        return '159';
    }

    public function unicodeName(): string
    {
        return 'Nabataean';
    }
}
