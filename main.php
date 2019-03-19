<?php

    $idProcesso = 0;

	$new = [];
	$ready = [];
	$running = [];
	$blocked = [];
    $exit = [];

    //filas...
    $filaHD = [];
    $filaVideo = [];
    $filaPrinter = [];

    //estrutura processo
    array(
        "ID" => $idProcesso++,
        "NOME" => "Virus",
        "CICLOS" => rand(50, 200)

    );

    $todosProcessos = []; //a cada processo adicionado ao new, colocar aqui tbm...

    $maxCiclos = 30; //maximo de ciclos que um processo pode ficar no processador...
    
    //TODO: ler quantidade de processos: maximo 200;
    //TODO: ler tempo de espera em segundos;

    function criarProcessos($qtProcessos){

    }

    function espera(){ //espera 3 segundos para continar execução do código...
        
        //TODO: trocar $i por valor inserido pelo usuario...
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