<?php

    namespace src;

    class Sms implements IMensagemToken{

        public function enviar() : void {

            echo 'Sms seu token é 888-222';
        }
    }