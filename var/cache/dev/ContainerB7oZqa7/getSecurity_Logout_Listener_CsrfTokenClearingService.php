<?php

<<<<<<< HEAD:var/cache/dev/Container5wCsSfz/getSecurity_Logout_Listener_CsrfTokenClearingService.php
namespace Container5wCsSfz;
=======
namespace ContainerB7oZqa7;
>>>>>>> 90b6194576a24a0391cc0af66edbdae8cc0d6d14:var/cache/dev/ContainerB7oZqa7/getSecurity_Logout_Listener_CsrfTokenClearingService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Logout_Listener_CsrfTokenClearingService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.logout.listener.csrf_token_clearing' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'CsrfTokenClearingLogoutListener.php';

        return $container->privates['security.logout.listener.csrf_token_clearing'] = new \Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener(($container->privates['security.csrf.token_storage'] ?? $container->load('getSecurity_Csrf_TokenStorageService')));
    }
}
