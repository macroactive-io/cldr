<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptEgyd - Representation of the Egyptian demotic script.
 * @psalm-immutable
 */
class ScriptEgyd extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Egyd';
    }

    public function number(): string
    {
        return '070';
    }
}
