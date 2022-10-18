<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Bassa Vah
 *
 * @psalm-immutable
 */
class ScriptBass extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Bass';
    }

    public function number(): string
    {
        return '259';
    }

    public function unicodeName(): string
    {
        return 'Bassa_Vah';
    }
}
