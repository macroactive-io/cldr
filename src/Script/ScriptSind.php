<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSind - Representation of the Khudawadi, Sindhi script.
 * @psalm-immutable
 */
class ScriptSind extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Sind';
    }

    public function number(): string
    {
        return '318';
    }

    public function unicodeName(): string
    {
        return 'Khudawadi';
    }
}
