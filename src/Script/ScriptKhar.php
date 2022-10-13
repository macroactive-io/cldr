<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptKhar - Representation of the Kharoshthi script.
 * @psalm-immutable
 */
class ScriptKhar extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Khar';
    }

    public function number(): string
    {
        return '305';
    }

    public function unicodeName(): string
    {
        return 'Kharoshthi';
    }
}
