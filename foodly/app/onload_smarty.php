<?php

/*
 * The script automatically executed when getSmarty() is called for the first time.
 * Use it to setup the engine or pass additional variables that are always needed.
 */
function url($params, $smarty)
{
  $action = '';
  if (isset($params['action'])){
      $action = $params['action'];
      unset($params['action']);
  }
  return \core\Utils::URL($action, $params);
}

function rel_url($params, $smarty)
{
  $action = '';
  if (isset($params['action'])){
      $action = $params['action'];
      unset($params['action']);
  }
  return \core\Utils::relURL($action, $params);
}

\core\App::getSmarty()->registerPlugin("function","url", "url");
\core\App::getSmarty()->registerPlugin("function","rel_url", "rel_url");

#assign variables
#\core\App::getSmarty()->assign('variable',$variable);
\core\App::getSmarty()->assign('conf', \core\App::getConf());
\core\App::getSmarty()->assign('messages', \core\App::getMessages());

$mainRoute = 'main';

if (!empty(\core\App::getConf()->roles)) {
    if (\core\RoleUtils::inRole('ADMIN')) {
        $mainRoute = 'main_admin';
    } elseif (\core\RoleUtils::inRole('PRACOWNIK_RESTAURACJI')) {
        $mainRoute = 'main_pracownik';
    } elseif (\core\RoleUtils::inRole('DOSTAWCA')) {
        $mainRoute = 'main_dostawca';
    } elseif (\core\RoleUtils::inRole('KLIENT')) {
        $mainRoute = 'main_klient';
    }
}

\core\App::getSmarty()->assign('mainRoute', $mainRoute);