<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptBeng - Representation of the Bengali script.
 * @psalm-immutable
 */
class ScriptBeng extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Beng';
    }

    public function numerals(): array
    {
        return ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
    }

    public function number(): string
    {
        return '325';
    }

    public function unicodeName(): string
    {
        return 'Bengali';
    }
}
