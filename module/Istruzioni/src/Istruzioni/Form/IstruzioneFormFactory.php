<?php

namespace Istruzioni\Form;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class IstruzioneFormFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     *
     * @return DriverLicenseForm
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $inputFilter = new IstruzioneInputFilter();
        $form = new IstruzioneForm();

        $form->setInputFilter($inputFilter);

        return $form;
    }
}
