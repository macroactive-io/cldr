<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests;

use ZipArchive;

use function basename;
use function file_exists;
use function file_get_contents;
use function file_put_contents;
use function is_dir;
use function is_file;
use function is_readable;
use function is_writable;
use function mkdir;
use function rename;
use function sprintf;

class TestCase extends \PHPUnit\Framework\TestCase
{
    private const CLDR_VERSION = 42;
    private const FILES        = [
        'tools/cldr-code/src/main/resources/org/unicode/cldr/util/data/language-subtag-registry',
        'common/supplemental/plurals.xml',
        'common/supplemental/supplementalData.xml',
        'common/main',
    ];

    protected function getSubtagRegistry(): string
    {
        return self::getCachedFile('language-subtag-registry');
    }

    protected function getSupplementalData(): string
    {
        return self::getCachedFile('supplementalData.xml');
    }

    protected function getPluralsData(): string
    {
        return self::getCachedFile('plurals.xml');
    }

    /**
     * @return string[]
     */
    protected function getMainCldrFiles(): array
    {
        if (!is_dir(__DIR__ . '/data/main')) {
            self::getCachedCldrData();
        }

        return glob(__DIR__ . '/data/main/*.xml');
    }

    private static function getCachedCldrData(): void
    {
        $dataDir = __DIR__ . '/data/';
        $tempDir = $dataDir . 'temp/';

        if (!is_dir($tempDir)) {
            self::assertTrue(mkdir($tempDir));
        }

        self::assertTrue(is_writable($tempDir));

        $cldrArchive = sprintf('%s%d.zip', $tempDir, self::CLDR_VERSION);

        if (!is_file($cldrArchive)) {
            $url  = sprintf('https://github.com/unicode-org/cldr/archive/refs/tags/release-%s.zip', self::CLDR_VERSION);
            $data = file_get_contents($url);
            self::assertIsString($data);
            self::assertNotFalse(
                file_put_contents($cldrArchive, $data)
            );
        }

        self::assertTrue(is_readable($cldrArchive));
        $archive = new ZipArchive();
        $archive->open($cldrArchive);

        self::assertTrue($archive->extractTo($dataDir));

        foreach (self::FILES as $filePath) {
            self::moveFile($dataDir, $filePath);
        }

        echo 'There is tests/data/test directory is still containing test files';
    }

    private static function getCachedFile(string $filePath): string
    {
        $file = __DIR__ . '/data/' . $filePath;

        if (!file_exists($file)) {
            self::getCachedCldrData();
        }

        $data = file_get_contents($file);
        self::assertIsString($data);

        return $data;
    }

    private static function moveFile(string $dataDir, string $filePath): void
    {
        $fullPath = sprintf($dataDir . 'cldr-release-%d/%s', self::CLDR_VERSION, $filePath);
        $fileName = basename($filePath);
        self::assertTrue(rename($fullPath, $dataDir . $fileName));
    }
}
