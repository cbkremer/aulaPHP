<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula php</title>
</head>
<body>
    <h1>Hello world</h1>
    <?php 
        echo "<h3>Texto a partir da tag PHP!</h3>";
        echo "<p>Texto sem tag, depois com tag p</p>";
        echo "Outro texto sem tag, agora com tag br</br>";
        echo "mais um texto sem tag";
        
    ?>
    <p>
        Commodo cillum qui laboris est nisi Lorem cupidatat exercitation dolore ullamco incididunt laboris. 
        Amet sunt qui fugiat aliqua anim enim aliquip do velit velit cupidatat voluptate. 
        Commodo aliqua qui velit tempor enim aute quis id consequat exercitation cupidatat ut mollit. 
        Occaecat quis non nulla duis est nulla elit.
    </p>
    <?php 
        $idade = 41;
        $dias = 365;
        $result = $idade * $dias;
    ?>
    <p>Eu tenho <?php echo $result; ?> dias de vida</p>
    <?php 
        $alunos = array(2,6,4);
        array_push($alunos,54645);
        print_r($alunos);
        echo "</br>";
        echo "asd".$alunos[0];
        echo "<h6>testando array com key</h6>";
        $notas = array("nota1"=>7,"nota2"=>8,"nota3"=>5);
        echo $notas['nota2']."</br>";
        print_r($notas);
        echo "</br>";
        var_dump($notas);
    ?>
</body>
</html>