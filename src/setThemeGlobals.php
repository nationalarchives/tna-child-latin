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
            $pre_crumbs = array('Site home title' => '/');
            break;
        case 'external':
            $pre_crumbs = array(
                'About' => '/about/',
                'Site home title' => '/about/site-home-title/'
            );
            $pre_path = '/about/site-home-title';
            break;
    }
}