<?php 
    namespace Models;

    class ContatoModel{
        public static function enviarFormulario(){
			$mail = new \Email('','','','');
            $mail->addAdress('', 'Matheus');
            $mail->formatarEmail(array('assunto'=>'Mensagem do site','corpo'=>'Aqui é uma mensagem do site'));
            $mail->enviarEmail();
        }

    }

?>