<?php

class EmailConfig {

        public $default = array(
            'transport' => 'Smtp',
            'from' => array('hub@dev.org.ng' => 'DevHub'),
            'host' => 'mail.dev.org.ng',
            'port' => 25,
            'timeout' => 30,
            'username' => 'hub@dev.org.ng',
            'password' => 'hubber01',
            'client' => null,
            'log' => false,
                //'charset' => 'utf-8',
                //'headerCharset' => 'utf-8',
        );
        public $gmail = array(
            'host' => 'ssl://smtp.gmail.com',
            'port' => 465,
            'username' => 'your@gmail.com',
            'password' => 'password',
            'transport' => 'Smtp'
        );
        public $fast = array(
            'from' => 'you@localhost',
            'sender' => null,
            'to' => null,
            'cc' => null,
            'bcc' => null,
            'replyTo' => null,
            'readReceipt' => null,
            'returnPath' => null,
            'messageId' => true,
            'subject' => null,
            'message' => null,
            'headers' => null,
            'viewRender' => null,
            'template' => false,
            'layout' => false,
            'viewVars' => null,
            'attachments' => null,
            'emailFormat' => null,
            'transport' => 'Smtp',
            'host' => 'localhost',
            'port' => 25,
            'timeout' => 30,
            'username' => 'user',
            'password' => 'secret',
            'client' => null,
            'log' => true,
                //'charset' => 'utf-8',
                //'headerCharset' => 'utf-8',
        );

}
