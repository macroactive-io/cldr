<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Gujarati
 *
 * @psalm-immutable
 */
class ScriptGujr extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Gujr';
    }

    public function numerals(): array
    {
        return ['૦', '૧', '૨', '૩', '૪', '૫', '૬', '૭', '૮', '૯'];
    }

    public function number(): string
    {
        return '320';
    }

    public function unicodeName(): string
    {
        return 'Gujarati';
    }
}
