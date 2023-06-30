<?php
    //Temperature limits settings
    $upperLimit = floatval(27);
    $lowerLimit = floatval(23);
    //Temperature blocks styles
    $styles = [
        'tooCold' => 'bg-primary',
        'tooHot' => 'bg-danger',
        'normal' => 'bg-success',
    ];

    // Array of Racks/Server Rooms name and sensors IP adresses
    $sensors = [
        //'chamber name' => 'iP address'
        //'server room name' => 'xxx.xxx.xxx.xxx' 
    ];

    $data = getData($sensors);
