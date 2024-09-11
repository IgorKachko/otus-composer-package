# Процессор строк

* getLength(string $str) - Узнать длину строки

## Установка

composer require igor-kachko/otus-composer-package

## Использование

```php
<?php  
  
$processor = new StringProcessor();  
echo $processor->getLength('my string')' // 9
```