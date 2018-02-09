<?php
class RelatorioPonto
{
    public function imprimir(FichaPonto $ficha, $dtInicio, $dtFim)
    {
        echo "<h1>Relatorio</h1>";
        $pontos = $ficha->getPontos($dataInicio, $dataFim);
        foreach($pontos as $ponto) {
            echo $ponto->data . "...";
        }
        
        $bancoHoras = $this->calculaBancoHoras($ficha);
        echo "Saldo do banco de horas: " . $bancoHoras;
    }
    
    private function calculaBancoHoras($ficha)
    {
        //calcula o banco de horas do funcionario e retorna valor
    }
}