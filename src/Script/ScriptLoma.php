<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptLoma - Representation of the Loma script.
 */
class ScriptLoma extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Loma';
    }

    public function number()
    {
        return '437';
    }
}
