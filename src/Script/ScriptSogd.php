<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSogd - Representation of the Sogdian script.
 * @psalm-immutable
 */
class ScriptSogd extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Sogd';
    }

    public function number(): string
    {
        return '141';
    }

    public function unicodeName(): string
    {
        return 'Sogdian';
    }
}
