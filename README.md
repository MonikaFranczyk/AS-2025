# AS-2025

Modyfikacje
1) Paginacja została dodana do koszyka. Jeżeli elementów w koszyku jest więcej niż pięć
to kolejne elementy wyświetlane są na następnej stronie.

Zmodyfikowano kod w następujących plikach.
app/controllers/CartCtrl.class -> function action_cart() (od linii 86 - 121)
funkcje action_cart_update_item() oraz action_cart_remove_item() - zmodyfikowano jedynie przekierowanie 
strony do odpowiedniej karty po updacie ilości elementów w koszyku

app/views/Cart.tpl -> od linii 96 -> dadana została paginacja

2)AJAX dodano do koszyka, aby móc modyfikować ilość elementów w koszyku bez konieczności reloadu strony.

Zmodyfikowano kod w następujących plikach.
app/controllers/CartCtrl.class -> action_cart_update_item_ajax() i action_cart_remove_item_ajax()
(od linii 294) - dodano 2 nowe funkcje które również zostały podpięte też w routingu

app/controllers.Cart.tpl -> od linii 145 dodano kod javaScript do obsługi AJAX
