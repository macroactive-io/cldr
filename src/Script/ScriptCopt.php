<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptCopt - Representation of the Coptic script.
 * @psalm-immutable
 */
class ScriptCopt extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Copt';
    }

    public function number(): string
    {
        return '204';
    }

    public function unicodeName(): string
    {
        return 'Coptic';
    }
}
