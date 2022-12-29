![](https://dewey.tailorbrands.com/production/brand_version_mockup_image/278/5280378278_b5fda336-6ab8-4a2e-9f9c-83388e0e0d05.png?cb=1621176696?style=centerme)

![](https://img.shields.io/github/languages/code-size/wandersonsousa/simplang?style=centerme) ![](https://img.shields.io/github/issues-raw/wandersonsousa/simplang?style=centerme)

<br><br>

![](https://i.ibb.co/FVYMBfh/ezgif-com-gif-maker.gif")
Simplang is an online pseudo-code execution environment that simulates a machine language.

- Enter the code in the editor
- See changes in memory and register on the side
- ✨Magic ✨


## Documentation of language instructions

Before starting, we need to define some considerations regarding simplang's simulated runtime environment:
1° The environment has a memory with 100 cells available.
2° The environment has only 1 register.
3° The language only accepts one instruction per line, any further instruction will be ignored by the interpreter.

Character map: N = cell position in memory, I = any integer.

That's all, now let's go:
- load N - loads a value from memory into the register
- add N - adds the value of N to the value in the register
- sub N - subtracts the value of N from the value in the register
- div N - divides the value of N by the value in the register
- mul N - multiplies the value of N with the value in the register
- addi I - adds the integer I to the value in the register
- subi I - subtracts the integer I from the value in the register
- divi I - divides the integer I by the value in the register
- muli I - multiplies the integer I with the value in the register
- store N - saves the current value of the register in memory at N

_Use these instructions, add a little logic, and you'll see how things work under the hood :)_

## Tech

Simplang uses these technologies:

- PHP - The entire server and engine were made with this beauty
- Javascript - DOM changes and communication with the engine by ajax
- Bootstrap - Styling of screen components

## Local Installation

If you want to run Simplang in your local environment, just download the project and add it to the PHP server on your machine, after that, just access the index.php file, simple, right?

## Development

Would you like to contribute?

One way is to send us an issue with a suggestion for the environment.

The other is sending us a pull-request with your own code modification:

Clone the repository on your php server
```sh
git clone https://github.com/wandersonsousa/simplang.git
```

Now, just add your modifications, and send a pull-request to the project.

## License

MIT

**Free Software, Hell Yeah!**
