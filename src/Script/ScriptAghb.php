<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptAghb - Representation of the Caucasian Albanian script.
 * @psalm-immutable
 */
class ScriptAghb extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Aghb';
    }

    public function number(): string
    {
        return '239';
    }

    public function unicodeName(): string
    {
        return 'Caucasian_Albanian';
    }
}
