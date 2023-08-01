<html>
<body>
<?php

$CLIENTID="i8NJn5vETrCUX5TUCru3Pw";
$REDIRECTURI="http://www..../rcvauth.php";
$REQUESTURI="https://zoom.us/oauth/authorize?response_type=code&client_id=" . $CLIENTID . "&redirect_uri=" . $REDIRECTURI;

echo("<a href=" . $REQUESTURI . "> Go! </a>")

?>

</body>
</html>
