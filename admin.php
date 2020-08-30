<?php


$app->on('admin.init', function() {
    
    if ($this->module('cockpit')->hasaccess('cockpit', 'detektivo')) {
        $this->on(['cockpit.menu', 'cockpit.menu.aside'], function() {
            $this->renderView("detektivo:views/partials/menu.php");
        });
    }
    
    // bind admin routes /detektivo/*
    $this->bindClass('Detektivo\\Controller\\Admin', 'detektivo');
});
