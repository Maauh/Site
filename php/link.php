<link href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<?php
function EchoPostType($POSTTYPE, $URL)
{
    switch ($POSTTYPE)
    {
        case 'iframe':
        {
            echo "<div class=\"col-12 col-sm-12 col-md-6 embed-responsive embed-responsive-16by9\"><iframe src=\"$URL\" class=\"embed-responsive-item\" ></iframe></div>";
        }break;
        case 'img':
        {
            echo "<div class=\"col-12 col-sm-12 col-md-6 img-container\"><img alt=\"#\" src=\"$URL\" class=\"img-thumbnail rounded border border-dark p-0\"/></div>";
        }break;
    }
};
?>