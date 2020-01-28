<?php


namespace Filler\Installer;

use Symfony\Component\Filesystem\Filesystem;

class Installer
{
    public static function postInstall()
    {
        echo "postInstall is started";
        $fs = new Filesystem;
        $fs->mkdir('public');
        $fs->copy('vendor/shurupov/filler/public/index.php', 'public/index.php');
    }
}