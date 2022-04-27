<?php
//set_time_limit(0);
header('Content-Type: image/jpeg');
//header('Content-Type: multipart/x-mixed-replace;boundary=ipcamera'); 
readfile("http://user:password@IP:port/snapshot.cgi");
?>
