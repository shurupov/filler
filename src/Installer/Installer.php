<?php


namespace Filler\Installer;


use Symfony\Contracts\EventDispatcher\Event;
use Symfony\Component\Filesystem\Filesystem;

class Installer
{
    /**
     * @param Event $event
     */
    public static function postInstall(Event $event)
    {
        echo "postInstall is started";
        $fs = new Filesystem;
        $fs->mkdir('public');
        $fs->copy('vendor/shurupov/filler/index.php', 'public/index.php');
    }
}