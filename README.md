```bash
  _____        _         ______                         _       
|  __ \      | |       |  ____|                       | |      
| |  | | __ _| |_ ___  | |__ ___  _ __ _ __ ___   __ _| |_ ___ 
| |  | |/ _` | __/ _ \ |  __/ _ \| '__| '_ ` _ \ / _` | __/ __|
| |__| | (_| | ||  __/ | | | (_) | |  | | | | | | (_| | |_\__ \
|_____/ \__,_|\__\___| |_|  \___/|_|  |_| |_| |_|\__,_|\__|___/

This CLI application provides date formatting tokens for some of the
most commonly used libraries/packages/languages in your terminal. 
```

<img src="https://github.com/glennforrest/cli-date-formats/blob/main/assets/date-formats%20example%20output.png" />

---

The following languages/packages are currently supported:
* [php](https://www.php.net/manual/en/datetime.format.php)
* [dayjs](https://day.js.org/docs/en/display/format)
* [momentjs](https://momentjs.com/docs/#/displaying/)
<!-- todo - put a screenshot of how it looks in here -->


## Installation
`composer global require glennforrest/cli-date-formats`

### Command Options
```bash
date-formats

Description:
  Display date formats for a given language or package

Usage:
  date-formats [options] [--] [<vendor>]

Arguments:
  vendor                The language or package to show date formats for

Options:
      --compact         Show only the date formats
  -h, --help            Display help for the given command. When no command is given display help for the date-formats command
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
  -n, --no-interaction  Do not ask any interactive question
      --env[=ENV]       The environment the command should run under
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
```

#### Example

```bash
date-formats php
```
---

Notice anything not working? Feel free to open up an issue [here](https://github.com/glennforrest/cli-date-formats/issues/new)
