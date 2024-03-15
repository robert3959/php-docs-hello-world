<?php

echo 'Twoje IP: '.$_SERVER['REMOTE_ADDR'];
echo 'Drugie IP: '.$_SERVER['HTTP_X_FORWARDED_FOR'];
echo '  </p>  ';
echo 'Host: '.gethostbyaddr($_SERVER['REMOTE_ADDR']);
echo '  ';

