*****DOKUMENTY***** <br>
**Opis projektu**
Celem tego projektu jest stworzenie internetowej strony z grą Blackjack, w której użytkownik będzie mógł grać przeciwko komputerowi. 
Gra zostanie zaimplementowana w języku JavaScript i Symfony oraz udostępniona na stronie internetowej. 
Strona będzie zawierać prosty, intuicyjny interfejs użytkownika oraz instrukcje do gry, które pozwolą użytkownikom szybko zrozumieć zasady Blackjacka.



**Funkcje gry**
1. Interfejs użytkownika: Strona internetowa będzie posiadać przejrzysty i intuicyjny interfejs, umożliwiający łatwą nawigację po grze. 
Użytkownik będzie mógł łatwo kontrolować swoje ruchy podczas rozgrywki.

2. Instrukcje do gry: Przed rozpoczęciem gry, użytkownik będzie miał dostęp do precyzyjnych instrukcji dotyczących zasad gry Blackjack. 
Instrukcje będą zawierać informacje na temat wartości kart, celu gry, zasad dotyczących kart gracza i krupiera oraz zasad dotyczących wygranej i przegranej.

3. Gra z komputerem: Użytkownik będzie mógł rozpocząć grę przeciwko komputerowi. 
Komputer pełni rolę krupiera, który będzie podejmował decyzje zgodnie z zasadami Blackjacka. 
Użytkownik będzie miał możliwość podejmowania decyzji dotyczących swoich kart, takich jak dobieranie kolejnych kart, pasowanie lub podwojenie stawki.

4. System punktacji: Gra będzie posiadała system punktacji, który pozwoli użytkownikowi śledzić swoje postępy. 
Po zakończeniu rozgrywki, użytkownik otrzyma informację o wyniku, czy wygrał, przegrał lub zremisował

5. Rewanż: Po zakończeniu gry, użytkownik będzie miał możliwość zagrać jeszcze raz z tym samym komputerem, wykorzystując opcję rewanżu.

6. Komunikacja z twórcami: Na stronie internetowej będzie dostępna sekcja zawierająca dane kontaktowe do twórców strony. 
Użytkownicy będą mieli możliwość komunikacji z twórcami gry, aby przekazać swoje opinie, zgłosić problemy techniczne lub zaproponować nowe funkcje.



**Wymagania użytkownika:**
1. Intuicyjna nawigacja: Użytkownicy oczekują intuicyjnej nawigacji, która umożliwi łatwe poruszanie się po stronie i dostęp do różnych funkcji gry. 
Przejście między różnymi sekcjami, takimi jak menu główne i instrukcje powinny być proste i intuicyjne.

2. Dokładne instrukcje gry: Wymagane są klarowne, zrozumiałe i szczegółowe instrukcje do gry Blackjack. 
Użytkownicy powinni łatwo zrozumieć zasady gry, wartości kart, sposób obstawiania itp.

3. Przyjemne wrażenia wizualne: Interfejs gry powinien oferować przyjemne wrażenia wizualne, z estetycznymi grafikami, dopasowanymi kolorami i przyjemnym układem. 

4. Płynność rozgrywki: Wymagane jest aby, gra działała płynnie i szybko, bez żadnych opóźnień czy przycięć.



**Wymagania systemowe**
Aby korzystać z gry Blackjack na stronie internetowej, użytkownik powinien spełniać poniższe wymagania:

1. Przeglądarka internetowa: Gra będzie działała w większości popularnych przeglądarek internetowych, takich jak Google Chrome, Mozilla Firefox, Microsoft Edge itp. 
Użytkownik powinien mieć dostęp do stabilnego połączenia internetowego.

2. Wsparcie dla języka JavaScript: Gra będzie wykorzystywać język JavaScript do interakcji z użytkownikiem, dlatego ważne jest, aby przeglądarka użytkownika wspierała ten język.

3. Obsługa grafiki: Użytkownik powinien mieć urządzenie z wystarczającą mocą obliczeniową i obsługą grafiki, aby poprawnie wyświetlać grafikę i animacje w grze.



**Wymagania  funkcjonalne:**
Rejestracja i logowanie: Użytkownicy będą mieli możliwość rejestracji i tworzenia konta, które pozwoli im na śledzenie swojego postępu i zapisywania wyników. 
Będzie również dostępna opcja logowania dla już zarejestrowanych użytkowników.

Możliwość podglądu rozdania: Gracz może mieć możliwość podglądu rozdania po zakończeniu gry, co pozwoli mu zobaczyć, jakie karty zostały rozdane zarówno dla niego, jak i dla komputera.



**Wymagania niefunkcjonalne**
1. Wydajność: Gra powinna działać płynnie i responsywnie, zapewniając użytkownikowi przyjemne doświadczenie rozgrywki. 
Optymalizacja kodu i zasobów graficznych jest istotna dla utrzymania wysokiej wydajności.

2. Dostępność: Strona internetowa powinna być dostępna dla użytkowników przez cały czas, zapewniając stabilne działanie i minimalizując ewentualne przerwy w dostępności.

3. Bezpieczeństwo: Wszelkie dane wprowadzane przez użytkownika, takie jak informacje dotyczące płatności, powinny być odpowiednio zabezpieczone poprzez wykorzystanie odpowiednich protokołów szyfrowania i praktyk bezpieczeństwa.

Wyświetlenie strony

-Użytkownik wpisuje adres strony w pasku URL przeglądarki 

-Użytkownik zostaje przekierowany do strony głównej

-Użytkownik może wpisać dane do logowania albo przejść na stronę odpowiedzialna za rejestrację nowych użytkowników


Rejestracja nowego użytkownika

-Użytkownik przechodzi na stronę odpowiedzialną za rejestrację

-Użytkownik wpisuje dane do formularza rejestracyjnego - e-mail, nazwa, hasło

-System prosi o akceptację warunków użytkowania

-Po akceptacji warunków system tworzy konto w bazie danych

-Użytkownik zostaje przekierowany na stronę logowania

-Użytkownik loguje się na konto przy pomocy adresu e-mail oraz hasła podanego w formularzu rejestracyjnym

-System weryfikuje czy podane dane zgadzają się z danymi zawartymi w bazie danych użytkowników

-Jeśli dane zgadzają się użytkownik zostaję przekierowany na stronę z grą

-Jeśli dane nie zgadzają się system informuje użytkownika o błędzie oraz prosi o ponowne wpisanie e-mailu oraz hasła

                        ***PRZYPADKI UŻYCIA***

Gra

-Użytkownik loguje się na stronie

-Użytkownik zostaje przekierowany na stronę z grą

-Użytkownik rozpoczyna grę wybierając przycisk "Rozpocznij grę"

-System prosi użytkownika o reakcję - dobrać kartę, zostać przy nich, lub podwoić stawkę. Użytkownik wybiera jeden z 3 przycisków

-System po wyborze dobrania karty dokłada kartę użytkownikowi i wyświetla ponownie te same przyciski

-System po wyborze pozostania przy danym rozdaniu dobiera samemu kartę i w zależności od tego, czy ma sumę kart większą od gracza, lub 21, kończy grę zwycięstwem lub porażką użytkownika, albo remisem

   1. Przy wygranej system podwaja postawioną przez użytkownika stawkę i zwraca ją do stanu konta gracza
   2. Przy przegranej system zabiera postawioną stawkę ze stanu konta gracza
   3. Przy remisie system zwraca użytkownikowi postawioną sumę

-System zapisuje wynik rozgrywki w bazie danych 



Sprawdzenie statystyk gracza

-Użytkownik chce wyświetlić statystyki swojego konta

-Użytkownik loguje się w serwisie

-Użytkownik wybiera opcje historia gier z menu bocznego
            
-Użytkownik zostaję przekierowany na podstronę historii gier 

-Podstrona zawiera informacje o ilości rozegranych gier, wygranych gier, przegranych gier, remisów, wynik gry i datę gry
