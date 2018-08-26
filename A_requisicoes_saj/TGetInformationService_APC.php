<?php
//PHP_VERSION
  $sRet =
'<?xml version="1.0" encoding="ISO-8859-1"?>
           <service name="httpd.exe" status="1" diretorio="" version="' .PHP_VERSION .'" tamanho="" datetime_app="" datetime_server="'.date('d/m/Y H:i:s').'">
               <dados></dados>
           </service>';
/*
        '<?xml version="1.0" encoding="ISO-8859-1"?>
        <APC version="' . apache_get_version() .'">
          <INF codigo="1" descricao="Apache Tomcat" historico="" motivo="" status="1" erro="">
          </INF>
        </APC>';
*/

  echo $sRet;


?>