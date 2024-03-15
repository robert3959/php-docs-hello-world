<?php

#echo 'Twoje IP: '.$_SERVER['REMOTE_ADDR'];
#echo '  </p>  ';
$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
$ip_parts = explode(':', $ip);
$cleaned_ip = trim($ip_parts[0]);

echo '  </p>  ';
echo 'Twoje IP: '.$cleaned_ip;
echo '  </p>  ';

#echo 'Host: '.gethostbyaddr($_SERVER['REMOTE_ADDR']);
#echo '  ';

