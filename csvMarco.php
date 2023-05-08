<?php


    //Limpar buffet
    ob_start();
    require_once("bd.php");
    require_once("models/Message.php");
    $message = new Message($BASE_URL);

    //select dos dias do mês
    $query = "SELECT dia,mes,name FROM março ORDER BY dia";
    $smtp = $conn->prepare($query);
    $smtp->execute();

    //select dos dias do mês
    $queryuser = "SELECT CONCAT(name,' ',lastname) from usuario";
    $usuarios = $conn->prepare($queryuser);
    $usuarios->execute();


    if(($smtp) && ($smtp->rowCount() != 0)){

        //Aceita texto ou CSV
        header('Content-Type: text/csv; charset=UTF-8');
        //Nome do arquivo
        header('Content-Disposition: attachment; Filename=Relatorio-Março.csv');
        //Gravar no buffet
        $resultado = fopen("php://output", 'w');
        
        //criar cabeçalho do excel - Converter caracter especiais
        $cabecalho = ["dia", mb_convert_encoding("mes", "ISO-8859-1", "UTF-8"), "Colaborador"];

        //Escrever Cabeçalho no arquivo
        fputcsv($resultado, $cabecalho, ";");
        
        //Ler registros do banco de dados
        while($row_usuario = $smtp->fetch(PDO::FETCH_ASSOC))
        {

            //Extrair os dados do array para imprimir através do nome da coluna
            // extract($row_usuario);

            //Escrever conteúdo no arquivo
            fputcsv($resultado, $row_usuario, ";");
        }
       

        //criar cabeçalho do excel - Converter caracter especiais
        $cabecalho2 = ["Lista dos Colaboradores", "Dias totais"];
        //Escrever Cabeçalho no arquivo
        fputcsv($resultado, $cabecalho2, ";");
        //Ler registros do banco de dados
        while($row_usuario2 = $usuarios->fetch(PDO::FETCH_ASSOC))
        {

            //Extrair os dados do array para imprimir através do nome da coluna
            // extract($row_usuario);

            //Escrever conteúdo no arquivo
            fputcsv($resultado, $row_usuario2, ";");
        }

            
        //fechar o arquivo
        fclose($resultado);
        


    }else{
       $_SESSION['msg-error-excel'] =  $message->setMessage("Daodos não encontrados", "error", "janeiro.php");
    }

?>



