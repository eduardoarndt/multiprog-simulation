<?php
    $idProcesso = 0; //gerador de ids para processos... só usar $idProcesso++;

    //filas/arrays de estados
	$new = [];
	$ready = [];
	$running = [];
	$blocked = [];
    $exit = [];

    //filas de dispositivos de entrada/saida...
    $filaHD = [];
    $filaVideo = [];
    $filaPrinter = [];

    $todosProcessos = []; //array com todos os processos 

    $maxCiclos = 30; //maximo de ciclos que um processo pode ficar no processador...
    
    //TODO: ler quantidade de processos: maximo 200;
    //TODO: ler tempo de espera em segundos;

    for ($i=0; $i < $qtProcessos; $i++) {
        array_push($todosProcessos, new array(
            "ID" => $idProcesso++,
            "NOME" => "Virus",
            "CICLOS" => rand(50, 200)
        ))
    }

    function espera(){ //espera 3 segundos para continar execução do código...

        ///TODO: trocar $i por valor inserido pelo usuario...
        for ($i=0; $i < 3; $i++) { 
            sleep(1);
            echo $i . "segundos se passaram... <br>";
        }
    }

    function listarProcessos(){
        //listar em criacao
        echo "Processos em criacao: <br>";
        foreach ($new as $processo) {
            echo "<pre>"; print_r($processo);
        }
        //listar aptos
        echo "Processos aptos: <br>";
        foreach ($ready as $processo) {
            echo "<pre>"; print_r($processo);
        }
        //listar execucao
        echo "Processo em execucao: <br>";
        foreach ($running as $processo) {
            echo "<pre>"; print_r($processo);
        }
        //listar bloqueados
        echo "Processos bloqueados: <br>";
        foreach ($blocked as $processo) {
            echo "<pre>"; print_r($processo);
        }
        //listar finalizados
        echo "Processos finalizados: <br>";
        foreach ($exit as $processo) {
            echo "<pre>"; print_r($processo);
        }
    }
?>