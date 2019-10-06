<?php


namespace Filler\Installer;


use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\Filesystem\Filesystem;

class Installer
{
    public static function postInstall(Event $event)
    {
        $fs = new Filesystem;
        $fs->mkdir('public');
        $fs->copy('vendor/shurupov/filler/index.php', 'public/index.php');
    }
}