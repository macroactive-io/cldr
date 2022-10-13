<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptMani - Representation of the Manichaean script.
 * @psalm-immutable
 */
class ScriptMani extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Mani';
    }

    public function number(): string
    {
        return '139';
    }

    public function unicodeName(): string
    {
        return 'Manichaean';
    }
}
