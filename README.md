# REST API Symfony

## Wymagania
- Docker zainstalowany na komputerze

## Uruchomienie
W terminalu, w głównym katalogu projektu, uruchomić kontener:
- docker-compose up

Po uruchomieniu:
- Aplikacja dostępna jest pod adresem: http://localhost:8000

Aby wyłączyć kontenery w katalogu głównym aplikacji wydaj polecenie:
- docker-compose down

## Technologie
- Symfony
- Docker

## Informacje dodatkowe
Do kontenera kopiowany jest composer - [Dockerfile](/docker/backend/Dockerfile)
W konterze wykonano polecenie:
- composer create-project symfony/skeleton .
- composer require symfony/maker-bundle --dev
Utworzone pliki są w katalogu /symfony
katalog /symfony jest mapowany jako wolumin [docker-compose.yml](/docker-compose.yml)

## Testowanie
Na ten moment aplikacja nie zawiera zautomatyzowanych testów. Testy manualne są wykonywane przez użytkownika w środowisku lokalnym.

## Licencja
Projekt stworzony do celów edukacyjnych. Brak formalnej licencji.

## Autorzy
Wiktor Sztefko – projekt, kod, dokumentacja