<?php

<<<<<<< HEAD:var/cache/dev/Container5wCsSfz/get_ServiceLocator_PA39ZefService.php
namespace Container5wCsSfz;
=======
namespace ContainerB7oZqa7;
>>>>>>> 90b6194576a24a0391cc0af66edbdae8cc0d6d14:var/cache/dev/ContainerB7oZqa7/get_ServiceLocator_C5QZuvkService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
<<<<<<< HEAD:var/cache/dev/Container5wCsSfz/get_ServiceLocator_PA39ZefService.php
class get_ServiceLocator_PA39ZefService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pA39Zef' shared service.
=======
class get_ServiceLocator_C5QZuvkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.c5QZuvk' shared service.
>>>>>>> 90b6194576a24a0391cc0af66edbdae8cc0d6d14:var/cache/dev/ContainerB7oZqa7/get_ServiceLocator_C5QZuvkService.php
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
<<<<<<< HEAD:var/cache/dev/Container5wCsSfz/get_ServiceLocator_PA39ZefService.php
        return $container->privates['.service_locator.pA39Zef'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ChangepasswController::index' => ['privates', '.service_locator.GFm1rxI', 'get_ServiceLocator_GFm1rxIService', true],
            'App\\Controller\\CourseController::indexCSS' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\CourseController::indexHTML' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\CourseController::indexJS' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\CourseController::indexanglais' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\CourseController::indexfrancais' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
=======
        return $container->privates['.service_locator.c5QZuvk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\CourseController::indexCSS' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\CourseController::indexHTML' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\CourseController::indexJS' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
>>>>>>> 90b6194576a24a0391cc0af66edbdae8cc0d6d14:var/cache/dev/ContainerB7oZqa7/get_ServiceLocator_C5QZuvkService.php
            'App\\Controller\\InscriptionController::index' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Controller\\MailController::verificationEmail' => ['privates', '.service_locator.lqzS9y4', 'get_ServiceLocator_LqzS9y4Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\UserController::indexEditInfo' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Controller\\UserController::indexPassword' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
<<<<<<< HEAD:var/cache/dev/Container5wCsSfz/get_ServiceLocator_PA39ZefService.php
            'App\\Controller\\ChangepasswController:index' => ['privates', '.service_locator.GFm1rxI', 'get_ServiceLocator_GFm1rxIService', true],
            'App\\Controller\\CourseController:indexCSS' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\CourseController:indexHTML' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\CourseController:indexJS' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\CourseController:indexanglais' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\CourseController:indexfrancais' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
=======
            'App\\Controller\\CourseController:indexCSS' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\CourseController:indexHTML' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\CourseController:indexJS' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
>>>>>>> 90b6194576a24a0391cc0af66edbdae8cc0d6d14:var/cache/dev/ContainerB7oZqa7/get_ServiceLocator_C5QZuvkService.php
            'App\\Controller\\InscriptionController:index' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Controller\\MailController:verificationEmail' => ['privates', '.service_locator.lqzS9y4', 'get_ServiceLocator_LqzS9y4Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\UserController:indexEditInfo' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Controller\\UserController:indexPassword' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
<<<<<<< HEAD:var/cache/dev/Container5wCsSfz/get_ServiceLocator_PA39ZefService.php
            'App\\Controller\\ChangepasswController::index' => '?',
            'App\\Controller\\CourseController::indexCSS' => '?',
            'App\\Controller\\CourseController::indexHTML' => '?',
            'App\\Controller\\CourseController::indexJS' => '?',
            'App\\Controller\\CourseController::indexanglais' => '?',
            'App\\Controller\\CourseController::indexfrancais' => '?',
=======
            'App\\Controller\\CourseController::indexCSS' => '?',
            'App\\Controller\\CourseController::indexHTML' => '?',
            'App\\Controller\\CourseController::indexJS' => '?',
>>>>>>> 90b6194576a24a0391cc0af66edbdae8cc0d6d14:var/cache/dev/ContainerB7oZqa7/get_ServiceLocator_C5QZuvkService.php
            'App\\Controller\\InscriptionController::index' => '?',
            'App\\Controller\\MailController::verificationEmail' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\UserController::indexEditInfo' => '?',
            'App\\Controller\\UserController::indexPassword' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
<<<<<<< HEAD:var/cache/dev/Container5wCsSfz/get_ServiceLocator_PA39ZefService.php
            'App\\Controller\\ChangepasswController:index' => '?',
            'App\\Controller\\CourseController:indexCSS' => '?',
            'App\\Controller\\CourseController:indexHTML' => '?',
            'App\\Controller\\CourseController:indexJS' => '?',
            'App\\Controller\\CourseController:indexanglais' => '?',
            'App\\Controller\\CourseController:indexfrancais' => '?',
=======
            'App\\Controller\\CourseController:indexCSS' => '?',
            'App\\Controller\\CourseController:indexHTML' => '?',
            'App\\Controller\\CourseController:indexJS' => '?',
>>>>>>> 90b6194576a24a0391cc0af66edbdae8cc0d6d14:var/cache/dev/ContainerB7oZqa7/get_ServiceLocator_C5QZuvkService.php
            'App\\Controller\\InscriptionController:index' => '?',
            'App\\Controller\\MailController:verificationEmail' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\UserController:indexEditInfo' => '?',
            'App\\Controller\\UserController:indexPassword' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
