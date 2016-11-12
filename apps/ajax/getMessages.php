<?php
session_start();
require "../../lib/Chat.class.php";
$chat = new Chat;
$from = $chat->getAppKey($_SESSION['email']);
$to = $_SESSION['payload']['msgid'];
$chatId = $chat->makeChatId(array($to, $from));

$rs = $mysqli->query("select *from messages where chatId='$chatId' limit 10");
while($row = $rs->fetch_object())
{
	if($row->senderId == $from) {
?>

    <li class="media reversed">
        <div class="media-body">
            <div class="media-content"><?php echo $row->msg; ?></div>
            <span class="media-annotation display-block mt-10">
            <?php 
            	$date = new DateTime($row->ts);
            	echo $date->format('D jS M Y g:ia');
            ?> 
            <a href="#"><i class="icon-pin-alt position-right text-muted"></i></a></span>
        </div>
        <div class="media-right">
            <a href="assets/images/demo/images/3.png">
                <img src="assets/images/demo/users/face1.jpg" class="img-circle" alt="">
            </a>
        </div>
    </li>
    <?php 
}
	else{
		?>
	    <li class="media">
	    <div class="media-left">
            <a href="assets/images/demo/images/3.png">
                <img src="assets/images/demo/users/face1.jpg" class="img-circle" alt="">
            </a>
        </div>
        <div class="media-body">
            <div class="media-content"><?php echo $row->msg; ?></div>
            <span class="media-annotation display-block mt-10">
            <?php 
            	$date = new DateTime($row->ts);
            	echo $date->format('D jS M Y g:ia');
            ?> 
            <a href="#"><i class="icon-pin-alt position-right text-muted"></i></a></span>
        </div>
    </li>
		<?php
	}
 } 
 ?>
