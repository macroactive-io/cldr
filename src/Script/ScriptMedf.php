<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Medefaidrin
 *
 * @psalm-immutable
 */
class ScriptMedf extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Medf';
    }

    public function number(): string
    {
        return '265';
    }

    public function unicodeName(): string
    {
        return 'Medefaidrin';
    }
}
