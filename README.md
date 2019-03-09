# Hue CLI

## Installation

1. `git pull https://github.com/spcbar/hue-cli`
2. Install PHP.
3. Change the config to your needs, it has hardcoded IP of the Hue Hub, username and lamp ID.

## Usage

### CLI

Run `./hue.sh COMMAND`.

#### Available commands

- `on`: turns the lamp on 
- `off`: turns the lamp off
- `brightness VALUE`: set brightness

### Modules

- `php ./app/satellite.php`

### Thinking mode

Start before interaction:
`make high-low-start`

End after interaction:
`make high-low-stop`

### Web

Run the web app:
```
make web
open http://localhost:9080/hue.html
open http://localhost:9080/countdown.php
```

Press `start` button and speak.  
The lamp will change brightness according to voice amplitude.
