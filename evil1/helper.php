<?php

/**
 * getClientMac
 * Consigue el mac address del cliente por el IP
 * Regresa el string del mac address
 * @param $clientIP : El IP del cliente
 * @return string
 */
function getClientMac($clientIP)
{
    return trim(exec("grep " . escapeshellarg($clientIP) . " /tmp/dhcp.leases | awk '{print $2}'"));
}

/**
 * getClientSSID
 * Consigue el SSID del client asociado a la IP
 * @return string
 */
function getClientSSID($clientIP)
{
 
    $mac = getClientMac($clientIP);


    $pineAPLogPath = trim(file_get_contents('/etc/pineapple/pineap_log_location'));


    return trim(exec("grep " . $mac . " " . $pineAPLogPath . "pineap.log | grep 'Association' | awk -F ',' '{print $4}'"));

}

/**
 * getClientHostName
 * Consigue el nombre del host del IP conectado
 * @return string
 */
function getClientHostName($clientIP)
{
    return trim(exec("grep " . escapeshellarg($clientIP) . " /tmp/dhcp.leases | awk '{print $4}'"));
}