# Portal TIMTec
O Portal TIMTec é desenvolvido utilizando Wordpress.

## Desenvolvimento
Os pré-requisitos do sistema para a instalação são:
* Vagrant (https://www.vagrantup.com/downloads.html)
* Nodejs e npm (https://docs.npmjs.com/getting-started/installing-node)

Clone este repositório, utilizando o comando a seguir:
```
$ git clone https://github.com/institutotim/portal-timtec.git
```
Com o `vagrant` instalado, entre no diretório clonado e utilize o comando `vagrant up`, para iniciar a Máquina virtual do Vagrant:
```
$ cd portal-timtec
$ vagrant up
```

Após a Máquina Virtual ser inicializada, a pasta `portal-timtec/src` estará compartilhada com a máquina do Vagrant.

O próximo passo, é baixar as bibliotecas utilizadas usando o Node. Você pode utilia o comando `make build`:
```
$ make build
```
Este comando instala as dependências do `NodeJS`, `Bower` e realiza tarefas do `Gulp`.

Sempre que forem alterados arquivos de estilo `SASS`, para a alteração ser valida é necessário executar as tarefas do Gulp novamente. Esta tarefa está dentro do `make build` e também no comando `make style`:

```
$ make style
```

## Plugins

## Features
