![](https://dewey.tailorbrands.com/production/brand_version_mockup_image/278/5280378278_b5fda336-6ab8-4a2e-9f9c-83388e0e0d05.png?cb=1621176696?style=centerme)

![](https://img.shields.io/github/languages/code-size/wandersonsousa/simplang?style=centerme) ![](https://img.shields.io/github/issues-raw/wandersonsousa/simplang?style=centerme)

<br><br>

![](https://i.ibb.co/FVYMBfh/ezgif-com-gif-maker.gif")

Simplang é um ambiente online para execução de pseudo-código que simula uma linguagem de máquina.

- Digite o código no editor
- Veja as alterações na memória e no registrador ao lado
- ✨Magic ✨


## Documentação das intruções da linguagem

Antes de iniciar precisamos definir algumas considerações a respeito do ambiente de execução simulado da simplang:
1° O ambiente possui uma memória com 100 células disponíveis.
2° O ambiente tem apenas 1 registrador.
3° A linguagem aceita apenas uma instrução por linha, qualquer instrução a mais será ignorada pelo interpretador.

Mapa de caractéres: N = posição de célula na memória, I = um número inteiro qualquer.

É só isso, agora vamos lá:
- load N - carrega um valor da memória no registrador
- add N - adiciona o valor de N ao valor no registrador
- sub N - subtrai o valor de N ao valor no registrador
- div N - divide o valor de N pelo valor no registrador
- mul N - multiplica o valor de N com o valor no registrador
- addi I - adiciona o inteiro I ao valor no registrador
- subi I - subtrai o inteiro I ao valor no registrador
- divi I - divide o inteiro I pelo valor no registrador
- muli I - multiplica o inteiro I com o valor no registrador
- store N - salva o valor atual do registrador na memporia em N

_Utilize essas instruções, adicione um pouco de lógica, e você verá como as coisas funcionam por debaixo dos panos :)_

## Tech

Simplang utiliza estas tecnologias:

- PHP - Toda o servidor e engine foram feitas com essa belezinha
- Javascript - Alterações no DOM e comunicação com a engine por ajax
- Bootstrap - Estilização dos componentes da tela

## Instalação Local

Se você quiser rodar a Simplang em  seu ambiente local, basta fazer download do projeto e adicionar ao servidor PHP na sua máquina, após isso basta acessar o arquivo index.php, simples, não ?

## Development

Gostaria de contribuir ?

Uma das formas é nos enviando uma issue com alguma sugestão para o ambiente.

A outra é nos enviando um pull-request com sua própria modificação do código:

Clone o repositório em seu servidor php
```sh
git clone https://github.com/wandersonsousa/simplang.git
```

Agora, basta adicionar suas modificações, e enviar um pull-request ao projeto.

## License

MIT

**Free Software, Hell Yeah!**

