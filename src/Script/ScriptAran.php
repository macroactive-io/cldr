<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptAran - Representation of the Arabic (Nastaliq) script.
 * @psalm-immutable
 */
class ScriptAran extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Aran';
    }

    public function number(): string
    {
        return '161';
    }
}
