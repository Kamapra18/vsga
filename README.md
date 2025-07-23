---

```markdown
# 📚 Website Donasi Buku Digital

Website ini adalah aplikasi web sederhana untuk mendukung donasi buku secara digital. Dibuat menggunakan PHP native dan Bootstrap 5, website ini memungkinkan pengguna untuk mengisi formulir donasi buku dan melihat daftar buku yang telah didonasikan.

---


## 🚀 Fitur Unggulan

- 📝 Form donasi buku melalui modal popup
- 📤 Upload gambar cover buku (JPG/PNG)
- 📃 Laporan donasi yang bisa dicetak
- 🗂️ Menampilkan daftar buku donasi secara dinamis
- 🎨 Tampilan responsif menggunakan Bootstrap 5

---

## 🗂️ Struktur Folder

```
📁 donasi/
├── assets/              # Berisi logo favicon
│   └── logo.png
├── config/              # File konfigurasi koneksi ke database
│   └── koneksi.php
├── partials/            # Komponen modular yang dipanggil di halaman utama
│   ├── create.php       # Menyimpan data donasi ke database
│   ├── footer.php       # Komponen footer HTML
│   └── modal.php        # Form donasi dalam bentuk modal popup
├── upload/              # Folder penyimpanan cover buku yang diupload
│   └── [nama_file].jpg/png
├── index.php            # Halaman utama website donasi
└── print.php            # Halaman cetak bukti/laporan donasi
```

```

---
