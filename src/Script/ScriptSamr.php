<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSamr - Representation of the Samaritan script.
 * @psalm-immutable
 */
class ScriptSamr extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Samr';
    }

    public function number(): string
    {
        return '123';
    }

    public function unicodeName(): string
    {
        return 'Samaritan';
    }
}
