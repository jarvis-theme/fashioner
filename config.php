<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities
    | this is cool feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these event can be override by package config.
    */

    'events' => array(

        // Listen on event set up theme.
        'onSetTheme' => function($theme)
        {

        },

        // Listen on event set up layout.
        'onSetLayout' => function($theme)
        {

        },

        // Listen on event before render theme.
        'beforeRenderTheme' => function($theme)
        {
            // You may use this event to set up your assets.
            //$theme->asset()->usePath()->add('name', 'test.js');
        },

        // Listen on event before render layout.
        'beforeRenderLayout' => function($theme)
        {

        },

        // Listen on event before render theme and layout
        'beforeRenderThemeWithLayout' => function($theme)
        {

        }

    ),

    'num_display' => array(
        'home_product'=>9,
        'main_product'=>9,
        'related_product'=>8,
        'latest_product'=>8,
        'bestseller'=>8,
        'featured'=>8,
        'blog'=>5,
        'testimonial'=>4,
    ),
    'banner' => true,
    'themesColor' => false,
    /*'themesColor' => array(
        'type'=> 'false',
        'warnaDef'=>'main-color:#313131;secondary-color:#ff7300',
        'color'=>false
    ),*/
    'layout' => false,
);
