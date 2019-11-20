# Instalacja composera

Jest bardzo wiele sposób na które można zainstalować composera. 
Najłatwiej po prostu pobrać plik https://getcomposer.org/download/1.9.1/composer.phar do katalogu lokalnego.

Composera możesz wtedy uruchomić używając polecenia:
`php ./composer.phar`

Spróbuj to zrobić teraz.

## Globalna instalacja

Globalna instalacja spowoduje, że composer będzie dostępny z poziomu każdego katalogu poprzez polecenie `composer`.
Możesz wejść na stronę https://getcomposer.org/doc/00-intro.md i wybrać sposób odpowiedni dla siebie.

## Użycie instalatora

W tym celu wklej do terminala następujące polecenia:

```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'a5c698ffe4b8e849a443b120cd5ba38043260d5c4023dbf93e1558871f1f07f58274fc6f4c93bcfd858c6bd0775cd8d1') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

To spowoduje pobranie pliku composer.phar do katalogu lokalnego. 

## Całkowicie ręcznie

Pobierz plik https://getcomposer.org/download/1.9.1/composer.phar do katalogu lokalnego.