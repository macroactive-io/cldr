<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptOugr - Representation of the Old Uyghur script.
 * @psalm-immutable
 */
class ScriptOugr extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Ougr';
    }

    public function number(): string
    {
        return '143';
    }

    public function unicodeName(): string
    {
        return 'Old_Uyghur';
    }
}
