# custom-lando
Lando It's a free, open source, cross-platform, local development environment and DevOps tool built on Docker container technology and developed by Tandem. 
Designed to work with most major languages, frameworks and services, Lando provides an easy way for developers of all skill levels to specify simple or complex requirements for their projects, and then quickly get to work on them.

The lando file can be used to run any existing drupal 8 sites locally. 
 - Copy .lando.yml file in your project root.
 - Using terminal, from project root, hit -> `lando start`.
 - To import database, use `lando db-import /path/to/datbase`.
 - Now, in your settings.local.php, change database details as follows:
 ```
 if (!defined('LANDO_INFO') && isset($_ENV['LANDO_INFO'])) {
   define('LANDO_INFO', json_decode($_ENV['LANDO_INFO'], TRUE));
 }
 
 // When using lando.
 if (defined('LANDO_INFO')) {
   // One of "internal" or "external". Usually, "internal".
   define('LANDO_DATABASE', 'internal');
 
   $databases['default']['default'] = array(
     'database' => LANDO_INFO['database']['creds']['database'],
     'username' => LANDO_INFO['database']['creds']['user'], 
     'password' => LANDO_INFO['database']['creds']['password'], 
     'prefix' => '',
     'host' => LANDO_INFO['database'][LANDO_DATABASE . '_connection']['host'],
     'port' => LANDO_INFO['database'][LANDO_DATABASE . '_connection']['port'],
     'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
     'driver' => 'mysql',
   );
 }
 ```
  - Hit `lando drush cr`.
  - Hit `lando info` to get local site url.
  - Load the site.
   
# Usage: lando <command> [args] [options]

## Commands:
Command | Description
------------ | -------------
  lando config   |  Displays the lando configuration
  lando destroy  |  Destroys your app
  lando info     |  Prints info about your app
  lando init     |  Initializes code for use with lando
  lando list     |  Lists all running lando apps and containers
  lando logs     |  Displays logs for your app
  lando poweroff |  Spins down all lando related containers
  lando rebuild  |  Rebuilds your app from scratch, preserving data
  lando restart  |  Restarts your app
  lando share    |  Shares your local site publicly
  lando ssh      |  Drops into a shell on a service, runs commands
  lando start    |  Starts your app
  lando stop     |  Stops your app
  lando version  |  Displays the lando version

## Options:
Option | Description
------------ | -------------
  --channel       | Sets the update channel
  --clear         | Clears the lando tasks cache
  --experimental  | Activates experimental features
  --help          | Shows lando or delegated command help if applicable
  --verbose, -v   | Runs with extra verbosity

## Examples:
Example | Description
------------ | -------------
  lando start            | Run lando start
  lando rebuild --help   | Get help about using the lando rebuild command
  lando destroy -y -vvv  | Run lando destroy non-interactively and with maximum verbosity
  lando --clear          | Clear the lando tasks cache

You need at least one command before moving on

# Usage: lando <command> [args] [options]

## Commands:
Command | Description
------------ | -------------
   lando composer     |     Runs composer commands
   lando config       |     Displays the lando configuration
   lando db-export [file] |  Exports database from a service into a file
   lando db-import <file> | Imports a dump file into database service
   lando destroy      |     Destroys your app
   lando info         |     Prints info about your app
   lando init         |     Initializes code for use with lando
   lando list         |     Lists all running lando apps and containers
   lando logs         |     Displays logs for your app
   lando mysql        |     Drops into a MySQL shell on a database service
   lando php          |     Runs php commands
   lando poweroff     |     Spins down all lando related containers
   lando rebuild      |     Rebuilds your app from scratch, preserving data
   lando restart      |     Restarts your app
   lando share        |     Shares your local site publicly
   lando ssh          |     Drops into a shell on a service, runs commands
   lando start        |     Starts your app
   lando stop         |     Stops your app
   lando version      |     Displays the lando version

## Options:
Option | Description
------------ | -------------
  --channel      |   Sets the update channel
  --clear        |   Clears the lando tasks cache
  --experimental |   Activates experimental features
  --help         |   Shows lando or delegated command help if applicable
  --verbose, -v  |   Runs with extra verbosity

## Examples:
Example | Description
------------ | -------------
   lando start            | Run lando start
   lando rebuild --help   | Get help about using the lando rebuild command
   lando destroy -y -vvv  | Run lando destroy non-interactively and with maximum verbosity
   lando --clear          | Clear the lando tasks cache

You need at least one command before moving on