<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptBopo - Representation of the Bopomofo script.
 * @psalm-immutable
 */
class ScriptBopo extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Bopo';
    }

    public function number(): string
    {
        return '285';
    }

    public function unicodeName(): string
    {
        return 'Bopomofo';
    }
}
