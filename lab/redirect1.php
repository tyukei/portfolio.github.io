<html>
<body>
<?php

$CLIENTID="1rusOLs0QDeo9GeTYiMXCQ";
$REDIRECTURI="https://tyukei.github.io/portfolio.github.io/lab/redirect2.php";
$REQUESTURI="https://zoom.us/oauth/authorize?response_type=code&client_id=" . $CLIENTID . "&redirect_uri=" . $REDIRECTURI;

echo("<a href=" . $REQUESTURI . "> Go! </a>")
?>

</body>
</html>
