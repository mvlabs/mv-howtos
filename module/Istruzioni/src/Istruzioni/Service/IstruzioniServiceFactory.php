<?php
namespace Istruzioni\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class IstruzioniServiceFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {

        $entityManager = $serviceLocator->get('doctrine.entitymanager.orm_default');

        return new IstruzioniService($entityManager);

    }


}
