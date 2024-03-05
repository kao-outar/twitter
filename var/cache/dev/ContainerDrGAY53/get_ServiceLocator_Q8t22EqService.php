<?php

namespace ContainerDrGAY53;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Q8t22EqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Q8t22Eq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Q8t22Eq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'passwordEncoder' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
        ], [
            'passwordEncoder' => '?',
        ]);
    }
}