<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptSidd - Representation of the Siddham, Siddhaṃ, Siddhamātṛkā script.
 * @psalm-immutable
 */
class ScriptSidd extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Sidd';
    }

    public function number(): string
    {
        return '302';
    }

    public function unicodeName(): string
    {
        return 'Siddham';
    }
}
