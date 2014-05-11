#Graph Database

Dafiti Talk: 07/05/2014

## Informações

Antes de sair procurando feito um louco com instalar e usar, siga os passos abaixo:

- Instale o VirtualBox
- Instale o Vagrant
- Instale o Ansible

### Já instalei tudo e agora?
Agora é só rodar o comando:

```
vagrant up
```

### Agora como eu acesso o painel do Neo4j?
Veja o IP que está no Vagrantfile.

Ex.: 192.168.10.10:7474

### Quero o rodar o script de setup e aí?
- Acesse o servidor:
```
vagrant ssh
```

- Vá até a pasta /var/www/graphdb
- Rode:
```
composer install
```
- Depois rode o script setup.php que está na pasta bin/ do projeto
