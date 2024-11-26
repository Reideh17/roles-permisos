<?php

namespace App\Helpers;

class AppHelper
{
    public static function getAppVersion()
    {
        //$composer = json_decode(file_get_contents(base_path('composer.json')), true);
        //return $composer['extra']['version'] ?? '0.0.0';

          // Ejecutar git describe para obtener la versión (tag o commit)
          $version = trim(shell_exec('git describe --tags --always'));
          return $version ?: '0.0.0'; // Devuelve '0.0.0' si no se encuentra ninguna versión
      
    }
}