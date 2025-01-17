<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Oriya
 *
 * @psalm-immutable
 */
class ScriptOrya extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Orya';
    }

    public function numerals(): array
    {
        return ['୦', '୧', '୨', '୩', '୪', '୫', '୬', '୭', '୮', '୯'];
    }

    public function number(): string
    {
        return '327';
    }

    public function unicodeName(): string
    {
        return 'Oriya';
    }
}
