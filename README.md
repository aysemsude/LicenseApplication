#Dijital Lisans Yönetim Sistemi

--Yükleme ve ayağa kaldırma--
composer install 
copy .env.example .env
php artisan migrate:fresh --seed 
php artisan serve 

--api endpointler aşağıdaki gibidir;--

GET/api/products
GET/api/users/{user}/licences
POST /orders
----
Yönergeler dikkate alınarak mimari tasarım yapılmıştır. Zaman kısıtından dolayı mail, queue kısımlarının geliştirmesini gerçekleştirilememiştir, ancak sistemin verimliliği açısından Mailiable classlar açılarak bildirim mekanizmalarının oluşturulup queue lar ile arka planda yöneterek hızlı response timelar elde edilebilir. 