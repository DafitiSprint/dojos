# Não Vai Ter Vim

## Velho

- VI é de 1976!
- Dã, nem mouse tinha!
- O Vim é de 1991, mais de 20 anos, veeeelho!
- Nem menu essa coisa tem!
- Tela preta, terminal
- Nada amigável

## Importante

- Editor de Textos
- Filosofia Unix

## Movimentação

- É o básico para qualquer editor
- Teclado ADM3A
- Teclas diferentes, que droga
- Modo normal?
- Teclas para movimentação
- h, j, k, l
- w, W, b, B, e, E, t, T
- {numero}[movimento]
- 0, $
- C-e, C-y
- gg, G, {numero}G
- gd
- %
- m{nome}, '{nome}, :marks

## Recortando, copiando e colando

- d, dd, D
- y, yy
- x, X
- p
- i, a
- "{nome}[d,y]

## Busca

- :/
- #, *
- n, N

## Edição

- i, I, a, A, s, S, o, O
- r, R
- C-e, C-Y
- d, D
- =
- >, <

## Desfazer, Refazer

- u
- C-r

## Auto complete

- ctrl-p
- ctrl-n
- ctrl-x ctrl-o

## Seleção

- v
- C-v
- S-v
- {seleção}s

## Replace

- :% s/A/a/g
- {seleção}: s/A/a/g

## Folding

- zf{numero}[movimento]
- v{movimento}zf
- zf'{nome}
- zo
- zc

## Navegação no sistema de arquivos

- :Explore

## Buffers

- :ls
- :buffer {numero}
- :b{numero}
- :b {nome}<tab>

## Janelas

- :split
- :vsplit
- C-w s
- C-w v
- C-w n
- C-w {movimento}
- C-w T

## Abas

- :tabnew
- gt, gT

## Macros

- q{nome}[movimentos]q
- @{nome}

## Salvando e saindo

- :w {nome}
- :q
- :q!
- :wa, :qa, :qa!

## Truques

- ~
- Inserção: C-a, C-x (Números)
- :set relativenumber
- :set colorcolumn=80

## .vimrc

- Tem que montar o seu...

## Tutor

- vimtutor

## Plugins

- VDebug
- BufExplorer
- Airline
- CtrlP
