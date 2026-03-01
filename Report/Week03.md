# Praktikum 1
![](img/langkah6-praktikum1-week3.png)

# Praktikum 2
## Praktikum 2.1
![](img/langkah6-praktikum2.1-week3.png)
![](img/langkah9-praktikum2.1-week3.png)

## Praktikum 2.2
![](img/langkah3-praktikum2.2-week3.png)
![](img/langkah5-praktikum2.2-week3.png)

# Praktikum 3
![](img/langkah4-praktikum3-week3.png)
![](img/langkah11-praktikum3-week3.png)
![](img/langkah11-praktikum3-week3-1.png)
![](img/langkah11-praktikum3-week3-2.png)
![](img/langkah11-praktikum3-week3-3.png)
![](img/langkah11-praktikum3-week3-4.png)
![](img/langkah11-praktikum3-week3-5.png)

# Praktikum 4
![](img/langkah4-praktikum4-week3(1).png)
![](img/langkah4-praktikum4-week3.png)
![](img/langkah6-praktikum4-week3.png)
![](img/langkah6-praktikum4-week3(1).png)
![](img/langkah7-praktikum4-week3.png)
![](img/langkah7-praktikum4-week3(!).png)
![](img/langkah10-praktikum4-week3.png)

# Praktikum 5
![](img/langkah4-praktikum5-week3.png)
![](img/langkah4-praktikum5-week3(1).png)
![](img/langkah6-praktikum5-week3.png)
![](img/langkah6-praktikum5-week3(!).png)
![](img/langkah7-praktikum5-week3.png)
![](img/langkah7-praktikum5-week3-1.png)
![](img/langkah8-praktikum5-week3.png)

# Praktikum 6
![](img/langkah7-praktikum6-week3.png)
![](img/langkah9-praktikum6-week3.png)
![](img/langkah11-praktikum6-week3.png)

# Soal Penutup
1. Digunakan dalam proses menjalankan Laravel, terutama untuk fungsi-fungsi keamanan aplikasi.
2. Menggunakan command:
```shell
php artisan key:generate
```
3. Terdapat tiga file migrasi default dari Laravel, yaitu untuk tabel users, cache, dan jobs.
4. Method tersebut akan membuat kolom `created_at` dan `updated_at` dengan tipe data `timestamp`.
5. `$table->id()` akan menghasilkan kolom `unsigned big integer auto increment` sebagai primary key dengan nama default `id`.
6. `table->id('level_id');` akan menghasilkan primary key dengan nama `level_id`, sedangkan bentuk default tanpa parameter akan menghasilkan nama `id`.
7. Menambahkan atribut `unique` yang tidak memperbolehkan adanya nilai duplikat pada kolom tersebut.
8. Karena `level_id` pada tabel `m_user` merupakan foreign key, sementara `level_id` pada tabel `m_level` merupakan primary key yang menjadi referensinya.
9. Hash adalah kelas yang digunakan untuk mengubah sebuah string menjadi bentuk lain yang berbeda dari aslinya. Proses ini bersifat deterministik, artinya input yang sama akan selalu menghasilkan hash yang sama. Hash sangat cocok digunakan untuk kolom password karena password asli tidak disimpan di database. Dengan demikian, jika database terkompromi, kredensial pengguna tidak langsung bocor. Sistem hanya perlu membandingkan apakah hash dari input password sama dengan hash yang tersimpan di database.
10. Digunakan sebagai posisi binding untuk nilai yang ingin dimasukkan ke dalam query, sehingga membantu mencegah SQL Injection.
11. Digunakan untuk mendefinisikan nama tabel dan primary key column pada model yang dibuat.
12. Saya lebih suka menggunakan Query Builder dan ORM. Pada dasarnya, ORM juga menggunakan mekanisme yang mirip dengan Query Builder. Perbedaan utamanya terletak pada cara pendefinisian dan representasi tabel melalui model. Sementara itu, penggunaan DB Facade terasa seperti menulis query SQL secara manual, yang menurut saya lebih kompleks dan kurang praktis dibandingkan ORM.

