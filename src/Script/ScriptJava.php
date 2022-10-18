<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Javanese
 *
 * @psalm-immutable
 */
class ScriptJava extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Java';
    }

    public function numerals(): array
    {
        return ['꧐', '꧑', '꧒', '꧓', '꧔', '꧕', '꧖', '꧗', '꧘', '꧙'];
    }

    public function number(): string
    {
        return '361';
    }

    public function unicodeName(): string
    {
        return 'Javanese';
    }
}
