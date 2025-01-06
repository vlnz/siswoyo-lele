# Website Penjualan Lele 🐟  
Website penjualan lele berbasis web yang dibangun menggunakan framework Laravel dan menggunakan XAMPP sebagai server lokal untuk pengelolaan database MySQL.  

## Fitur Utama:  
- **Manajemen Produk**: Tambah, edit, hapus, dan lihat daftar produk lele.  
- **Manajemen Pesanan**: Pantau pesanan pelanggan dengan detail status pesanan.  
- **Dashboard Admin**: Analisis data penjualan dan kontrol penuh atas website.  
- **Otentikasi Pengguna**: Sistem login dan register untuk admin dan pelanggan.  
- **Responsive Design**: Tampilan yang optimal di berbagai perangkat.  

## Teknologi yang Digunakan:  
- **Backend**: Laravel (PHP Framework)  
- **Frontend**: Blade, Bootstrap, dan CSS  
- **Database**: MySQL (dikelola melalui XAMPP)  
- **Server Lokal**: XAMPP  

## Cara Menjalankan:  
1. Clone repositori ini ke lokal:  
   ```bash  
   git clone https://github.com/username/repository.git  
   ```  
2. Masuk ke direktori project:  
   ```bash  
   cd nama_project  
   ```  
3. Install dependency Laravel:  
   ```bash  
   composer install  
   ```  
4. Salin file `.env.example` menjadi `.env` dan sesuaikan konfigurasi database:  
   ```plaintext  
   DB_CONNECTION=mysql  
   DB_HOST=127.0.0.1  
   DB_PORT=3306  
   DB_DATABASE=nama_database  
   DB_USERNAME=root  
   DB_PASSWORD=  
   ```  
5. Jalankan perintah untuk membuat key aplikasi:  
   ```bash  
   php artisan key:generate  
   ```  
6. Migrasikan database:  
   ```bash  
   php artisan migrate  
   ```  
7. Jalankan server lokal Laravel:  
   ```bash  
   php artisan serve  
   ```  
8. Akses website di: [http://127.0.0.1:8000](http://127.0.0.1:8000)  

---

Semoga deskripsi ini membantu! Jangan lupa untuk menyesuaikan nama repositori, username GitHub, dan konfigurasi lainnya sesuai dengan kebutuhan. 😊
