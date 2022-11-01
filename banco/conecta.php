<?php
    try{
        $conexao = mysqli_connect("localhost","root","","bd_vulneravel");
        
    }catch(Exception $e){
        echo "Erro: $e";
    }