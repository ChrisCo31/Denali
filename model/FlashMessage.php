<?php


class FlashMessage
{


    public function setMessage($message)
    {
        $_SESSION['message'] = $message;
    }

    public function getMessage()
    {
        $message = $_SESSION['message'];
        unset($_SESSION['message'];
        return $message;
    }

    public function exist()
    {
        if(isset($_SESSION['message') return true;
        return false;
    }


}

// template

$message = new flashMessage();

if($message->exist()) echo $message->getMessage();
