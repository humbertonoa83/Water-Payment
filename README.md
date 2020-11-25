# Water Payment

// descrição


### For developers

### 0. Clone do repo: 

```
git clone https://github.com/humbertonoa83/Water-Payment.git [folder_name]
```

### 1. Instalar as dependências:

No terminal:

```
composer install
```

```
npm install
```

### .env 

Crie um ficheiro `.env` e cole o código que está no ficheiro `.env-example`

### App key

```
php artisan key:generate
```

### Migrar as tabelas:

Execute o comando a seguir depois de colocar as configuraçÕes da base de dados no `.env`

```
php artisan migrate
```

### Good job (Comandos para o desenvolvimento)

```
php artisan serve
```
```
npm run watch
```

> Não se esqueça de seguir os padrões internos de desenvolvimento:

