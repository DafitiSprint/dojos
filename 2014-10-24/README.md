Expressões regulares
====================

**O que são?**

São expressões para definir padrões de strings de busca que não poderíamos definir com uma busca comum

As expressões regulares são casadas de acordo com a expressão.

Para construir uma, pense em pequenas partes da esquerda para a direita.

# Busca
=======
São literalmente a busca que está buscando. Cada string é lida como um caractere, a não ser que haja um símbolo de padrão.

# Tipos de caracteres
=====================
São grupos de caracteres para fazer casar um determinado grupo

\d => Dígito decimal
\D => Negação de \d
\s => Caractere não imprimível
\S => Negação de \s
\w => Alfa numérico + underscore
\W => Negação de \w
\xHH => Hexadecimal, onde HH, é a o caractere ASCII
\0ooo => Octal, onde ooo é o caractere ASCII

. => Qualquer caracter menos a quebra de linha
| => Expressão "or"
^ => Começo de uma string ou linha
$ => Final de string ou linha

\b => Delimitador de palavra
\B => Desconsidera o caractere antes de ou após o delimitador de palavra
\< => Começo de uma palavra
\> => Final de uma palavra

O \ também é usado para escapar caracteres especiais

# Grupos
========
São usados para separar os elementos encontrados. Usa-se os () para definição de grupos

Às vezes não queremos que determinados padrões não fiquem na nossa busca. Para isso, usamos os grupos não capturados, representados por (?:)

# Referências retrovisoras
==========================
Servem para não precisar repetir a mesma expressão duas vezes. É usado o \n, onde o n é o número do grupo da referência na expressão

# Classes de caracteres
=======================
São conjuntos de caracteres que são válidos na expressão. Eles podem ser intervalados ou não. Dentro dos colchetes, o sinal ^ nega a expressão dentro dela

Ex.:
[aeiou] => Vogais
[a-z] => Caracteres minúsculos
[A-Z] => Caracteres maiúsculos
[a-zA-Z] => Qualquer letra do alfabeto não acentuada
[0-9] => Dígito de 0 a 9

[:upper:] => Caracteres maiúsculos
[:lower:] => Caracteres minúsculos
[:alpha:] => Todas as letras
[:alnum:] => Todas as letras e números
[:digit:] => Números
[:xdigit:] => Hexadecimal
[:punct:] => Pontuações
[:blank:] => Caracteres em branco
[:space:] => Espaço ou tab
[:cntrl:] => Caracteres control
[:print:] => Caracteres imprimíveis e espaço
[:word:] => Letras, dígitos e underscores

# Quantificadores
=================
+ => Um ou mais
* => Zero ou mais
? => Um caractere opcional
{x, y} => Quantidade entre x e y
{x} => Exatamente x ocorrências

