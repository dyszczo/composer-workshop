# Instalacja wtyczek i pełna implementacja WordPress za pomocą composera

### Dodaj WordPress Packagist - czyli obsługę WordPressowego repozytorium wtyczek

1. Otwórz plik composer.json w edytorze (uwaga, są dwa takie pliki. Otwórz ten który znajduje sie wyżej w strukturze katalogów).
Następnie dopisz do niego następujący kod JSON
```
"repositories": [
    {
        "type": "composer",
        "url" : "https://wpackagist.org"
    }
]
```
2. Pamiętaj, że kod musi być zgodny z formatem JSON, a to znaczy, że jeśli nie znajduje się na końcu, to sekcja powinna
zostać rozdzielona przecinkiem.

3. Wykonaj polecenie
```
composer validate
```
żeby upewnić sie, że zmiana została wprowadzona poprawnie.

### Zainstaluj wtyczkę YOAST SEO

1. Wykonaj polecenie

```
composer require wpackagist-plugin/wordpress-seo
```

2. Sprawdź zawartość pliku composer.json. Czy sekcja require uległa zmianie?

3. Wydaj polecenie
```
composer info
```
żeby zobaczyć co zostało zapisane w pliku composer.lock w przystępnej postaci.


### Ustaw katalog pluginów na katalog wp-content/plugins

Zgodnie z https://wordpress.org/support/article/editing-wp-config-php/#moving-wp-content-folder należy w pliku wordpress/wp-config.php
dodać wpis
```
define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/../wp-content' );
define( 'WP_CONTENT_URL', 'http://example/wp-content' );
```

### Dodaj pakiety instalowane przez Composer do WordPress

W tym celu, należy w pliku wordpress/wp-config.php dodać na początku wpis: 
```
require __DIR__ . '/../vendor/autoload.php';
```