<?php 
    session_start();
    
    $i = 0;
    $ni = 0;
    $valor_total = 0;
    $_SESSION['peliculas'] = array();
    
    if(isset($_POST['selecione'])){
        $selecione = $_POST['selecione'];

        while($i <= 4){
            if($_POST['qtd'. $i]>0){
                $c = $ni;
                $desc = $_POST['desc'.$i];
                $qtd = $_POST['qtd'.$i];
                $vl = $_POST['vl'.$i];
                $valor_total += ($vl * $qtd);
                
                $_SESSION['peliculas'] = array_merge($_SESSION['peliculas'],
                array($c => array(
                    'ni'=> $i, 
                    'desc'=> $desc, 
                    'qtd'=> $qtd, 
                    'vl'=> $vl
                )));

                $ni++;
            }

            $i++;
        }

        if($ni > 0) {
            $_SESSION['valor_total'] += $valor_total;
            header("Location: ../central/selecao_produtos.php", true, 303);  
        }
    }
    
    if(isset($_POST['volte'])){
        header("Location: ../central/selecao_produtos.php", true, 303);
    }
    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Películas</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='prod.css'>
    <script src='main.js'></script> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body> 

<div class="container-fluid">

<form action="peliculas.php" method="post">
   

        <h1>Selecione sua pelicula ;D</h1>
        
            <div class="linha row">
                
                <div class="coluna col-lg-2 col-md-4 col-sm-6">

                    
                    <img src="imggs/pelicc.jpg" alt="peliculas" width="100%">


                    <input type="hidden" name="desc0" value="Redmi Note 11" readonly>
                    <p>Redmi Note 11</p>
                    Valor: R$15
                    <div class="row">
                        <div class="col-lg-6 col-md-12">

                            <label for="qtd0">Quantidade: </label>
                        </div>
                        <div class="col-lg-6 col-md-12">

                            <input type="number" name="qtd0" id="qtd0" value="0" min="0" style="width: 100%;">
                        </div>
                    </div>
                    <input type="hidden" name="vl0" value="15.00" readonly> 

                </div> 

                <div class="coluna col-lg-2 col-md-4 col-sm-6">

                   
                    <img src="imggs/pelicc.jpg" alt="capinhas" width="100%">


                    <input type="hidden" name="desc1" value="Samsung S20 FE" readonly>
                    <p>Samsung S20 FE</p>
                    Valor: R$10
                    <div class="row">
                        <div class="col-lg-6 col-md-12">

                            <label for="qtd1">Quantidade: </label>
                        </div>
                        <div class="col-lg-6 col-md-12">

                            <input type="number" name="qtd1" id="qtd1" value="0" min="0" style="width: 100%;">
                        </div>
                    </div>
                    <input type="hidden" name="vl1" value="15.00" readonly> 

                </div>   

                <div class="coluna col-lg-2 col-md-4 col-sm-6">

                   
                    <img src="imggs/pelicc.jpg" alt="capinhas" width="100%">


                    <input type="hidden" name="desc2" value="Redmi Note 11" readonly>
                    <p>LG Nexus 5</p>
                    Valor: R$15
                    <div class="row">
                        <div class="col-lg-6 col-md-12">

                            <label for="qtd2">Quantidade: </label>
                        </div>
                        <div class="col-lg-6 col-md-12">

                            <input type="number" name="qtd2" id="qtd2" value="0" min="0" style="width: 100%;">
                        </div>
                    </div>
                    <input type="hidden" name="vl2" value="15.00" readonly> 

                </div>   

                <div class="coluna col-lg-2 col-md-4 col-sm-6">

                    
                    <img src="imggs/pelicc.jpg" alt="capinhas" width="100%">


                    <input type="hidden" name="desc3" value="Samsung Galaxy A30" readonly>
                    <p>Samsung Galaxy A30</p>
                    Valor: R$15
                    <div class="row">
                        <div class="col-lg-6 col-md-12">

                            <label for="qtd3">Quantidade: </label>
                        </div>
                        <div class="col-lg-6 col-md-12">

                            <input type="number" name="qtd3" id="qtd3" value="0" min="0" style="width: 100%;">
                        </div>
                    </div>
                    <input type="hidden" name="vl3" value="15.00" readonly> 

                </div> 

                <div class="coluna col-lg-2 col-md-4 col-sm-6">

                    
                    <img src="imggs/pelicc.jpg" alt="capinhas" width="100%">


                    <input type="hidden" name="desc4" value="Iphone 14 Pro Max" readonly>
                    <p>Iphone 14 Pro Max</p>
                    Valor: R$30
                    <div class="row">
                        <div class="col-lg-6 col-md-12">

                            <label for="qtd4">Quantidade: </label>
                        </div>
                        <div class="col-lg-6 col-md-12">

                            <input type="number" name="qtd4" id="qtd4" value="0" min="0" style="width: 100%;">
                        </div>
                    </div>
                    <input type="hidden" name="vl4" value="30.00" readonly> 

                </div> 

    <!-- <form action="peliculas.php" method="post">
        <center><table>
            <tr>
                <th colspan="5">Selecione sua película ;D</th>
            </tr>
            <tr>
                <th>Indíce</th>
                <th>#</th>
                <th>Descrição</th>
                <th>Quantidade</th>
                <th>Valor</th> 
                <th>Imagem</th>
            </tr>
            <tr>
                <td>1</td>
                <td><input type="checkbox" name="pelicula0" id="pelicula"></td>
                <td><input type="text" name="desc0" value="Redmi Note 11" readonly></td>
                <td><input type="number" name="qtd0" id="qtd0" value="0" min="0"></td>
                <td><input type="text" name="vl0" value="15.00" readonly></td> 
                <td> <img src= "imggs/pelicc.jpg" alt="" widht="60px" height="60px"/></td>
            </tr>
            <tr>
                <td>2</td>
                <td><input type="checkbox" name="pelicula1" id="pelicula"></td>
                <td><input type="text" name="desc1" value="Samsung S20 FE" readonly></td>
                <td><input type="number" name="qtd1" id="qtd1" value="0" min="0"></td>
                <td><input type="number" name="vl1" value="15.00" readonly></td> 
                <td> <img src= "imggs/pelicc.jpg" alt="" widht="60px" height="60px"/></td>
            </tr>
            <tr>
                <td>3</td>
                <td><input type="checkbox" name="pelicula2" id="pelicula"></td>
                <td><input type="text" name="desc2" value="LG Nexus 5" readonly></td>
                <td><input type="number" name="qtd2" id="qtd2" value="0" min="0"></td>
                <td><input type="number" name="vl2" value="15.00" readonly></td> 
                <td> <img src= "imggs/pelicc.jpg" alt="" widht="60px" height="60px"/></td>
            </tr>
            <tr>
                <td>4</td>
                <td><input type="checkbox" name="pelicula3" id="pelicula"></td>
                <td><input type="text" name="desc3" value="Samsung Galaxy A30" readonly></td>
                <td><input type="number" name="qtd3" id="qtd3" value="0" min="0"></td>
                <td><input type="number" name="vl3" value="15.00" readonly></td>  
                <td> <img src= "imggs/pelicc.jpg" alt="" widht="60px" height="60px"/></td>
            </tr>
            <tr>
                <td>5</td>
                <td><input type="checkbox" name="pelicula4" id="pelicula"></td>
                <td><input type="text" name="desc4" value="Iphone 14 Pro Max" readonly></td>
                <td><input type="number" name="qtd4" id="qtd4" value="0" min="0"></td>
                <td><input type="number" name="vl4" value="30.00" readonly></td> 
                <td> <img src= "imggs/pelicc.jpg" alt="" widht="60px" height="60px"/></td>
            </tr>
        </table></center>
        <input type="submit" name="selecione" value = "Selecione">
        <input type="submit" name="volte" value = "Voltar">
    </form> -->  
                <div class="row">
                    <div class="col-lg-3 col-sm-7">
                        <input type="submit" name="selecione" value = "Selecione">
                    </div>
                    <div class="col-lg-3 col-sm-7">
                        <input type="submit" name="volte" value = "Voltar">
                    </div>
                </div>
        </form>
    </div>
</body>

</body>