<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptEgyh - Representation of the Egyptian hieratic script.
 * @psalm-immutable
 */
class ScriptEgyh extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Egyh';
    }

    public function number(): string
    {
        return '060';
    }
}
