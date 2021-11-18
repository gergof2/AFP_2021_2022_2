# Követelmény specifikáció

## A jelenlegi helyzet

Mivel a magyar állam törvényeiben egyre jobban teret nyer az informatika szabályozása,
ezért a nagy vállalatok vagy alkalmazkodnak ehhez a lépéshez, vagy kivonulnak a piacról.
A nagyobb vállalatok álltalában nem akarnak alkalmazkodni a reklámfelületek adózási
szabályaihoz, így inkább elhagyják a piacot. Ennek hatására hazánkban nincs aki
biztosítsa az emberek számára az online térben való üzenetküldési lehetőséget.
Ezért készül a mi szoftverünk, hogy ezen igényeknek eleget tegyen.

## A kívánt rendszer

Az általunk készülő dobozos szoftver célja a felhasználók által használt szoftver helyére egy 
új és friss alkalmazás kerüljön, ami lehetővé teszi, hogy egy új környezetben tudjanak
kommunikálni a felhasználók egymással. A rendszer php nyelven kerül megírása, ami kommunikál az 
sql adatbázissal és weblapként funkciónál. Css-el ellátva, ami a kinézetért felelős, illetve egy 
C# nyelven megírt, letölthető változat is kikerül. Az alkalmazáson belül
a felhasználó láthatja, hogy ki van fent, ki elfoglalt, tétlen, vagy nincs éppen fent.
Üzeneteket és képeket tud küldeni, a képeket letölteni. Tud reagálni az előzőekre, és emojikat
használni.

## Elvárt működés

Amikor a felhasználó az oldalt/a programot megnyitja, egy belépési menü fogadja, ahol vagy
bejelentkezik, vagy ha nincs még regisztrációja, akkor először a rendszer megkéri a
felhasználót, hogy regisztráljon. Ezt követően a felhasználó felcsatlakozik egy online chat
felületre, ahol a többi felhasználóval tud kommunikálni. A chat felületen lehetőség van 
beállítani a saját státuszunkat, amit 4 féle státuszból választhatunk ki: elérhető, tétlen, 
elfoglalt vagy ki van jelentkezve(offline). A chaten szöveges üzeneteket lehet küldeni, illetve 
képeket is, amiket le lehet tölteni. Az üzenetek alatt megtalálható egy kis menürész, ahol 
lehetőség van reagálni az adott üzenetre, vagy ha saját üzenetünk alatt vagyunk, van 
lehetőségünk módosítani az üzenet tartalmát.

### Rendszer futtatása saját gépen:

A letöltött mappában található afp2021_Database
(AFP2021\web\application\database) fájlt egy xampp/wamp 
program segítségével, a program htdocs mappájában kell elhelyezni, majd ezt követően az adott 
alkalmazásban elindítani az Apache és a MySQL részt. Ha ezzel megvagyunk, akkor már csak az 
adatbázist kell beimportálnunk a phpmyadminba, majd elindítani az alkalmazást/megnyitni
böngészőn keresztül a localhost-ot.

## Szükséges funkciók listája

| Modul | ID | Név | Leírás |
| :-----: | :--: | :-----: | :--------: |
| Backend | F1 | Adatbázis | Az adatbázis tárolja az alkalmazás által használt adatokat |
| Backend | F2 | Funkciók | A felhasználó által használt parancsok végrehajtása |
| Frontend | F3 | Felhasználó beléptető oldal | A felhasználó beléptetésére használt oldal. |
| Frontend | F4 | Regisztrációs oldal | A felhasználó regisztrációjára használt oldal. |
| Frontend | F5 | Chat oldal | Beléptetés után megjelenő felület. |
|Frontend | F6 | Státuszállítás | A felhasználók saját állapotukat tudja állítani |

## További lehetséges funkciók listája

| Modul | ID | Név | Leírás |
| :-----: | :--: | :-----: | :---------: |
| Backend | F6 | Voice chat | Hang alapú kommunikáció |
| Frontemd | F7 | Voice chat | Hang alapú kommunikációhoz használható szoba |
| Frontend | F8 | Emojik | Emojik használata |
| Frontend | F9 | Rang rendszer | Különböző felhasználói rang |
| Frontend | F10 | Név/Rang megjelölés | Chat üzenetben a felhasználók megjelölhetnek egy másik felhasználót vagy rangot |
