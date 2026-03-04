# Pertemuan 3: PHP, Session, Cookies

Nama: Auliya Az Zahrah Salsabialh 

NRP: 162023026

Pertemuan 3
Pertemuan ini membuat tampilan halaman login beserta alurnya dengan menggunakan PHP, dan Session. 

Pada halaman index dibagian Navbar, ketika user belum melakuan login maka terdapat button 'Login', apabila di klik maka akan mengantarkan ke halaman Login. 

Pada halaman login, username beserta passwordnya masih menggunakan username dan password yang sudah ditentukan atau sudah tersimpan sebelumnya pada halaman proses_login.

// password dan username yang dipakai
$valid_username = "admin";
$valid_password = "12345";

Kemudian, ketika sudah berhasil login. Maka akan diantarkan lagi ke halaman index.php. Karena sudah berhasil login, di halaman index.php pada bagian navbar button login sudah tidak ada, kearena sudah diganti dengan button logout beserta "Halo, [username]". 

Pada proses semua ini menambahkan halaman, login.php beserta logout.php dan proses_login.php yang tersimpan di folder controller. 

