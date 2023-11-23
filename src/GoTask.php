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
            $path = "bin" . DIRECTORY_SEPARATOR . $directory . DIRECTORY_SEPARATOR . "a.exe";
        } else if (strpos($os, 'LINUX') === 0) {
            $directory = "linux";
            $path = "bin" . DIRECTORY_SEPARATOR . $directory . DIRECTORY_SEPARATOR . "a";
        } else if (strpos($os, 'DARWIN') === 0) {
            $directory = "mac";
            $path = "bin" . DIRECTORY_SEPARATOR . $directory . DIRECTORY_SEPARATOR . "a";
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
