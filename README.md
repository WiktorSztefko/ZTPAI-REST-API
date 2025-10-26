# REST API Symfony
Projekt to proste API oparte na Symfony. Po uruchomieniu serwera lokalnego (domyślnie pod http://localhost:8000) wyświetla się strona startowa Symfony. API udostępnia endpoint /api/cocktails, który zwraca listę koktajli w formacie JSON

## API Endpoints
### GET /api/cocktails
Zwraca listę wszystkich koktajli w formacie JSON.

**Response:**
- Status: 200 OK
- Content-Type: application/json; charset=utf-8
- Body: JSON z listą koktajli

### GET /api/cocktails/{id}
Zwraca informację o koktajlu w formacie JSON.

**Response:**
- Status: 200 OK
- Content-Type: application/json; charset=utf-8
- Body: JSON z informacjami o koktajlu

### Walidacja ID:
W przypadku endpointów przyjmujących id (np. /api/cocktails/{id}), jeśli ID nie jest liczbą, zwracany jest status 400.

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
Utworzone pliki znajdują w katalogu /symfony
katalog /symfony jest mapowany jako wolumin w [docker-compose.yaml](/docker-compose.yaml)

## Testowanie
Na ten moment aplikacja nie zawiera zautomatyzowanych testów. Testy manualne są wykonywane przez użytkownika w środowisku lokalnym.

## Licencja
Projekt stworzony do celów edukacyjnych. Brak formalnej licencji.

## Autorzy
Wiktor Sztefko – projekt, kod, dokumentacja