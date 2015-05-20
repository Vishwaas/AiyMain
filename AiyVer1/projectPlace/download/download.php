<?php

header('Content-type: application/octet-stream');


header('Content-Disposition: attachment; filename="facebookpageinformation.rar"');


readfile('facebookpageinformation.rar');

?>