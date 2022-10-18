<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptGuru - Representation of the Gurmukhi script.
 * @psalm-immutable
 */
class ScriptGuru extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Guru';
    }

    public function numerals(): array
    {
        return ['੦', '੧', '੨', '੩', '੪', '੫', '੬', '੭', '੮', '੯'];
    }

    public function number(): string
    {
        return '310';
    }

    public function unicodeName(): string
    {
        return 'Gurmukhi';
    }
}
