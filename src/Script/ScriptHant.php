<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptHant - Representation of the Traditional Han script.
 * @psalm-immutable
 */
class ScriptHant extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Hant';
    }

    public function number(): string
    {
        return '502';
    }
}
