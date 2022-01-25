<?php

namespace src;


class Arquivo {

    private $dados = array();

    public function setDados(string $nome, string $cpf, string $email) : void{

        array_push(
            $this->dados,
             [
                'nome'=> iconv('iso-8859-1', 'utf-8', $nome),
                'cpf' => $cpf,
                'email' => $email
            ]
        );

    }

    public function getDados() : array {

        return $this->dados;
    }

    public function lerArquivoCSV(string $caminho): void {

        $handle = fopen($caminho, 'r');

        while(($linha = fgetcsv($handle, 10000, ';')) !== false){
            $this->setDados($linha[0], $linha[1], $linha[2]);
        }

        fclose($handle);
    }

    public function lerArquivoTXT(string $caminho): void {

        $handle = fopen($caminho, 'r');

        while(!feof($handle)){

            $linha = fgets($handle);//o ponteiro interno do arquivo e incrementado
            $cpf   = substr($linha, 0, 11);//cpf
            $nome  = substr($linha, 11, 30);//nome
            $email = substr($linha, 41, 60);//email

            $this->setDados($nome, $cpf, $email);
        }

        fclose($handle);
    }

}