<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptKawi - Representation of the Kawi script.
 * @psalm-immutable
 */
class ScriptKawi extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Kawi';
    }

    public function number(): string
    {
        return '368';
    }
}
