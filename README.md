# Lailson-Biz

O `Lailson Biz` foi criado para adicionar novas funcionalidades a qualquer coisa relacionada a cadastro de modulos no admin e emails dos  clientes no Magento.


## Instalação via .zip

Para instalar via arquivos devemos realizar o download do modulo, baixando diretamente do [repo](https://github.com:45lailson/module-newsletter.git). Iremos realizar o wget para fazer o download.

Utilizando o 'wget' como exemplo abaixo:
```bash
$ wget https://github.com/45lailson/module-newsletter/archive/master.zip
```
Descompacte os arquivos na **raiz** do seu Magento dentro da pasta **app/code** do seu projeto Magento.


# Instalação via Composer

Para instalar via composer devemos editar o composer.json do seu projeto Magento.

Edite o arquivo `composer.json` na raiz do Magento e busque pelo bloco `repositories`

Originalmente ela é assim:

```json
    ...
    "repositories": [
        {
            "type": "composer",
            "url": "https://repo.magento.com/"
        }
    ],
    ...
```
    

Adicione a linha abaixo:
```json
{
	"type": "vcs",
	"url": "https://github.com/45lailson/module-newsletter.git"
}
```

Resultado final para o bloco `repositories` vai ficar assim:

```json
    ...
    "repositories": [
        {
            "type": "composer",
            "url": "https://repo.magento.com/"
        },
        {
			"type": "vcs",
			"url": "https://github.com/45lailson/module-newsletter.git"
		}
    ],
    ...
```
Procure o bloco `require`, informa ao composer para instalar seu pacote. Exemplo:

```json
    ...
    
    "require": {
        "45lailson/module-new" : "dev-master ",
        "magento/product-community-edition": "2.3.5-p1"
    },

    ...
```

Para concluir a instalação execute o comando abaixo que o seu pacote seja instalado no Magento.
```bash
$ composer update
```


# Habilitando Instalação

Para Finalizar a Instalação execute abaixo dentro da pasta raiz do seu Magento.

`php bin/magento setup:upgrade`

`php bin/magento setup:static-content:deploy -f`


## Funcionalidades

* [x] Salvar os dados pelo admin do modulo, atualizando no Front-end.
* [x] Cadastrar email dos clientes no Newsletter.

## Configurações

As configuações do módulo ficam localizadas dentro do menu `Lojas > Configurações > Lailson > Biz Modal`.
 

![Configuraçao_Modulo_Admin](docs/Configuraçao_Modulo_Admin.png)


## Explicando Cada Campo do Modulo.

- `Module Enable` -  Verifica se o Modulo Esta Habilitado.
- `Title` -  Titulo que Sera renderizado no Front-ent.
- `Description` -  Descrição que Sera renderizado no Front-ent.

- Todos os Campos podem ser atualizados que sera salvo no banco de acordo com a necessidade.



## Explicando a Parte FrontEnd.

![Configuraçao_Modulo_Admin](docs/Front.png)

- `Title` -  o Titulo que e renderizado no Front-ent foi cadastrado no admin do modulo e salvo no banco.
- `Description` -  a Descrição ue e renderizado no Front-ent foi cadastrado no admin do modulo e salvo no banco.
-  `Email` -  Email que sera salvo no banco.

## Explicando onde e salvo os emails no admin.

![Configuraçao_Modulo_Admin](docs/marketing.png)

- Para Observar onde sera salvo os emails cadastrado pelo front localizadas dentro do menu `Marketing > Newsletter Subscribes `.

- E Mostrado todos os Emails cadastrado no front da loja, assim sendo possivel observar que esta funcionando corretamente.

- O proposito Do Modulo Foi desenvolver atualizações de dados tanto do lado do admin da loja, quando pelo front, assim sendo salvo de ambos os lados.  
