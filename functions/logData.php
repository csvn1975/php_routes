<?php

 function logData(string $level, string $message, ?array $data = null)
    {
       
        $today = date('Y-m-d');
        $now = date('Y-m-d H:i:s');
        if (!is_dir(LOG_DIR)) {
            mkdir(LOG_DIR, 0777, true);
        }
        $logFile = LOG_DIR . '/log-' . $today . '.log';
    
        $logData = '[' . $now . '-' . $level . '] ' . $message . "\n";
    
        if ($data) {
            $dataString = print_r($data, true) . "\n";
            $logData .= $dataString;
        }    
        file_put_contents($logFile, $logData, FILE_APPEND);
    }


function logEnd($string = '*')
{
    logData('INFO', str_repeat($string,100));
}
    

