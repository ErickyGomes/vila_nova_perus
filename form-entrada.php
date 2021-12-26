<?php
include "header.php";
include "banco.php";

$data = $_POST['data'] ?? null;
$valor = $_POST['valor'] ?? null;
$pix = $_POST['pix'] ?? null;
$status = $_POST['status']  ?? null;
$tipo = $_POST['tipo'] ?? null;

if (!empty($pix)) {
    try {
        $q = $banco->prepare("INSERT INTO entrada (dataEnt, valorEnt, pixEnt, tipoEnt, status) VALUES ('$data', '$valor', '$pix', '$tipo', '$status')");
        $q->execute();
    } catch (PDOException $e) {
        echo 'Erro: ' .$e->getMessage();
    }
   
}


?>
<div class="container">
    <br><br><br>
    <div class="row align-items-start">
        <div class="col-2">
            <?php
                include "nav.php";
                ?>
        </div>
        <div class="col-9">
            <h1>Formulario de Entrada</h1>
            <form action="" method="post">
                <input type="hidden" name="status" value="Ativo">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Data</span>
                    <input type="date" class="form-control" name="data" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Valor</span>
                    <input type="text" class="form-control" placeholder="Digite apenas os numeros ex. 150.00" name="valor" required>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pix" id="exampleRadios1" value="Sim">
                    <label class="form-check-label" for="exampleRadios1">
                        PIX - Sim
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pix" id="exampleRadios2" value="Não" checked>
                    <label class="form-check-label" for="exampleRadios2">
                        PIX - Não
                    </label>
                </div>
                <br>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Tipo</span>
                    <select class="form-control" name="tipo" id="">
                        <option value="Oferta">Oferta</option>
                        <option value="Dizimo">Dizimo</option>
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">Inserir</button>
            </form>
            <br><br><br>
            <h3>Tabela de Entradas</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Dia</th>
                        <th scope="col">Valor</th>
                        <th scope="col">PIX?</th>
                        <th scope="col">Tipo</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $q = "Select * from entrada WHERE status = 'Ativo'";
                    $busca = $banco-> query($q);
                    if (!$busca) {
                        echo "<tr><td>Infelizmente a busca deu errado</td></tr>";
                    }else{
                        if ($busca->num_rows == 0) {
                            echo "<tr><td>Não foi encontrado nenhum registro</td></tr>";
                        } else {
                            while ($reg = $busca->fetch_object()) {
                            $dataBanco = $reg->dataEnt;
                            $dataBanco = DateTime::createFromFormat("Y-m-d",$dataBanco);
                            
                ?> 
                        <tr>
                        <th scope="row"><?php echo $dataBanco->format("d/m/Y");?></th>
                        <td><?php echo "R$ " .number_format($reg->valorEnt,2,',','.');?></td>
                        <td><?php echo $reg->pixEnt;?></td>
                        <td><?php echo $reg->tipoEnt;?></td>
                        <td><a class ="btn btn-danger btn-sm" href="form-entrada.php?id='<?php echo $reg->idEnt?>'">Excluir</a></td>
                        </tr>
                <?php           
                            }
                        }
                    }
                ?>
                   
                    
                </tbody>
                <tfoot>
                    <th scope="col">Total</th>
                    <th scope="col">Ofertas</th>
                    <?php
                        $q = "Select * from viewEntOferta";
                        $busca = $banco-> query($q);
                        if (!$busca->num_rows == 0) {
                            $reg = $busca->fetch_object()
                           ?>
                            <td scope="col"><span><?php echo "R$ " .number_format($reg->somaEntOferta,2,',','.');?></span></td>
                            <?php
                        }
                    ?>
                    <th scope="col">Dizimo</th>
                    <?php
                        $q = "Select * from viewEntDizimo";
                        $busca = $banco-> query($q);
                        if (!$busca->num_rows == 0) {
                            $reg = $busca->fetch_object()
                           ?>
                            
                            <td scope="col"><span><?php echo "R$ " .number_format($reg->somaEntDizimo,2,',','.');?></span></td>
                            <?php
                        }
                    ?>

                    
                    <th scope="col">PIX</th>
                    <?php
                        $q = "Select * from viewEntPix";
                        $busca = $banco-> query($q);
                        if (!$busca->num_rows == 0) {
                            $reg = $busca->fetch_object()
                           ?>
                            
                            <td scope="col"><span><?php echo "R$ " .number_format($reg->somaEntPix,2,',','.');?></span></td>
                            <?php
                        }
                    ?>
                    

                   
                </tfoot>
            </table>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>

