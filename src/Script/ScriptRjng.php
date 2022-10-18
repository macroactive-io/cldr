<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptRjng - Representation of the Rejang (Redjang, Kaganga) script.
 * @psalm-immutable
 */
class ScriptRjng extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Rjng';
    }

    public function number(): string
    {
        return '363';
    }

    public function unicodeName(): string
    {
        return 'Rejang';
    }
}
