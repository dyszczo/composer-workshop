### Prefixowanie pakietów

1. Dodaj pakiet humbug/php-scoper w wersji 0.12.* za pomocą polecenia:
```
composer require humbug/php-scoper ^0.12.3 --dev
```

2. Zajrzyj do pliku scoper.inc.php i ustal czy wszystkie ustawienia są zgodne z Twoimi oczekiwaniami.
Zwróć szczególną uwagę na sekcję prefix i finders.``

3. Uruchom prefixowanie za pomoca polecenia:
```
vendor/bin/php-scoper add-prefix --output-dir=./prefixed
```

W wyniku działania prefixera powinien powstać katalog ./prefixed. Znajdującym się w nim pakietom zostały
dodane prefixy w przestrzeni nazwy (namespace).

4. Dodaj katalog prefixed do autloadera typu classmap composer.json i zmodyfikuj odpowiednio plik wtyczki,
aby poprawnie odwołać się do prefixowanego pakietu wp-notice.
