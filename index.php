<?php
include "header.php";
include "banco.php";
?>
<div class="container-fluid">
  <h1>Recibo - Vila Nova Perus</h1>
  <br><br><br>
  <div class="row align-items-start">
    <div class="col-2">
      <?php
        include "nav.php";
        ?>
    </div>
    <div class="col-9">
      <h3>Tabela de Entradas</h3>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Dia</th>
            <th scope="col">Oferta</th>
            <th scope="col">Dizimo</th>
            <th scope="col">Pix</th>
            <th scope="col">Total</th>
          </tr>
        </thead>
        <tbody>
          
        </tbody>
        <tfoot>
          <th scope="col">Total</th>
          <th scope="col">R$ 981,75</th>
          <th scope="col">R$ 8240,00</th>
          <th scope="col">R$ 932,00</th>
          <th scope="col">R$ 10.153,75</th>
        </tfoot>
      </table>
  <br><br><br>
  <h3>Tabela de Saídas</h3>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Dia</th>
        <th scope="col">Valor</th>
        <th scope="col">Descrição</th>
        <th scope="col">Igreja</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">25/12/2021</th>
        <td>R$ 490,75</td>
        <td>Compra de Material de Limpeza</td>
        <td>Vila Nova Perus</td>
      </tr>
      <tr>
        <th scope="row">25/12/2021</th>
        <td>R$ 490,75</td>
        <td>Internet</td>
        <td>Vila Perus</td>
      </tr>
    </tbody>
  <tfoot>
    <th scope="col">Total</th>
    <th scope="col">R$ 981,75</th>
    <th scope="col"></th>
    <th scope="col"></th>
    <th scope="col"></th>
  </tfoot>
</table>
<br><br><br>
<h3>Tabela de Liquidos</h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Dia</th>
      <th scope="col">Total - Entrada</th>
      <th scope="col">Total - Saída</th>
      <th scope="col">Liquido</th>
    </tr>
    
  </thead>
  <tbody>
    <tr>
      <th scope="row">25/12/2021</th>
      <td>R$ 4.610,75</td>
      <td>R$ 981,75</td>
      <td>R$ 3.629,00</td>
    </tr>
    <tr>
      <th scope="row">26/12/2021</th>
      <td>R$ 4.610,75</td>
      <td>R$ 981,75</td>
      <td>R$ 3.629,00</td>
    </tr>
    <tr>
      <th scope="row">27/12/2021</th>
      <td>R$ 4.610,75</td>
      <td>R$ 0,00</td>
      <td>R$ 4.610,75</td>
    </tr>
  </tbody>
  <tfoot>
    <th scope="col">Total</th>
    <th scope="col">R$ 13.832,25</th>
    <th scope="col">R$ 1.963,50</th>
    <th scope="col">R$ 11.868,75</th>
    <th scope="col"></th>
  </tfoot>
</table>
<br><br><br>
<h3>Tabela de Deposito</h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Dia</th>
      <th scope="col">Deposito</th>
      <th scope="col">Em mãos</th>
      <th scope="col">Total</th>
    </tr>
    
  </thead>
  <tbody>
    <tr>
      <th scope="row">25/12/2021</th>
      <td>R$ 3.629,00</td>
      <td>R$ 981,75</td>
      <td>R$ 4.610,75</td>
    </tr>
    
  </tbody>
  <tfoot>
    <th scope="col">Total</th>
    <th scope="col">R$ 3.629,00</th>
    <th scope="col">R$ 981,75</th>
    <th scope="col">R$ 4.610,75</th>
    <th scope="col"></th>
  </tfoot>
</table>

    </div>
  </div>



</div>

<?php
include "footer.php";

?>
