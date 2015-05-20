FormAutocomplete
====

A PHP package mainly developed for Laravel to generate javascript tag for auto-complete through jQuery UI.

Installation&settings for Laravel
====

After installation using composer, add the followings to the array in  app/config/app.php

    'providers' => array(  
        ...Others...,  
        'Sukohi\FormAutocomplete\FormAutocompleteServiceProvider',
    )

Also

    'aliases' => array(  
        ...Others...,  
        'FormAutocomplete' => 'Sukohi\FormAutocomplete\Facades\FormAutocomplete',
    )

Requirement
====
jQuery and jQuery UI

Usage
====

(in View)
    
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    
    <!-- jQuery UI -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    
    <!-- Input -->
    <input id="title_1" type="text">
    <input id="title_2" type="text">
    
    <script>
    
        $(document).ready(function(){
    
            // Using Array
    
            {{ FormAutocomplete::selector('#title_1')->source(['aaaaa', 'bbbbb', 'cccccc']) }}
    
            // Using Closure
    
            {{ FormAutocomplete::selector('#title_2')->source(function(){
    
                return \Item::where('id', '>', 2)->lists('title');  // You need to return array values.
    
            }) }}
    
        });
    
    </script>
    
License
====
This package is licensed under the MIT License.

Copyright 2015 Sukohi Kuhoh