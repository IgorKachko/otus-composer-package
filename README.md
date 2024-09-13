# Процессор строк

* getLength(string $str) - Узнать длину строки
* checkParenthesis(string $str) - Проверка корректности открытых и закрытых скобок в строке

## Установка

composer require igor-kachko/otus-composer-package

## Использование

```php
<?php  
  
$processor = new StringProcessor();  
echo $processor->getLength('my string'); // 9

try {
    $processor->checkParenthesis("(1+2))(text())))()()()");
    echo "Все хорошо";
} catch(\Exception $e) (
    echo $e->getMessage();
)

```