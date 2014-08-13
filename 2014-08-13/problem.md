# Argument Parser

A simple CLI argument parser.

## Usage examples

## Example 1: arguments presence

User input: "-l -h"

Available options: ["-l": "present", "-h": "present", "-a": "present", "-A": "present"]

Result:

```
Args.setOptions(["-l": "present", "-h": "present", "-a": "present", "-A": "present"])
Args.setInput("-l -h")
Args.has("-l") -> true
Args.has("-h") -> true
Args.has("-a") -> false
Args.has("-A") -> false
```

## Example 2: argument's value

User input: "-f yellow -b black"

Available options: ["-f": "alpha", "-b": "alpha", "-l": "present"]

Result:

```
Args.setOptions(["-f": "alpha", "-b": "alpha", "-l": "present"])
Args.setInput("-f yellow -b black")
Args.has("-f") -> true
Args.value("-f") -> yellow
Args.has("-b") -> true
Args.value("-b") -> black
Args.has("-l") -> false
```

## Example 3: argument's default value

User input: "-f yellow -l"

Available options: ["-f": "alpha:white", "-b": "alpha:black", "-l": "present"]

Result:

```
Args.setOptions(["-f": "alpha:white", "-b": "alpha:black"])
Args.setOption("-l", "present") **Another method for argument definition**
Args.setInput("-f yellow -l")
Args.has("-f") -> true
Args.value("-f") -> yellow
Args.has("-b") -> true (Always true when default value present)
Args.value("-b") -> black
Args.has("-l") -> true
```

## Example 4: long names

User input: "--font-color yellow --background black"

Available options: ["-f|--font-color": "alpha:white", "-b|--background": "alpha:black", "-l": "present"]

Result:

```
Args.setOptions(["-f|--font-color": "alpha:white", "-b|--background": "alpha:black", "-l": "present"])
Args.setInput("--font-color yellow --background black")
Args.has("-f") -> true
Args.has("--font-color") -> true
Args.value("-f") -> yellow
Args.value("--font-color") -> yellow
```
