<?php
!is_array($request)  - ova funckija ispituje da li varijabla $request nije niz.

count($request) == 0 - broji sve elemente niza ili objekta. U ovom slucaju ako je $request niz broj njegovih
clanova bi mora biti 0.

empty($request[1]) - ispituje da li je elemenat [1] iz niza varijable $request prazan, prazan niz ili 0 ili ne postoji

in_array($method, ['POST', 'PUT']) - funkcija ispituje da li vrijednosti POST i PUT postoje u nizu $method 

error_log() - salje error poruku na serverov error log ili u neki drugi fajl

!file_exists($dbFile) - u ovom slucaju provjerava da li $dbFile ne postoji kao fajl ili direktorijum

json_decode() - ova funkcija uzima prethodno kodiran json string i konvertuje ga u php varijable

file_get_contents() - prikazuje citav fajl kao string 

file_put_contents() - zapisuje podatke u fajl, ako fajl vec postoji zapisuje se ovi novi podaci, a ako ne postoji
onda ce se fajl napraviti i podaci ce biti upisani

json_encode() - konvertuje objekte,vrijednosti iz PHP-a u JSON 

http_response_code() - funkcija za dobijanje ili postavljanje http response koda

$_SERVER - globalna varijabla sa informacijama o serveru i korisniku, ove informacije salje web server

$_GET - moze sluziti da se prikupe podaci poslati preko html forme metodom GET, moze prikupiti podatke iz url-a.
        Ne treba koristiti u slucaju da se salje password ili neke osjetljive info.

$_POST - prikuplja podatke iz html forme metodom POST. Preko ove metode info su enkodirane i stavljene
         u body od requesta u http header i salju se na server


