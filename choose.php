<?php
$userOption = $_GET['choose'];
$maOption = rand(1,3);
$options = [1 => 'piedra', 2 => 'papel', 3 => 'tijera'];

if(empty($userOption)) {
    echo 'input vacio';

} elseif(!empty($userOption)) {

    if($options[$userOption] == $options[$maOption]){
        echo 'tu elegiste '.$options[$userOption].' '.'la maquina eligio '.$options[$maOption].' '.'EMPATE';
    }else {
        if($options[$userOption] == 'piedra' and $options[$maOption] == 'papel') {
            echo 'tu elegiste '.$options[$userOption].' '.'la maquina eligio '.$options[$maOption].' '.'PERDISTE';

        }elseif ($options[$userOption] == 'piedra' and $options[$maOption] == 'tijera') {
            echo 'tu elegiste '.$options[$userOption].' '.'la maquina eligio '.$options[$maOption].' '.'GANASTE';
        }

        // =================================================
        if($options[$userOption] == 'papel' and $options[$maOption] == 'piedra') {
            echo 'tu elegiste '.$options[$userOption].' '.'la maquina eligio '.$options[$maOption].' '.'GANASTE';

        }elseif ($options[$userOption] == 'papel' and $options[$maOption] == 'tijera') {
            echo 'tu elegiste '.$options[$userOption].' '.'la maquina eligio '.$options[$maOption].' '.'PERDISTE';

        }

        // =================================================
        if ($options[$userOption] == 'tijera' and $options[$maOption] == 'papel') {
            echo 'tu elegiste '.$options[$userOption].' '.'la maquina eligio '.$options[$maOption].' '.'GANASTE';

        }elseif ($options[$userOption] == 'tijera' and $options[$maOption] == 'piedra') {
            echo 'tu elegiste '.$options[$userOption].' '.'la maquina eligio '.$options[$maOption].' '.'PERDISTE';
        }
        
    }


}else {
    require_once 'public/intro.html';

}
