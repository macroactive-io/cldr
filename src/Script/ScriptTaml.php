<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptTaml - Representation of the Tamil script.
 * @psalm-immutable
 */
class ScriptTaml extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Taml';
    }

    public function numerals(): array
    {
        return ['௦', '௧', '௨', '௩', '௪', '௫', '௬', '௭', '௮', '௯'];
    }

    public function number(): string
    {
        return '346';
    }

    public function unicodeName(): string
    {
        return 'Tamil';
    }
}
