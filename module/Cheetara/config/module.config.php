<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Cheetara\Controller\Index' => 'Cheetara\Controller\IndexController',
        ),
    ),
		'router' => array(
				'routes' => array(
						'cheetara' => array(
								'type'    => 'Segment',
								'options' => array(
										'route'    => '/cheetara[/:action[/:id]]',
										'defaults' => array(
												'__NAMESPACE__' => 'Cheetara\Controller',
												'controller'    => 'Index',
												'action'        => 'index',
										),
										'constraints' => array(
												'action' => 'add|edit|delete',
												'id'     => '[0-9]+',
										),
								),
						),
				),
		),
    'view_manager' => array(
        'template_path_stack' => array(
            'Cheetara' => __DIR__ . '/../view',
        ),
    ),
);
