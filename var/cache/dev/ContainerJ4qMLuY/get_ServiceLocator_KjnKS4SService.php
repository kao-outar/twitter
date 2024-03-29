<?php

namespace ContainerJ4qMLuY;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KjnKS4SService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kjnKS4S' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kjnKS4S'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\HomeController::createTweet' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\HomeController::searchUsers' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.HkqYDJf', 'get_ServiceLocator_HkqYDJfService', true],
            'App\\Controller\\SecurityController::confirmation' => ['privates', '.service_locator.gWX6RJb', 'get_ServiceLocator_GWX6RJbService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\SecurityController::stepOne' => ['privates', '.service_locator.Q8t22Eq', 'get_ServiceLocator_Q8t22EqService', true],
            'App\\Controller\\SecurityController::stepTwo' => ['privates', '.service_locator.1RGYFGI', 'get_ServiceLocator_1RGYFGIService', true],
            'App\\Controller\\TweetController::likeTweet' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\TweetController::one' => ['privates', '.service_locator.CKNmilY', 'get_ServiceLocator_CKNmilYService', true],
            'App\\Controller\\TweetController::unlikeTweet' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\UserController::addFriend' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\UserController::editProfile' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\UserController::mainProfile' => ['privates', '.service_locator.st3ASTR', 'get_ServiceLocator_St3ASTRService', true],
            'App\\Controller\\UserController::toggleFriend' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\UserController::userProfile' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\HomeController:createTweet' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\HomeController:searchUsers' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.HkqYDJf', 'get_ServiceLocator_HkqYDJfService', true],
            'App\\Controller\\SecurityController:confirmation' => ['privates', '.service_locator.gWX6RJb', 'get_ServiceLocator_GWX6RJbService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\SecurityController:stepOne' => ['privates', '.service_locator.Q8t22Eq', 'get_ServiceLocator_Q8t22EqService', true],
            'App\\Controller\\SecurityController:stepTwo' => ['privates', '.service_locator.1RGYFGI', 'get_ServiceLocator_1RGYFGIService', true],
            'App\\Controller\\TweetController:likeTweet' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\TweetController:one' => ['privates', '.service_locator.CKNmilY', 'get_ServiceLocator_CKNmilYService', true],
            'App\\Controller\\TweetController:unlikeTweet' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\UserController:addFriend' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\UserController:editProfile' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\UserController:mainProfile' => ['privates', '.service_locator.st3ASTR', 'get_ServiceLocator_St3ASTRService', true],
            'App\\Controller\\UserController:toggleFriend' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\UserController:userProfile' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\HomeController::createTweet' => '?',
            'App\\Controller\\HomeController::searchUsers' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::confirmation' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\SecurityController::stepOne' => '?',
            'App\\Controller\\SecurityController::stepTwo' => '?',
            'App\\Controller\\TweetController::likeTweet' => '?',
            'App\\Controller\\TweetController::one' => '?',
            'App\\Controller\\TweetController::unlikeTweet' => '?',
            'App\\Controller\\UserController::addFriend' => '?',
            'App\\Controller\\UserController::editProfile' => '?',
            'App\\Controller\\UserController::mainProfile' => '?',
            'App\\Controller\\UserController::toggleFriend' => '?',
            'App\\Controller\\UserController::userProfile' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\HomeController:createTweet' => '?',
            'App\\Controller\\HomeController:searchUsers' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:confirmation' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\SecurityController:stepOne' => '?',
            'App\\Controller\\SecurityController:stepTwo' => '?',
            'App\\Controller\\TweetController:likeTweet' => '?',
            'App\\Controller\\TweetController:one' => '?',
            'App\\Controller\\TweetController:unlikeTweet' => '?',
            'App\\Controller\\UserController:addFriend' => '?',
            'App\\Controller\\UserController:editProfile' => '?',
            'App\\Controller\\UserController:mainProfile' => '?',
            'App\\Controller\\UserController:toggleFriend' => '?',
            'App\\Controller\\UserController:userProfile' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
