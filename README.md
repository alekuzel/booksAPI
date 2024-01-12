## Laravel Lib API

En enkel API för lagringen av böker med deras titlar, författare mm. 

## Installation

* Förändra inställningar i .env-filen. 
* Observera att min DB_PORT är 3310 medan det som standard är 3306. Ändra detta vid behov.

## Tabell books

Det följande lagras i tabellen:
* id
* title
* author
* year
* haveread
* created_at
* updated_at

*haveread* är bokens status som indikerar om boken redän är läst eller inte.

## Routes

GET: /api/lib -> Visa alla böker som finns i databasen 

GET: /api/lib/id -> Visa boken med specifierad ID

POST: /api/lib -> Lägg till ny inlägg i databasen

PUT: /api/lib/id -> Uppdatera inlägg med specifierad ID

DELETE: /api/lib/id -> Radera inlägg med specifierad ID
