<?php
/**
 *
 * Uses two IP addresses to determine and return a string corresponding to the environment
 *
 * @param string $server_ip - should be called with reference to $_SERVER['SERVER_ADDR']
 * @param string $client_ip - should be called with reference to $_SERVER['REMOTE_ADDR']
 * @throws BadFunctionCallException if either argument is omitted
 * @return string
 */
function identifyEnvironmentFromIP($server_ip = null, $client_ip = null)
{
    $headers = apache_request_headers();
    if ( isset($_SERVER['HTTP_X_NGINX_PROXY']) && isset($headers['X_HOST_TYPE']) && $headers['X_HOST_TYPE'] == 'public' ) {
        return 'aws_public';
    }
    
    if ($server_ip === null || $client_ip === null) {
        throw new BadFunctionCallException('identifyEnvironmentFromIP function must be passed at IP');
    }

    if ($client_ip === $server_ip) {
        return 'development';
    }

    if (substr($client_ip, 0, 3) === '10.') {
        return 'internal';
    }

    return 'external';

}