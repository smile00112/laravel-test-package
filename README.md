# TEST package
### Пакет Laravel для тестов 

### *Установка*
```
composer require smile00112/test-package
```

# Разработка
## Добавить в composer.json проекта в "autoload"-"psr-4"
"Smile00112\\TestPackage\\" : "packages/smile00112/test-package/src",
## Обновление composer.json
composer dump-autoload
### Публикация
php artisan vendor:publish и выбрать провайдера (Smile00112\TestPackage\Providers\TestPackage)
или
php artisan vendor:publish --provider='Smile00112\TestPackage\Providers\TestPackageServiceProvider'
### autoload
В composer.json пакета добавить секцию extra из доков с подключением сервис провайдера пакета
В composer.json пакета добавить секцию autoload из провекта с подключением папки src
В composer.json проекта убрать из autoload подключение сервис провайдера пакета (перед публикацией)
### git
Заливаем на гит, создаём релиз
### packagist
в submit добавить ссылку с гита на пакет и получаем команду на установку 
composer require smile00112/test-package
для автообновления пакета, надо добавить github Hook. Для этого в настройках пакета добавить новый хук с данными 
из packagist

### *Инструкция*
https://www.youtube.com/watch?v=-QCOvRVUoYM

### *Использование*



