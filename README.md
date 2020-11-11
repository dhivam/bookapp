# PROJECT BOOK APP
Dhiva Mustikananda - 185150701111013 - PEMIN TI A

# Modul 5 
1. Pada modul 5  kita membuat dasar aplikasi bookapp.
2. Membuat database dan melakukan setting pada file .env
3. Membuat migration bernama CreateBooksTable untuk membuat table data dengan mudah, cepat dan meng-generate file. Kemudian menambahkan function up untuk membuat tabel dan atribut table di database.
4. Mengedit file Databaseseeder.php untuk mengisi data dengan data sembarang atau data testing. Kemudian menambahkan function run untuk mengisi kolom table di database.
5. Membuat BooksControllers untuk mengolah data buku. Kemudian menambahkan function index untuk menampilkan list data buku, function getBookbyId untuk menampilkan data buku sesuai inputan id, function BookStore untuk menambah data buku, function BookUpdate untuk mengupdate data buku, function BookDestroy untuk menghapus data buku.
6. Pada function getBookbyId memberikan pesan tidak ditemukan jika id yang diinputkan tidak ada.
7. Pada routes untuk menangani request kita di Url untuk memanggil halaman/resouce tertentu. Routes memanggil BooksController sesuai functionnya

# Challenge
1. Membuat migration bernama CreateAuthorsTable dan menambahkan function up untuk membuat atribut pada table authors
2. Membuat AuthorsController untuk mengolah data author. Kemudian menambahkan function Authord untuk menampilkan list data author, function AuthorsId untuk menampilkan data author sesuai inputan id, function AuthorsAdd untuk menambah data author, function AuthorsUpdate untuk mengupdate data author, function AuthorsDestroy untuk menghapus data author.
3. Pada function AuthorsId memberikan pesan tidak ditemukan jika id yang diinputkan tidak ada.
4. Memanggil AuthorsController pada routes dengan menambahkan routes sesuai dengan fungsi functionnya.
# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
