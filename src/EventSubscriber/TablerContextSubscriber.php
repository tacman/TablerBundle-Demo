<?php

/*
 * This file is part of the Tabler-Bundle demo.
 * Copyright 2021 Kevin Papst - www.kevinpapst.de
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\EventSubscriber;

use KevinPapst\TablerBundle\Helper\ContextHelper;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RequestStack;
<<<<<<< HEAD
use Symfony\Component\HttpFoundation\Session\SessionInterface;
=======
>>>>>>> main
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;

final class TablerContextSubscriber implements EventSubscriberInterface
{
    private $contextHelper;
    private $requestStack;

    public function __construct(ContextHelper $contextHelper, RequestStack $requestStack)
    {
        $this->contextHelper = $contextHelper;
        $this->requestStack = $requestStack;
<<<<<<< HEAD

=======
>>>>>>> main
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::REQUEST => ['prepareEnvironment', -100],
        ];
    }

    public function prepareEnvironment(RequestEvent $event): void
    {
        if (!$event->isMainRequest()) {
            return;
        }

        $theme = $this->requestStack->getSession()->get('theme');
        if ($theme === null) {
            return;
        }

        $this->contextHelper->setIsDarkMode($theme === 'dark');
    }
}
