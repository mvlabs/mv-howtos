<?php
namespace Istruzioni\Controller;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class IndexControllerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {

        $istruzioniService = $serviceLocator->getServiceLocator()->get('Istruzioni\Service\IstruzioniService');
        $istruzioneForm = $serviceLocator->getServiceLocator()->get('Istruzioni\Form\IstruzioneForm');

        return new IndexController($istruzioniService, $istruzioneForm);

    }


}
