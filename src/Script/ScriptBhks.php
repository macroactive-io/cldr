<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptBhks - Representation of the Bhaiksuki script.
 * @psalm-immutable
 */
class ScriptBhks extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Bhks';
    }

    public function number(): string
    {
        return '334';
    }

    public function unicodeName(): string
    {
        return 'Bhaiksuki';
    }
}
