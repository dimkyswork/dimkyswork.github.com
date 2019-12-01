<?php
$connection = mysqli_connect('127.0.0.1', 'root', '', 'one');

if ($connection == false) {
    echo 'Не удалось';
    echo mysqli_connect_error();
    exit();
}


$result = mysqli_query($connection, "SELECT * FROM  `articles`");
$r1 = mysqli_fetch_assoc($result);
$articleText = $r1['text'];
$articleLink = $r1['link'];

$maxLen = 200;
// $articleText = "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?";
// $articleLink = "https://ru.lipsum.com/";
if (strlen($articleText) > $maxLen) {
    $i = $maxLen;
    while ($i > 0 && $articleText[$i] != " ") {$i--;}
    $articlePreview = trim(substr ($articleText, 0,  $i));
    $articlePreview .= "...";
} else {
    $articlePreview = $articleText;
}

$cnt = 0;
$len = strlen($articlePreview);
$i = $len - 1;
$inWord = false;
while ($i > 0 && $cnt < 3) {
    if($articlePreview[$i] != " ") {
        $inWord = true;
    } else if($inWord){
        $cnt++;
        $inWord = false;
    }
    $i--;
}
$linkText = substr($articlePreview, $i+1);
$articlePreview = substr($articlePreview, 0, $i+1);
?>

<span><?php echo $articlePreview?></span>
<a href="<?php echo $articleLink?>"><?php echo $linkText?></a>
