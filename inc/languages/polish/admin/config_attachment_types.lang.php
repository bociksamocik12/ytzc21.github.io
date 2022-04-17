<?php
/**
 * MyBB 1.8 Polish Language Pack
 * * Copyright © 2008-2021 Webboard.pl Team
 * See readme.html for copyright information. | Zapoznaj sie z plikiem czytaj_to.html.
 * Autorzy: bryn, DamYan, gigi, matc, szulcu, Łukasz, Divir | Testerzy: hippie
 */

$l['attachment_types'] = "Typy załączników";
$l['attachment_types_desc'] = "Twórz i zarządzaj typami załączników, ograniczając możliwość załączania plików o nieznanych rozszerzeniach. Uwaga: wyłączenie danego typu załącznika spowoduje, że istniejące już załączniki tego typu będą niedostępne.";
$l['add_new_attachment_type'] = "Nowy typ";
$l['add_attachment_type'] = "Nowy typ załączników";
$l['add_attachment_type_desc'] = "Dodanie typu załączników pozwoli użytkownikom na dołączenie plików tego typu do ich wypowiedzi. Dla każdego typu załącznika możesz ustalić rozszerzenie, typ MIME, maksymalny rozmiar i ikonkę.";
$l['edit_attachment_type'] = "Edytuj typ załącznika";
$l['edit_attachment_type_desc'] = "Dla każdego typu załącznika możesz ustalić rozszerzenie, typ MIME, maksymalny rozmiar i ikonkę.";

$l['extension'] = "Rozszerzenie";
$l['maximum_size'] = "Maksymalny rozmiar";
$l['no_attachment_types'] = "Nie zdefiniowano żadnych typów załączników.";

$l['name'] = "Nazwa";
$l['name_desc'] = "Wpisz nazwę załączników tego typu";
$l['file_extension'] = "Rozszerzenie pliku";
$l['file_extension_desc'] = "Wpisz rozszerzenie plików, na których załączanie chcesz zezwolić. Nie wpisuj kropki przed rozszerzeniem (przykład: txt).";
$l['mime_type'] = "Typ MIME";
$l['mime_type_desc'] = "Wpisz typ MIME, który zostanie wysłany przez serwer podczas pobierania pliku (<a href=\"http://www.freeformatter.com/mime-types-list.html\">Pokaż listę dostępnych typów</a>)";
$l['maximum_file_size'] = "Maksymalny rozmiar pliku (w kilobajtach)";
$l['maximum_file_size_desc'] = "Maksymalny rozmiar pliku jaki można załadować dla tego rozszerzenia, rozmiar podaj w kilobajtach (1 MB = 1024 KB)";
$l['limit_intro'] = "Upewnij się, że rozmiar pliku jest mniejszy niż ustalony w konfiguracji PHP:";
$l['limit_post_max_size'] = "Maksymalny rozmiar posta: {1}";
$l['limit_upload_max_filesize'] = "Maksymalny rozmiar załącznika: {1}";
$l['attachment_icon'] = "Ikona załącznika";
$l['attachment_icon_desc'] = "Jeżeli chcesz, by przy załącznikach tego typu pokazywała się ikonka, podaj tutaj jej ścieżkę. \"{theme}\" zostanie zastąpione przez adres katalogu z obrazkami aktualnie używanego stylu.";
$l['save_attachment_type'] = "Zapisz typ załączników";

$l['error_invalid_attachment_type'] = "Wybrano niepoprawny typ załącznika.";
$l['error_missing_mime_type'] = "Nie podano typu MIME dla tego rodzaju plików";
$l['error_missing_extension'] = "Nie podano rozszerzenia dla tego rodzaju plików";

$l['success_attachment_type_created'] = "Typ załączników został utworzony.";
$l['success_attachment_type_updated'] = "Typ załączników został zaktualizowany.";
$l['success_attachment_type_deleted'] = "Typ załączników został usunięty.";

$l['confirm_attachment_type_deletion'] = "Czy na pewno chcesz usunąć ten typ załączników?";

$l['success_activated_attachment_type'] = 'Wybrany typ załącznika został pomyślnie aktywowany.';
$l['success_deactivated_attachment_type'] = 'Wybrany typ załącznika został pomyślnie dezaktywowany.';

$l['enabled'] = "Włączone?";
$l['forcedownload'] = "Wymuszone pobieranie";
$l['forcedownload_desc'] = "Włączenie tej opcji wymusi pobranie załącznika jako pliku.";
$l['avatar_file'] = 'Plik awatara';
$l['avatar_file_desc'] = 'Chcesz zezwolić temu typowi załącznika na bycie awatarem?';

$l['available_to_groups'] = 'Dostępna dla grup';
$l['available_in_forums'] = 'Dostępna na forum';
