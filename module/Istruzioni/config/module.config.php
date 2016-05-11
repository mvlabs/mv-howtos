<?php
namespace Istruzioni;

return array(
    'router' => array(
        'routes' => array(
            'istruzioni' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/istruzioni',
                    'defaults' => array(
                        'controller' => 'Istruzioni\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'aggiungi' => array(
                        'type'    => 'Literal',
                        'options' => array(
                            'route'    => '/aggiungi',
                            'defaults' => array(
                                'action' => 'aggiungi',
                            ),
                        ),
                    ),
                    'voto' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/voto',
                            'defaults' => array(
                                'action' => 'voto',
                            ),
                        ),
                    ),
                ),
            ),

        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'Istruzioni\Service\IstruzioniService' => Service\IstruzioniServiceFactory::class,
            'Istruzioni\Form\IstruzioneForm' => Form\IstruzioneFormFactory::class,
        ),
    ),
    'controllers' => array(
        'factories' => array(
            'Istruzioni\Controller\Index' => Controller\IndexControllerFactory::class
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
        'strategies' => array(
            'ViewJsonStrategy',
        ),
    ),
    'doctrine'        => [
        'driver' => [
            __NAMESPACE__ . '_driver' => [
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => [__DIR__ . '/../src/' . __NAMESPACE__ . '/Entity']
            ],
            'orm_default'             => [
                'class'   => 'Doctrine\ORM\Mapping\Driver\DriverChain',
                'drivers' => [
                    __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver'
                ]
            ],
        ],
    ],

);
