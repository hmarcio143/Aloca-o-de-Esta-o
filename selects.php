<?php
 require_once("templetes/header.php");
 

 $userData = $userDao->verifyToken(true);
 if(!empty($_GET)){

 $mes = $_GET; 
 $t = $mes["mes"];
 //  ----------------------------dia01
 $dia01 = [];
 $query = "SELECT * FROM $t WHERE dia=1";
 $smtp = $conn->prepare($query);
 $smtp->execute();
 $dia01 = $smtp->fetchAll();

 $QtdDia01 = [];
 $qtd = "SELECT COUNT(dia) FROM $t WHERE dia=1";
 $smtp = $conn->prepare($qtd);
 $smtp->execute();
 $QtdDia01 = $smtp->fetch();
$qtdOcupadaDia01 = intval($QtdDia01["COUNT(dia)"]);
$qtdlivreDia01 =  18 - $qtdOcupadaDia01;



//  ----------------------------dia02
$dia02 = [];
 $query = "SELECT * FROM $t WHERE dia=2";
 $smtp = $conn->prepare($query);
 $smtp->execute();
 $dia02 = $smtp->fetchAll();

 $QtdDia02 = [];
 $qtd = "SELECT COUNT(dia) FROM $t WHERE dia=2";
 $smtp = $conn->prepare($qtd);
 $smtp->execute();
 $QtdDia02 = $smtp->fetch();
$qtdOcupadaDia02 = intval($QtdDia02["COUNT(dia)"]);
$qtdlivreDia02 =  18 - $qtdOcupadaDia02;

//  ----------------------------dia03
$dia03 = [];
 $query = "SELECT * FROM $t WHERE dia=3";
 $smtp = $conn->prepare($query);
 $smtp->execute();
 $dia03 = $smtp->fetchAll();

 $QtdDia03 = [];
 $qtd = "SELECT COUNT(dia) FROM $t WHERE dia=3";
 $smtp = $conn->prepare($qtd);
 $smtp->execute();
 $QtdDia03 = $smtp->fetch();
$qtdOcupadaDia03 = intval($QtdDia03["COUNT(dia)"]);
$qtdlivreDia03 =  18 - $qtdOcupadaDia03;

//  ----------------------------dia04
 $dia04 = [];
 $query = "SELECT * FROM $t WHERE dia=4";
 $smtp = $conn->prepare($query);
 $smtp->execute();
 $dia04 = $smtp->fetchAll();

 $QtdDia04 = [];
 $qtd = "SELECT COUNT(dia) FROM $t WHERE dia=4";
 $smtp = $conn->prepare($qtd);
 $smtp->execute();
 $QtdDia04 = $smtp->fetch();
$qtdOcupadaDia04 = intval($QtdDia04["COUNT(dia)"]);
$qtdlivreDia04 =  18 - $qtdOcupadaDia04;

//  ----------------------------dia05
$dia05 = [];
$query = "SELECT * FROM $t WHERE dia=5";
$smtp = $conn->prepare($query);
$smtp->execute();
$dia05 = $smtp->fetchAll();

$QtdDia05 = [];
$qtd = "SELECT COUNT(dia) FROM $t WHERE dia=5";
$smtp = $conn->prepare($qtd);
$smtp->execute();
$QtdDia05 = $smtp->fetch();
$qtdOcupadaDia05 = intval($QtdDia05["COUNT(dia)"]);
$qtdlivreDia05 =  18 - $qtdOcupadaDia05;


//  ----------------------------dia06
$dia06 = [];
$query = "SELECT * FROM $t WHERE dia=6";
$smtp = $conn->prepare($query);
$smtp->execute();
$dia06 = $smtp->fetchAll();

$QtdDia06 = [];
$qtd = "SELECT COUNT(dia) FROM $t WHERE dia=6";
$smtp = $conn->prepare($qtd);
$smtp->execute();
$QtdDia06 = $smtp->fetch();
$qtdOcupadaDia06 = intval($QtdDia06["COUNT(dia)"]);
$qtdlivreDia06 =  18 - $qtdOcupadaDia06;

//  ----------------------------dia07
$dia07 = [];
$query = "SELECT * FROM $t WHERE dia=7";
$smtp = $conn->prepare($query);
$smtp->execute();
$dia07 = $smtp->fetchAll();

$QtdDia07 = [];
$qtd = "SELECT COUNT(dia) FROM $t WHERE dia=7";
$smtp = $conn->prepare($qtd);
$smtp->execute();
$QtdDia07 = $smtp->fetch();
$qtdOcupadaDia07 = intval($QtdDia07["COUNT(dia)"]);
$qtdlivreDia07 =  18 - $qtdOcupadaDia07;

//  ----------------------------dia08
$dia08 = [];
$query = "SELECT * FROM $t WHERE dia=8";
$smtp = $conn->prepare($query);
$smtp->execute();
$dia08 = $smtp->fetchAll();

$QtdDia08 = [];
$qtd = "SELECT COUNT(dia) FROM $t WHERE dia=8";
$smtp = $conn->prepare($qtd);
$smtp->execute();
$QtdDia08 = $smtp->fetch();
$qtdOcupadaDia08 = intval($QtdDia08["COUNT(dia)"]);
$qtdlivreDia08 =  18 - $qtdOcupadaDia08;

//  ----------------------------dia09
$dia09 = [];
$query = "SELECT * FROM $t WHERE dia=9";
$smtp = $conn->prepare($query);
$smtp->execute();
$dia09 = $smtp->fetchAll();

$QtdDia09 = [];
$qtd = "SELECT COUNT(dia) FROM $t WHERE dia=9";
$smtp = $conn->prepare($qtd);
$smtp->execute();
$QtdDia09 = $smtp->fetch();
$qtdOcupadaDia09 = intval($QtdDia09["COUNT(dia)"]);
$qtdlivreDia09 =  18 - $qtdOcupadaDia09;

//  ----------------------------dia10
$dia10 = [];
$query = "SELECT * FROM $t WHERE dia=10";
$smtp = $conn->prepare($query);
$smtp->execute();
$dia10 = $smtp->fetchAll();

$QtdDia10 = [];
$qtd = "SELECT COUNT(dia) FROM $t WHERE dia=10";
$smtp = $conn->prepare($qtd);
$smtp->execute();
$QtdDia10 = $smtp->fetch();
$qtdOcupadaDia10 = intval($QtdDia10["COUNT(dia)"]);
$qtdlivreDia10 =  18 - $qtdOcupadaDia10;

//  ----------------------------dia11
$dia11 = [];
$query = "SELECT * FROM $t WHERE dia=11";
$smtp = $conn->prepare($query);
$smtp->execute();
$dia11 = $smtp->fetchAll();

$QtdDia11 = [];
$qtd = "SELECT COUNT(dia) FROM $t WHERE dia=11";
$smtp = $conn->prepare($qtd);
$smtp->execute();
$QtdDia11 = $smtp->fetch();
$qtdOcupadaDia11 = intval($QtdDia11["COUNT(dia)"]);
$qtdlivreDia11 =  18 - $qtdOcupadaDia11;

//  ----------------------------dia12
$dia12 = [];
$query = "SELECT * FROM $t WHERE dia=12";
$smtp = $conn->prepare($query);
$smtp->execute();
$dia12 = $smtp->fetchAll();

$QtdDia12 = [];
$qtd = "SELECT COUNT(dia) FROM $t WHERE dia=12";
$smtp = $conn->prepare($qtd);
$smtp->execute();
$QtdDia12 = $smtp->fetch();
$qtdOcupadaDia12 = intval($QtdDia12["COUNT(dia)"]);
$qtdlivreDia12 =  18 - $qtdOcupadaDia12;

//  ----------------------------dia13
$dia13 = [];
$query = "SELECT * FROM $t WHERE dia=13";
$smtp = $conn->prepare($query);
$smtp->execute();
$dia13 = $smtp->fetchAll();

$QtdDia13 = [];
$qtd = "SELECT COUNT(dia) FROM $t WHERE dia=13";
$smtp = $conn->prepare($qtd);
$smtp->execute();
$QtdDia13 = $smtp->fetch();
$qtdOcupadaDia13 = intval($QtdDia13["COUNT(dia)"]);
$qtdlivreDia13 =  18 - $qtdOcupadaDia13;

//  ----------------------------dia14
$dia14 = [];
$query = "SELECT * FROM $t WHERE dia=14";
$smtp = $conn->prepare($query);
$smtp->execute();
$dia14 = $smtp->fetchAll();

$QtdDia14 = [];
$qtd = "SELECT COUNT(dia) FROM $t WHERE dia=14";
$smtp = $conn->prepare($qtd);
$smtp->execute();
$QtdDia14 = $smtp->fetch();
$qtdOcupadaDia14 = intval($QtdDia14["COUNT(dia)"]);
$qtdlivreDia14 =  18 - $qtdOcupadaDia14;

//  ----------------------------dia15
$dia15 = [];
$query = "SELECT * FROM $t WHERE dia=15";
$smtp = $conn->prepare($query);
$smtp->execute();
$dia15 = $smtp->fetchAll();

$QtdDia15 = [];
$qtd = "SELECT COUNT(dia) FROM $t WHERE dia=15";
$smtp = $conn->prepare($qtd);
$smtp->execute();
$QtdDia15 = $smtp->fetch();
$qtdOcupadaDia15 = intval($QtdDia15["COUNT(dia)"]);
$qtdlivreDia15 =  18 - $qtdOcupadaDia15;

//  ----------------------------dia16
$dia16 = [];
$query = "SELECT * FROM $t WHERE dia=16";
$smtp = $conn->prepare($query);
$smtp->execute();
$dia16 = $smtp->fetchAll();

$QtdDia16 = [];
$qtd = "SELECT COUNT(dia) FROM $t WHERE dia=16";
$smtp = $conn->prepare($qtd);
$smtp->execute();
$QtdDia16 = $smtp->fetch();
$qtdOcupadaDia16 = intval($QtdDia16["COUNT(dia)"]);
$qtdlivreDia16 =  18 - $qtdOcupadaDia16;

//  ----------------------------dia17
$dia17 = [];
$query = "SELECT * FROM $t WHERE dia=17";
$smtp = $conn->prepare($query);
$smtp->execute();
$dia17 = $smtp->fetchAll();

$QtdDia17 = [];
$qtd = "SELECT COUNT(dia) FROM $t WHERE dia=17";
$smtp = $conn->prepare($qtd);
$smtp->execute();
$QtdDia17 = $smtp->fetch();
$qtdOcupadaDia17 = intval($QtdDia17["COUNT(dia)"]);
$qtdlivreDia17 =  18 - $qtdOcupadaDia17;

//  ----------------------------dia18
$dia18 = [];
$query = "SELECT * FROM $t WHERE dia=18";
$smtp = $conn->prepare($query);
$smtp->execute();
$dia18 = $smtp->fetchAll();

$QtdDia18 = [];
$qtd = "SELECT COUNT(dia) FROM $t WHERE dia=18";
$smtp = $conn->prepare($qtd);
$smtp->execute();
$QtdDia18 = $smtp->fetch();
$qtdOcupadaDia18 = intval($QtdDia18["COUNT(dia)"]);
$qtdlivreDia18 =  18 - $qtdOcupadaDia18;

//  ----------------------------dia19
$dia19 = [];
$query = "SELECT * FROM $t WHERE dia=19";
$smtp = $conn->prepare($query);
$smtp->execute();
$dia19 = $smtp->fetchAll();

$QtdDia19 = [];
$qtd = "SELECT COUNT(dia) FROM $t WHERE dia=19";
$smtp = $conn->prepare($qtd);
$smtp->execute();
$QtdDia19 = $smtp->fetch();
$qtdOcupadaDia19 = intval($QtdDia19["COUNT(dia)"]);
$qtdlivreDia19 =  18 - $qtdOcupadaDia19;

//  ----------------------------dia20
$dia20 = [];
$query = "SELECT * FROM $t WHERE dia=20";
$smtp = $conn->prepare($query);
$smtp->execute();
$dia20 = $smtp->fetchAll();

$QtdDia20 = [];
$qtd = "SELECT COUNT(dia) FROM $t WHERE dia=20";
$smtp = $conn->prepare($qtd);
$smtp->execute();
$QtdDia20 = $smtp->fetch();
$qtdOcupadaDia20 = intval($QtdDia20["COUNT(dia)"]);
$qtdlivreDia20 =  18 - $qtdOcupadaDia20;

//  ----------------------------dia21
$dia21 = [];
$query = "SELECT * FROM $t WHERE dia=21";
$smtp = $conn->prepare($query);
$smtp->execute();
$dia21 = $smtp->fetchAll();

$QtdDia21 = [];
$qtd = "SELECT COUNT(dia) FROM $t WHERE dia=21";
$smtp = $conn->prepare($qtd);
$smtp->execute();
$QtdDia21 = $smtp->fetch();
$qtdOcupadaDia21 = intval($QtdDia21["COUNT(dia)"]);
$qtdlivreDia21 =  18 - $qtdOcupadaDia21;

//  ----------------------------dia22
$dia22 = [];
$query = "SELECT * FROM $t WHERE dia=22";
$smtp = $conn->prepare($query);
$smtp->execute();
$dia22 = $smtp->fetchAll();

$QtdDia22 = [];
$qtd = "SELECT COUNT(dia) FROM $t WHERE dia=22";
$smtp = $conn->prepare($qtd);
$smtp->execute();
$QtdDia22 = $smtp->fetch();
$qtdOcupadaDia22 = intval($QtdDia22["COUNT(dia)"]);
$qtdlivreDia22 =  18 - $qtdOcupadaDia22;

//  ----------------------------dia23
$dia23 = [];
$query = "SELECT * FROM $t WHERE dia=23";
$smtp = $conn->prepare($query);
$smtp->execute();
$dia23 = $smtp->fetchAll();

$QtdDia23 = [];
$qtd = "SELECT COUNT(dia) FROM $t WHERE dia=23";
$smtp = $conn->prepare($qtd);
$smtp->execute();
$QtdDia23 = $smtp->fetch();
$qtdOcupadaDia23 = intval($QtdDia23["COUNT(dia)"]);
$qtdlivreDia23 =  18 - $qtdOcupadaDia23;

//  ----------------------------dia24
$dia24 = [];
$query = "SELECT * FROM $t WHERE dia=24";
$smtp = $conn->prepare($query);
$smtp->execute();
$dia24 = $smtp->fetchAll();

$QtdDia24 = [];
$qtd = "SELECT COUNT(dia) FROM $t WHERE dia=24";
$smtp = $conn->prepare($qtd);
$smtp->execute();
$QtdDia24 = $smtp->fetch();
$qtdOcupadaDia24 = intval($QtdDia24["COUNT(dia)"]);
$qtdlivreDia24 =  18 - $qtdOcupadaDia24;

//  ----------------------------dia25
$dia25 = [];
$query = "SELECT * FROM $t WHERE dia=25";
$smtp = $conn->prepare($query);
$smtp->execute();
$dia25 = $smtp->fetchAll();

$QtdDia25 = [];
$qtd = "SELECT COUNT(dia) FROM $t WHERE dia=25";
$smtp = $conn->prepare($qtd);
$smtp->execute();
$QtdDia25 = $smtp->fetch();
$qtdOcupadaDia25 = intval($QtdDia25["COUNT(dia)"]);
$qtdlivreDia25 =  18 - $qtdOcupadaDia25;

//  ----------------------------dia26
$dia26 = [];
$query = "SELECT * FROM $t WHERE dia=26";
$smtp = $conn->prepare($query);
$smtp->execute();
$dia26 = $smtp->fetchAll();

$QtdDia26 = [];
$qtd = "SELECT COUNT(dia) FROM $t WHERE dia=26";
$smtp = $conn->prepare($qtd);
$smtp->execute();
$QtdDia26 = $smtp->fetch();
$qtdOcupadaDia26 = intval($QtdDia26["COUNT(dia)"]);
$qtdlivreDia26 =  18 - $qtdOcupadaDia26;

//  ----------------------------dia27
$dia27 = [];
$query = "SELECT * FROM $t WHERE dia=27";
$smtp = $conn->prepare($query);
$smtp->execute();
$dia27 = $smtp->fetchAll();

$QtdDia27 = [];
$qtd = "SELECT COUNT(dia) FROM $t WHERE dia=27";
$smtp = $conn->prepare($qtd);
$smtp->execute();
$QtdDia27 = $smtp->fetch();
$qtdOcupadaDia27 = intval($QtdDia27["COUNT(dia)"]);
$qtdlivreDia27 =  18 - $qtdOcupadaDia27;

//  ----------------------------dia28
$dia28 = [];
$query = "SELECT * FROM $t WHERE dia=28";
$smtp = $conn->prepare($query);
$smtp->execute();
$dia28 = $smtp->fetchAll();

$QtdDia28 = [];
$qtd = "SELECT COUNT(dia) FROM $t WHERE dia=28";
$smtp = $conn->prepare($qtd);
$smtp->execute();
$QtdDia28 = $smtp->fetch();
$qtdOcupadaDia28 = intval($QtdDia28["COUNT(dia)"]);
$qtdlivreDia28 =  18 - $qtdOcupadaDia28;

//  ----------------------------dia29
$dia29 = [];
$query = "SELECT * FROM $t WHERE dia=29";
$smtp = $conn->prepare($query);
$smtp->execute();
$dia29 = $smtp->fetchAll();

$QtdDia29 = [];
$qtd = "SELECT COUNT(dia) FROM $t WHERE dia=29";
$smtp = $conn->prepare($qtd);
$smtp->execute();
$QtdDia29 = $smtp->fetch();
$qtdOcupadaDia29 = intval($QtdDia29["COUNT(dia)"]);
$qtdlivreDia29 =  18 - $qtdOcupadaDia29;

//  ----------------------------dia30
$dia30 = [];
$query = "SELECT * FROM $t WHERE dia=30";
$smtp = $conn->prepare($query);
$smtp->execute();
$dia30 = $smtp->fetchAll();

$QtdDia30 = [];
$qtd = "SELECT COUNT(dia) FROM $t WHERE dia=30";
$smtp = $conn->prepare($qtd);
$smtp->execute();
$QtdDia30 = $smtp->fetch();
$qtdOcupadaDia30 = intval($QtdDia30["COUNT(dia)"]);
$qtdlivreDia30 =  18 - $qtdOcupadaDia30;

//  ----------------------------dia31
$dia31 = [];
$query = "SELECT * FROM $t WHERE dia=31";
$smtp = $conn->prepare($query);
$smtp->execute();
$dia31 = $smtp->fetchAll();

$QtdDia31 = [];
$qtd = "SELECT COUNT(dia) FROM $t WHERE dia=31";
$smtp = $conn->prepare($qtd);
$smtp->execute();
$QtdDia31 = $smtp->fetch();
$qtdOcupadaDia31 = intval($QtdDia31["COUNT(dia)"]);
$qtdlivreDia31 =  18 - $qtdOcupadaDia31;

}else{
    include_once("vazio.php");
}
?>



