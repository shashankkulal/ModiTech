<?php
require "db.class.php";

class Chat
{
    public function makeChatId($id)
    {
        sort($id);
        $sorted = $id[0].$id[1];
        $chatId = md5($sorted);
        return $chatId;
    }

    public function getAppKey($email)
    {
        $rs = $GLOBALS['mysqli']->query("select appkey from users where email='$email' limit 1");
        $row = $rs->fetch_object();
        return $row->appkey;
    }
}
?>