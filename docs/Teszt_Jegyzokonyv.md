# Webes Teszt Jegyzőkönyv

Feketedobozos tesztelést használtunk, és a következő eredmény született:

|Dátum|Tesztelő|Tesztelt egység|Tesztelés|Várt eredmény|Kapott eredmény|
|----------|-----------|-------------------------------|----------------------|---------------------|---------------------|
| 2021.04.25 | Seres Péter | Navigációs bár | Jobb felső sarokban van egy switch box. Elhúzom. | Megváltozik a weboldal témája(világos/sötét). | Megváltozik a weboldal témája(világos/sötét). |
| 2021.04.25 | Kerepesi Gergő | Navigációs bár | Belekattintok a fejlécben található regisztrációs menüpontra. | Átlép a regisztrációs oldalra. | Átlép a regisztrációs oldalra. |
| 2021.04.25 | Seres Péter | Navigációs bár | Belekattintok a fejlécben található login menüpontra. | Átlép a regisztrációs oldalra. | Átlép a regisztrációs oldalra. |
| 2021.04.25 | Kerepesi Gergő | Navigációs bár | Belépett felhasználóként rákattintunk a fejlécen található logout menüpontra. | A rendszer kijelentkeztet minket és a home oldalra irányít át. | A rendszer kijelentkeztet minket és a home oldalra irányít át. |
| 2021.04.26 | Kerepesi Gergő | Beléptető oldal | Nevet és jelszót megadva rákattintunk a login gombra. | Sikeres belépés esetén az üzenetküldő oldalra irányít át. Sikertelen belépés esetén marad az adott oldalon és hibát ír ki. | Sikeres belépés esetén az üzenetküldő oldalra irányít át. Sikertelen belépés esetén marad az adott oldalon és hibát ír ki. |
| 2021.04.26 | Seres Péter | Regisztrációs oldal | Nevet, email címet és jelszót megadva rákattintunk a regisztráció gombra. | Sikeres regisztráció esetén átirányít a beléptető oldalra. Sikertelen regisztráció esetén marad az adott oldalon és hibát ír ki. | Sikeres regisztráció esetén átirányít a beléptető oldalra. Sikertelen regisztráció esetén marad az adott oldalon és hibát ír ki. |
| 2021.04.27 | Seres Péter | Üzenetküldő oldal | Belépést követően a rendszer átirányít az üzenetekhez. | #1 Az adatbázisból kiírja a felhasználók üzeneteit. | Az adatbázisból kiírja a felhasználók üzeneteit. |
 | 2021.04.27 | Kerepesi Gergő | Üzenetküldő oldal | Belépést követően a rendszer átirányít az üzenetekhez. | #2 Az üzenetek görgethetőek. | Az üzenetek görgethetőek. |
 | 2021.04.27 | Kerepesi Gergő | Üzenetküldő oldal | Belépést követően a rendszer átirányít az üzenetekhez. | #4 Egy szöveget beírva rákattintunk a send message gombra és elküldi az üzenetet. | Egy szöveget beírva rákattintunk a send message gombra és elküldi az üzenetet. |
