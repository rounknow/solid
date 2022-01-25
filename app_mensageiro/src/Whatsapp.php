<?php

    namespace src;

    use src\IMensagemToken;

    class Whatsapp implements IMensagemToken{

        public function enviar() : void{
            
            echo 'Whatsapp seu token é 777-666';

        }
    }