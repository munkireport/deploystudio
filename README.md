DeployStudio module
==============

A working DeployStudio server is required for use of this module.
To use the DeployStudio module, set 'DEPLOYSTUDIO_ENABLE' to TRUE and
enter the server, username, and password for accessing your primary
DeployStudio server.
This module currently only pulls data from the primary DeployStudio
server. This means if a machine was imaged off of a replica server
its data may not show in MunkiReport.
The client listing table provides the following information:
* Last workflow executed by the client.
* Date the last workflow was run
* Duration of last workflow
* Status of last workflow

The DeployStudio tab will show a number of important computer configurations set in DeployStudio
*  Computer ARD fields

Configuration
-------------

The DeployStudio module has four settings that have to be managed by adding them to the server environment variables or the `.env` file.

```
DEPLOYSTUDIO_ENABLE=TRUE
DEPLOYSTUDIO_SERVER=https://server:port
DEPLOYSTUDIO_USERNAME=ds_username
DEPLOYSTUDIO_PASSWORD=ds_password
```
