### Używamy pakietów dev

W tym ćwiczeniu użyjemy pakietu który nie jest potrzebny do działania wtyczki, 
ale jest rekomendowany do pracy nad nią.

1. Dodaj pakiet wp-coding-standards/wpcs za pomocą polecenia:
```
composer require --dev wp-coding-standards/wpcs
```

2. Zajrzyj do pliku phpcs.xml.dist i ustal czy wszystkie ustawienia są zgodne z Twoimi oczekiwaniami.

3. Uruchom pakiet sniffera za pomoca polecenia:
```
vendor/bin/phpcs .
```