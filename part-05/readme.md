# Tworzymy wtyczkę zintegrowaną z Composerem

### Szkielet wtyczki

1. Umieść szkielet wtyczki w katalogu wp-contents/plugins dla WordPressa który jest dostępny przez HTTP.
2. Upewnij się, że wtyczka jest widoczna na liście wtyczek w panelu administracyjnym WordPress.

### Inicjalizacja composera

Wykonaj polecenie:
```
composer init
```

w katalogu z wtyczką. Wszystkie pytania możesz potwierdzić enterem :)

### Dodawanie Autoloadera

1. Dopisz sekcję autoload w pliku composer.json.
Sekcja powinna wyglądać następująco:
```
"autoload": {
    "classmap": ["src"]
}
```

Upewnij się czy plik comoposer.json jest nadal poprawny za pomocą polecenia
```
composer validate
```

2. Uruchom autoloader we wtyczce dopisując w pliku wtyczka.php kod:
```
require __DIR__ . '/vendor/autoload.php';

```

3. Odśwież mapę klas.

Wykonaj polecenie:
```
composer dump
```

żeby autoloader przeskanował katalog src i dodał znajdujące się tam klasy, do mapy.

4. Teraz możesz bezpiecznie odwołać się do klasy Plugin. Uruchom funkcjonalnośc dopisując w pliku wtyczka.php kod:
```
Plugin::run();
```
