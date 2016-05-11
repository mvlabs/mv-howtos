<?php

namespace Istruzioni\Form;

use Zend\Form\Form;

class IstruzioneForm extends Form
{
    public function __construct()
    {
        parent::__construct('istruzione');
        $this->setAttribute('method', 'post');

        $this->add([
            'name'       => 'titolo',
            'type'       => 'Zend\Form\Element\Text',
            'options' => array(
                 'label' => 'Titolo',
                 'label_attributes' => array(
                     'class' => 'control-label',
                 ),
            ),
            'attributes' => [
                'id'       => 'titolo',
                'class'    => 'form-control'
            ]
        ]);

        $this->add([
            'name'       => 'autore',
            'type'       => 'Zend\Form\Element\Text',
            'options' => array(
                 'label' => 'Autore',
                 'label_attributes' => array(
                     'class' => 'control-label',
                 ),
            ),
            'attributes' => [
                'id'       => 'autore',
                'class'    => 'form-control'
            ]
        ]);

        $this->add([
            'name'       => 'istruzione',
            'type'       => 'Zend\Form\Element\Textarea',
            'options' => array(
                 'label' => 'Istruzione',
                 'label_attributes' => array(
                     'class' => 'control-label',
                 ),
            ),
            'attributes' => [
                'id'       => 'istruzione',
                'class'    => 'form-control'
            ]
        ]);

    }

}
