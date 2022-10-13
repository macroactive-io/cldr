<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptCyrs - Representation of the Cyrillic (Old Church Slavonic variant) script.
 * @psalm-immutable
 */
class ScriptCyrs extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Cyrs';
    }

    public function number(): string
    {
        return '221';
    }
}
