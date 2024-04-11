# Isso também fará parte da documentação
## importante

Para que o projeto funcione pela primeira é necessário que tenha instalado em seu computador as ultimas versões estáveis de php, composer, node, npm,
mysql.

Instale também o laravel globalmente se quiser melhor comodidade na linha de comando.

É necessário fazer o migrate dos dados para que possa abrir sem erros o programa no brownser. veja seção comandos.


## Comandos

### *Seeders*

Para instalar o seeder no projeto caso não esteja intalado utilize: 
    php artisan make:seeder UserSeeder

Para fazer a migração dos dados e popular com seeder:
    php artisan migrate:fresh --seed

Se ainda não houver migrações talvez seja necessário utilizar:
    php artisan migrate

### *Fazer o programa 'rodar' no brownser*
    php artisan serve

## Informações

O campo type user tem 3 níveis de usuario que são: user como aluno, admin como administrador e prof como professor.

# 
