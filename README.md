# custom-lando
My custom lando project

### Put .lando.yml in your project root and settings.local.php inside docroo/sites/default folder.

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
  - --channel       Sets the update channel
  - --clear         Clears the lando tasks cache
  - --experimental  Activates experimental features
  - --help          Shows lando or delegated command help if applicable
  - --verbose, -v   Runs with extra verbosity

## Examples:
  - lando start            Run lando start
  - lando rebuild --help  Get help about using the lando rebuild command
  - lando destroy -y -vvv  Run lando destroy non-interactively and with maximum verbosity
  - lando --clear          Clear the lando tasks cache

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
  - --channel       Sets the update channel
  - --clear         Clears the lando tasks cache
  - --experimental  Activates experimental features
  - --help          Shows lando or delegated command help if applicable
  - --verbose, -v   Runs with extra verbosity

## Examples:
  - lando start            Run lando start
  - lando rebuild --help  Get help about using the lando rebuild command
  - lando destroy -y -vvv  Run lando destroy non-interactively and with maximum verbosity
  - lando --clear          Clear the lando tasks cache

You need at least one command before moving on