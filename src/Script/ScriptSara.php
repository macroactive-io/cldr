<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSara - Representation of the Sarati script.
 * @psalm-immutable
 */
class ScriptSara extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Sara';
    }

    public function number(): string
    {
        return '292';
    }
}
