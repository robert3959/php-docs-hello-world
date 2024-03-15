<?php

echo 'Twoje IP: '.$_SERVER['REMOTE_ADDR'];
echo '  </p>  ';
echo 'Host: '.gethostbyaddr($_SERVER['REMOTE_ADDR']);
echo '  ';

