<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptMand - Representation of the Mandaic, Mandaean script.
 * @psalm-immutable
 */
class ScriptMand extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Mand';
    }

    public function number(): string
    {
        return '140';
    }

    public function unicodeName(): string
    {
        return 'Mandaic';
    }
}
