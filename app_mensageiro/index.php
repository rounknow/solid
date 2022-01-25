<?php

    require __DIR__.'/vendor/autoload.php';

    use src\Mensageiro;
    use src\Email;
    use src\Sms;
    use src\Whatsapp;

//------- canal e-mail

    $msg = new Mensageiro(new Email());
    $msg->enviarToken();

    echo '<br>';
    //------- canal sms
    $msg2 = new Mensageiro(new Sms());
    $msg2->enviarToken();

    echo '<br>';
    //------- canal whatsapp
    $msg3 = new Mensageiro(new Whatsapp());
    $msg3->enviarToken();


    /*
    //------- canal e-mail

    $msg = new Mensageiro();
    $msg->setCanal('email');
    $msg->enviarToken();

    echo '<br>';
    //------- canal sms
    $msg2 = new Mensageiro();
    $msg2->setCanal('sms');
    $msg2->enviarToken();*/