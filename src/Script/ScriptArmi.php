<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptArmi - Representation of the Imperial Aramaic script.
 * @psalm-immutable
 */
class ScriptArmi extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Armi';
    }

    public function number(): string
    {
        return '124';
    }

    public function unicodeName(): string
    {
        return 'Imperial_Aramaic';
    }
}
