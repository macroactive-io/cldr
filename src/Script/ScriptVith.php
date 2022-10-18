<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Vithkuqi
 *
 * @psalm-immutable
 */
class ScriptVith extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Vith';
    }

    public function number(): string
    {
        return '228';
    }

    public function unicodeName(): string
    {
        return 'Vithkuqi';
    }
}
