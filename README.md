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

O Wordpress já está instalado e pode ser acessado pelo endereço: `http://192.168.78.50/` (configurado no arquivo Vagrantfile). Ao acessar serão pedidas as informações do site e o usuário/senha de administrador. Após completar a instalação é necessário ativar os Plugins e o Tema do TIM Tec.

Os plugins necessários para que o tema funcione corretamente podem ser vistos na sessão Plugins e já estão instalados neste repositório, basta ativá-los no painel adminsitrador na página de Plugins e ativar o tema "Sage Starter Theme" na página de Temas.

## Plugins

Os plugins listados são necessários para o funcoinamento correto do site:

* Contact Form to Email (https://wordpress.org/plugins/contact-form-to-email/)
* DW Question Answer (https://wordpress.org/plugins/dw-question-answer/)
* Facebook Feed (https://wordpress.org/plugins/facebook-feed/)
* Google Analytics by Yoast (https://wordpress.org/plugins/google-analytics-for-wordpress/)
* Jetpack por WordPress.com (https://wordpress.org/plugins/jetpack/)
* Mailgun (https://wordpress.org/plugins/mailgun/)
* Polylang (https://wordpress.org/plugins/polylang/)
* WordPress Importer (https://wordpress.org/plugins/wordpress-importer/)
* WP Edit in Place (https://wordpress.org/plugins/wp-edit-in-place/)

## Shortcodes

Aqui estão listados shortcodes que acompanham o tema do TIM Tec.

### Listar Conselheiros

Para listar em um post todos os conselheiros cadastrados, o shortcode que deve ser incluído na edição das páginas é `[lista_conselheiros]`.