<?php
require_once 'init.php';
// Po załadowaniu skryptu 'init.php' w całej aplikacji dostępne są obiekty:
// konfiguracji, smarty, messages oraz bazy danych Medoo (Smarty i Medoo ładowane i tworzone w momencie pierwszego użycia)
// za pomocą funkcji: getConf(), getSmarty(), getMessages() oraz getDB()
// dodatkowo szereg przydatnych funkcji:
// - getFromRequest(), getFromSession(), getFromCookies(), getFromPost(), getFromGet()
// pozwalają one od razu wygenerowac błąd (Message) gdy parametr jest wymagany
// - forwardTo(), redirectTo() czyli przekazanie żądania lub przekierowanie przeglądarki do podanej akcji
// - addRole(), inRole() czyli możliwość zapisania nazwy ról uzytkwnika w sesji i sprawdzenie czy użytkownik jest w danej roli
// - funkcja control() upraszczająca wywołanie metody wskazanego kontrolera ze zintegrowaną ochroną (na podstawie roli)
// - funkcje pozwalające na przechowywanie Messages, obiektów i danych w sesji: storeMessages/loadMessages, storeObject/loadObject, storeData/loadData
// - funkcja validateDate() sprawdzająca poprawność daty (walidator)
// - jest również dostępna zmienna $action inicjowana z parametru żądania

getConf()->login_action = 'loginShow'; // akcja przekierowania dla chronionej zawartości gdy użytkownik nie zalogowany

switch ($action){
	default : //'personList' akcja domyślna
		control('/app/home/','HomeCtrl','process'); // publiczna
    case 'login': //AJAX - wysłanie samej tabeli HTMLowej
        control('/app/login/','LoginCtrl','generateView'); // publiczna
    case 'loginAction': //AJAX - wysłanie samej tabeli HTMLowej
        control('/app/login/','LoginCtrl','doLogin'); // publiczna
    case 'logoutAction': //AJAX - wysłanie samej tabeli HTMLowej
        control('/app/login/','LoginCtrl','doLogout'); // publiczna
    case 'createPost': //AJAX - wysłanie samej tabeli HTMLowej
        control('/app/home/','HomeCtrl','createPost'); // publiczna
    case 'register': //AJAX - wysłanie samej tabeli HTMLowej
        control('/app/register/','RegisterCtrl','generateView'); // publiczna
    case 'registerAction': //AJAX - wysłanie samej tabeli HTMLowej
        control('/app/register/','RegisterCtrl','doRegister'); // publiczna
}