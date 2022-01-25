<?php

    namespace src\extrator;

    class Txt extends Arquivo {

        public function lerArquivo(string $caminho): array {

            $handle = fopen($caminho, 'r');
    
            while(!feof($handle)){
    
                $linha = fgets($handle);//o ponteiro interno do arquivo e incrementado
                $cpf   = substr($linha, 0, 11);//cpf
                $nome  = substr($linha, 11, 30);//nome
                $email = substr($linha, 41, 60);//email
    
                $this->setDados($nome, $cpf, $email);
            }
    
            fclose($handle);

            return $this->getDados();
        }

    }




?>