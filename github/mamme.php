<?php
    $mamme1 = array('mamma di Viada', 'mamma di Pasquale', 'mamma di Giordano', 'mamma di Tonelli', 'mamma di Gjokaj');
    $mamme2 = ['mamma di Viada', 'mamma di Pasquale', 'mamma di Giordano', 'mamma di Tonelli', 'mamma di Gjokaj'];
    $mamme3 = array(
        0 => "mamma di Viada",
        1 => "mamma di Pasquale",
        2 => "mamma di Giodano",
        3 => "mamma di Tonelli",
        4 => "mamma di Gjokaj");
    $mamme4 = array(
        "Michela" => "mamma di Viada",
        "Emanuela" => "mamma di Pasquale",
        "Margherita" => "mamma di Giordano",
        "Daniela" => "mamma di Tonelli",
        "Lize" => "mamma di Gjokaj");
    $mamme5 = array(
            0 => array(
                'nome' => 'Michela',
                'residenza' => 'Madonna delle Grazie',
                'ruolo' => "mamma di Viada"),
            1 => array(
                'nome' => 'Emanuela',
                'residenza' => 'Cuneo',
                'ruolo' => "mamma di Pasquale"),
            2 => array(
                'nome' => 'Margherita',
                'residenza' => 'Boves',
                'ruolo' => "mamma di Giordano"),
            3 => array(
                'nome' => 'Daniela',
                'residenza' => 'Beinette',
                'ruolo' => "mamma di Tonelli"),
            4 => array(
                'nome' => 'Lize',
                'residenza' => 'San Pietro del Gallo',
                'ruolo' => "mamma di Gjokaj"),
            'numero di elementi' => 5);



    for($i=0; $i<5; $i++){
        echo $mamme1[$i];
        echo "<br>";
    };


    echo "<br>";
    echo "<br>";


    for($i=0; $i<5; $i++){
        echo $mamme2[$i];
        echo "<br>";
    };


    echo "<br>";
    echo "<br>";


    for($i=0; $i<5; $i++){
        echo $mamme3[$i];
        echo "<br>";
    };


    echo "<br>";
    echo "<br>";


    echo $mamme4["Michela"];
    echo "<br>";
    echo $mamme4["Emanuela"];
    echo "<br>";
    echo $mamme4["Margherita"];
    echo "<br>";
    echo $mamme4["Daniela"];
    echo "<br>";
    echo $mamme4["Lize"];
    echo "<br>";


    echo "<br>";
    echo "<br>";


    for($i=0; $i<5; $i++){
        echo $mamme5[$i]['nome'];
        echo "<br>";
        echo $mamme5[$i]['residenza'];
        echo "<br>";
        echo $mamme5[$i]['ruolo'];
        echo "<br>";
        echo "<br>";
    };
    echo "<br>";
    echo "<br>";
    echo $mamme5['numero di elementi'];