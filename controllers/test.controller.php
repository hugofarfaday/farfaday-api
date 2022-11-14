<?php 



class TestController {

    public function __construct()
    {
        $this->action = null;

        if($_SERVER['REQUEST_METHOD'] == "GET" ){
            $this->action = $this->sendTestMail();
        }

    }

    function sendTestMail(){
        $ms = new MailerService();
        $mailParams = [
            "fromAddress" => ["newsletter@monblog.com","newsletter monblog.com"],
            "destAddresses" => ["ugolescargot0601@gmail.com"],
            "replyAddress" => ["info@monblog.com", "information monblog.com"],
            "subject" => "Newsletter nomblog.com",
            "body" => "This is the HTML message sent by <b>monblog.com</b>",
            "altBody" => "This is the plain text message for non-HTML mail clients"
        ];
        return $ms->send($mailParams);
    }

}?>