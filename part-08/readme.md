# Tworzymy własny pakiet

### Nowy pakiet

1. Utwórz nowy katalog na pakiet. Powinien się on znajdować poza katalogiem wtyczki.

2. Wykonaj w nim polecenie:
```
composer init
```

Zwróć uwagę na:
* Nazwę pakietu. Pierwsza część powinna być zgodna z Twoim kontem na github/gitlab - to będzie przestrzeń nazw, 
a druga to nazwa konkretnego pakietu np. stefan_markowski/podstawka_wtyczki.

* Package Type. Powinno być to library.

Pamiętaj, że nawet jeśli wpiszesz coś nieprawidłowego, będzie można to później zmienić w pliku composer.json.

3. Umieść katalog src z wtyczki, w katalogu pakietu. Będzie to nasz kod który możemy współdzielić.

4. Autoloader. Trzeba umieścić w pliku composer.json informację, gdzie autloader powinien szukać klas.

Sekcja powinna wyglądać następująco:
```
"autoload": {
    "classmap": ["src"]
}
```

Nie musisz robić composer dump, ponieważ nie będziemy bezpośrednio używali tego pakietu.

### Użycie pakietu

Pakiet na razie znajduje się w katalogu i wtyczka nie wie gdzie można go znaleźć.

1. Usuń z wtyczki katalog src, nie będziemy go potrzebowali.

2. Dodaj repozytorium z pakietem. Pakiet jest w katalogu więc będzie to repozytorium specjalnego typu "path".
    Możesz to zrobić za pomocą wpisu w composer.json:
    ```
    "repositories": [
        {
            "type": "path",
            "url": "../pakiet"
        }
    ],
    ```

przy założeniu, że pakiet znajduje się w katalogu "pakiet" :)

3. Dodaj pakiet do wymaganych za pomocą require. Wymaganą wersję określ jako dev-master.

5. Jeśli wszystko poszło dobrze, to wtyczka poprawnie załaduje klasę pluginu, z pakietu.

### Zdalny pakiet

1. Dodaj pakiet do zdalnego repozytorium Git. Jeśli nie wiesz jak, to zrób sobie kawę :)

2. Dodaj repozytorium z pakietem. Pakiet jest w katalogu więc będzie to repozytorium specjalnego typu "path".
   Możesz to zrobić za pomocą wpisu w composer.json:
    ```
    "repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/twoj_nick/nazwa_pakietu"
    }
    ],
   ```

### Zdalny pakiet w domyślnym repozytorium

1. Utwórz konto w https://packagist.org/ 

2. Dodaj pakiet za pomocą url z vcs.

Jeśli pakiet jest publiczny, a plik composer.json jest poprawny to packagist przeskanuje pakiet i doda go do darmowego repozytorium.

3. Teraz możesz odwoływać się do pakietu poprzez require, nie dodając żadnych dodatkowych repozytoriów.