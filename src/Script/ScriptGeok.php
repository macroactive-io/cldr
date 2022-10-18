<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptGeok - Representation of the Khutsuri (Asomtavruli and Nuskhuri) script.
 * @psalm-immutable
 */
class ScriptGeok extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Geok';
    }

    public function number(): string
    {
        return '241';
    }

    public function unicodeName(): string
    {
        return 'Georgian';
    }
}
