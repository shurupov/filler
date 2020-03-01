<?php


namespace Filler\Installer;

use Composer\Script\Event;
use Symfony\Component\Filesystem\Filesystem;

class Installer
{
    public static function postInstall(Event $event)
    {
        echo "postInstall is started";
        $fs = new Filesystem;
        $fs->mkdir('public');
        $fs->copy('vendor/shurupov/filler/public/index.php', 'public/index.php');
        $fs->mkdir('data');
        $fs->copy('vendor/shurupov/filler/data/page.json', 'data/page.json');
    }
}