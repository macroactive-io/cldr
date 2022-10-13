<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptHmng - Representation of the Pahawh Hmong script.
 * @psalm-immutable
 */
class ScriptHmng extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Hmng';
    }

    public function number(): string
    {
        return '450';
    }

    public function unicodeName(): string
    {
        return 'Pahawh_Hmong';
    }
}
