<?php
class RelatorioPonto
{
    public function imprimir($pontos, $saldoBancoHoras)
    {
        echo "<h1>Relatorio</h1>";
        
        foreach($pontos as $ponto) {
            echo $ponto->data . "...";
        }
        
        echo "Saldo do banco de horas: " . $saldoBancoHoras;
    }
}