<?php

namespace Istruzioni\Form;

use Zend\InputFilter\InputFilter;

class IstruzioneInputFilter extends InputFilter
{

    public function __construct()
    {

        $this->add([
            'name' => 'titolo',
            'required' => "true",
            'filters' => [
                ['name' => 'StripTags'],
                ['name' => 'StringTrim'],
            ]
        ]);

        $this->add([
            'name' => 'autore',
            'required' => "true",
            'filters' => [
                ['name' => 'StripTags'],
                ['name' => 'StringTrim'],
            ]
        ]);

        $this->add([
            'name' => 'istruzione',
            'required' => "true",
            'filters' => [
                ['name' => 'StripTags'],
                ['name' => 'StringTrim'],
            ],
        ]);

    }

}
