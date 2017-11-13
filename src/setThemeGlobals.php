<?php

/**
 * Sets globals which are used by URL and breadcrumb generating code
 *
 * @param string $environment - a string of either 'local', 'development' or 'external'
 */
function setThemeGlobals($environment = null) {
    if ($environment === null) {
        throw new BadFunctionCallException('setThemeGlobals function must be passed at string that represents the environment');
    }

    global $pre_path;
    global $pre_crumbs;

    switch ($environment) {
        case 'local':
        case 'development':
            $pre_path = '';
            $pre_crumbs = array('Latin' => '/');
            break;
        case 'external':
            $pre_crumbs = array(
                'Latin' => '/latin/'
            );
            $pre_path = '/latin';
            break;
    }
}