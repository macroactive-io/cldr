<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptLeke - Representation of the Leke script.
 * @psalm-immutable
 */
class ScriptLeke extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Leke';
    }

    public function number(): string
    {
        return '364';
    }
}
