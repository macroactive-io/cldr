<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptPcun - Representation of the Proto Cuneiform script.
 * @psalm-immutable
 */
class ScriptPcun extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Pcun';
    }

    public function number(): string
    {
        return '015';
    }
}
