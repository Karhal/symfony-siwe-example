<?php

namespace App\EventListener;

use Karhal\Web3ConnectBundle\Event\DataInitializedEvent;

class Web3LoginEventListener
{
    public function onWeb3userDataInitialized(DataInitializedEvent $event)
    {
        $event->setData(['fhh' => 'hiuuihjk']);
    }
}