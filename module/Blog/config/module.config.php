<?php
return array(
    'view_manager' => array(
        'template_path_stack' => array(
           'blog' => __DIR__ . '/../view',
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Blog\Controller\List' => 'Blog\Controller\ListController'
        )
    ), // This lines opens the configuration for the RouteManager
    'router' => array(
        // Open configuration for all possible routes
        'routes' => array(
            // Define a new route called "post"
            'post' => array(
                // Define the routes type to be "Zend\Mvc\Router\Http\Literal", which is basically just a string
                'type' => 'segment', // Configure the route itself
                'options' => array(
                    // Listen to "/blog" as uri
                    'route' => '/blog[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[0-9]+',
                    ),
                    // Define default controller and action to be called when this route is matched
                    'defaults' => array(
                        'controller' => 'Blog\Controller\List',
                        'action' => 'index',
                    )
                )
            )
        )
    )
);
//'route' => '/album[/:action][/:id]',
//                    'constraints' => array(
//    'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
//    'id' => '[0-9]+',
//),
//                    'defaults' => array(
//    'controller' => 'Album\Controller\Album',
//    'action' => 'index',
//),