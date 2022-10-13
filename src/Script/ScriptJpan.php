<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptJpan - Representation of the Japanese script.
 * @psalm-immutable
 */
class ScriptJpan extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Jpan';
    }

    public function number(): string
    {
        return '413';
    }
}
