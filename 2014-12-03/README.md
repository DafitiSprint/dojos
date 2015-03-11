Shell
=====
# Tipos:
 * Bourne shell (sh)
 * C shell (csh)
 * TC shell (tcsh)
 * Korn shell (ksh)
 * Bourne Again SHell (bash)

Vamos falar de Bash
# Variáveis
```bash
string_variable="Hello"
array_variable=("Hello" "world")
```

# Imprimir / ler
```bash
echo "${variable}"
echo $variable
echo '$variable'

read $read_variable
echo $read_variable
```

# stdin, stdout, stderr
```bash
#stdin
command < file_name
#stdout
command > file_name
#stderr
command 2> error_file.log

#This one will append to file
command >> file_name
```
# Operadores
* Aritméticos (+, -, *, /, %, =)
* Comparadores numéricos (==, !=, >, >=, <=, <, -eq, -ne, -gt, -lt, -ge, -le)
* Boolean (!, ||, &&, -o, -a)
* String (=, !=, -z, -n)
* File
  * -b *file* : Se *file* é um arquivo bloqueadores como /dev/null.
  * -c *file* : Se *file* é um arquivo especial de dispositivo.
  * -d *file* : Se *file é um diretório.
  * -f *file* : Se *file* é um arquivo comum (não diretório nem um dispositivo)
  * -g *file* : Se *file* tem o mesmo set group ID (SGID) que o seu diretório
  * -k *file* : Se *file* tem a flag de stiky bit
  * -p *file*: Se *file* é um pipe

```bash
function show_input_type()
{
   [ -p /dev/fd/0 ] && echo PIPE || echo STDIN
}

show_input_type "Input"                           # STDIN
echo "Input" | show_input_type                    # PIPE
```
  * -t *file* : Se *file* está associado a um dispositivo terminal (stdin, stdout)
  * -u *file* : Se *file* tem um flag de set user id (SUID).
  * -r *file* : Se *file* pode ser lido
  * -w *file* : Se *file* pode ser escrito
  * -x *file* : Se *file* pode ser executado
  * -s *file* : Se *file* tem um tamanho maior que zero
  * -e *file* : Se *file* existe

# if / else
```
if [ condition ]
then
    command 1
    command 2
else
    command 1
    command 2
fi
```

# Case
```bash
case "$VARIABLE" in
    #List patterns for the conditions you want to meet
    0) echo "There is a zero.";;
    1) echo "There is a one.";;
    *) echo "It is not null.";;
esac
```

# for
```bash
for VARIABLE in {1..3}
do
    echo "$VARIABLE"
done

# Or write it the "traditional for loop" way:
for ((a=1; a <= 3; a++))
do
    echo $a
done

# They can also be used to act on files..
# This will run the command 'cat' on file1 and file2
for VARIABLE in file1 file2
do
    cat "$VARIABLE"
done

# ..or the output from a command
# This will cat the output from ls.
for OUTPUT in $(ls)
do
    cat "$OUTPUT"
done
```
# while
```bash
while [ true ]
do
    echo "loop body here..."
    break
done
```
# Funções
```
# You can also define functions
# Definition:
function foo ()
{
    echo "Arguments work just like script arguments: $@"
    echo "And: $1 $2..."
    echo "This is a function"
    return 0
}

# or simply
bar ()
{
    echo "Another way to declare functions!"
    return 0
}

# Calling your function
foo "My name is" $NAME
```
# Argumentos de execução
```bash
$# # Number of arguments passed
$n # Where n is an integrer
$@ # All arguments in array
$* # All arguments in string
$? # Last execution response code
$$ # Process number of current execution
$! # The process number of the last background command
```

# Leitura de arquivos
* tail
* head
* grep
* sed

# Includes
source *path*
. *path*

#Testes - Bash
[https://github.com/sstephenson/bats]
