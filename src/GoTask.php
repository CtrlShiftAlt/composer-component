<?php

namespace CtrlShiftAlt\MyComponent;

class GoTask
{
    public static function getOS()
    {
        return strtoupper(PHP_OS);
    }

    public static function getPath()
    {
        $os = self::getOS();
        $directory = '';
        if (strpos($os, 'WIN') === 0) {
            $directory = "windows";
            $path = __DIR__ . DIRECTORY_SEPARATOR . "bin" . DIRECTORY_SEPARATOR . $directory . DIRECTORY_SEPARATOR . "a.exe";
        } else if (strpos($os, 'LINUX') === 0) {
            $directory = "linux";
            $path = __DIR__ . DIRECTORY_SEPARATOR . "bin" . DIRECTORY_SEPARATOR . $directory . DIRECTORY_SEPARATOR . "a";
        } else if (strpos($os, 'DARWIN') === 0) {
            $directory = "mac";
            $path = __DIR__ . DIRECTORY_SEPARATOR . "bin" . DIRECTORY_SEPARATOR . $directory . DIRECTORY_SEPARATOR . "a";
        } else {
            return "Unknown OS";
        }
        return $path;
    }

    public static function run()
    {
        $input = self::getPath();
        system($input);
    }
}
