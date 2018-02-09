<?php
class RelatorioPonto
{
    public function imprimir(FichaPonto $ficha, $dtInicio, $dtFim, BancoHoras $bancoHoras)
    {
        echo "<h1>Relatorio</h1>";
        $pontos = $ficha->getPontos($dataInicio, $dataFim);
        foreach($pontos as $ponto) {
            echo $ponto->data . "...";
        }
        
        $saldoBancoHoras = $bancoHoras->calculaBancoHoras($ficha);
        echo "Saldo do banco de horas: " . $bancoHoras;
    }
}

class BancoHoras
{
    public function calculaBancoHoras(FichaPonto $ficha)
    {
        //calcula o banco de horas do funcionario e retorna inteiro
    }
}