# Процессор строк

Краткое описание пакета

## Требования

- PHP 8.2

## Установка

composer require igor-kachko/otus-composer-package

## Использование

```php
<?php  
  
$processor = new StringProcessor();  
echo $processor->getLength('my string')' // 9
```