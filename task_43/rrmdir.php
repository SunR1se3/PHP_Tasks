<?php

declare(strict_types=1);

function rrmdir(string $path) : void {
    $it = new RecursiveDirectoryIterator($path);
    $files = new RecursiveIteratorIterator($it,
        RecursiveIteratorIterator::CHILD_FIRST);

    foreach($files as $file) {
        if ($file->getFilename() === '.' || $file->getFilename() === '..') {
            continue;
        }
        if ($file->isDir()){
            rmdir($file->getRealPath());
        } else {
            unlink($file->getRealPath());
        }
    }
    rmdir($path);
}

rrmdir("G:\\dsa");