<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptSyrc - Representation of the Soyombo script.
 * @psalm-immutable
 */
class ScriptSoyo extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Soyo';
    }

    public function number(): string
    {
        return '329';
    }

    public function unicodeName(): string
    {
        return 'Soyombo';
    }
}
