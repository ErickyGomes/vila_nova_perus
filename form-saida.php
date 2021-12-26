<?php
include "header.php";
include "banco.php";
?>
<div class="container">
    <br><br><br>
    <div class="row align-items-start">
        <div class="col-2">
            <?php
                include "nav.php";
                ?>
        </div>
        <div class="col-10">
            <h1>Formulario de Saída</h1>
            <form action="#" method="get">
                <input type="hidden" name="status" value="Ativo">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Data</span>
                    <input type="date" class="form-control" name="data">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Valor</span>
                    <input type="text" class="form-control"  placeholder="Digite apenas os numeros ex. 150,00" name="valor">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Descrição</span>
                    <input type="text" class="form-control" name="descrição">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Igreja</span>
                    <select class="form-control" name="igreja" id="">
                        <option value="vila nova perus">Vila Nova Perus</option>
                        <option value="vila perus">Vila Perus</option>
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">Inserir</button>
            </form>
            <br><br><br>
            <h3>Tabela de Saída</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Dia</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Igreja</th>
                        <th scope="col">Opção</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">25/12/2021</th>
                        <td>R$ 490,75</td>
                        <td>Compra de Material de Limpeza</td>
                        <td>Vila Nova Perus</td>
                        <td><a class ="btn btn-success btn-sm" href="">Editar</a><a class ="btn btn-danger btn-sm" href="">Excluir</a></td>
                    </tr>
                    <tr>
                        <th scope="row">25/12/2021</th>
                        <td>R$ 490,75</td>
                        <td>Internet</td>
                        <td>Vila Perus</td>
                        <td><a class ="btn btn-success btn-sm" href="">Editar</a><a class ="btn btn-danger btn-sm" href="">Excluir</a></td>
                    </tr>
                    
                </tbody>
                <tfoot>
                    <th scope="col">Total</th>
                    <th scope="col">Vila Nova Perus</th>
                    <td scope="col">R$ 490,75</td>
                    <th scope="col">Vila Perus</th>
                    <td scope="col">R$ 490,75</td>
                    <th scope="col">Total - Geral</th>
                    <td scope="col">R$ 981,50</td>

                </tfoot>
            </table>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>

