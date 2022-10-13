<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptMarc - Representation of the Marchen script.
 */
class ScriptMarc extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Marc';
    }

    public function number()
    {
        return '332';
    }

    public function unicodeName()
    {
        return 'Marchen';
    }
}
