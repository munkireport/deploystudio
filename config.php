<?php

return [
  /*
|===============================================
| DeployStudio
|===============================================
|
| A working DeployStudio server is required for use of this module.
|
| To use the DeployStudio module, set 'deploystudio_enable' to TRUE and
| enter the server, username, and password for accessing your primary
| DeployStudio server.
|
| This module currently only pulls data from the primary DeployStudio
| server. This means if a machine was imaged off of a replica server
| its data may not show in MunkiReport.
*/
  'deploystudio_enable' => env('DEPLOYSTUDIO_ENABLE', false),
  'deploystudio_server' => env('DEPLOYSTUDIO_SERVER'),// no trailing slash
  'deploystudio_username' => env('DEPLOYSTUDIO_USERNAME'),
  'deploystudio_password' => env('DEPLOYSTUDIO_PASSWORD'),
];
