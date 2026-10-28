<!DOCTYPE html>
<html lang="id" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa - Portal Akademik SMK Budi Luhur</title>
    <!-- CDN Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS Custom Dark Mode & Mascot -->
    <link rel="stylesheet" href="<?= base_url('css/portal.css'); ?>">
</head>
<body>

    <div class="portal-container">
        
        <!-- Header Banner & Friendly Minimalist Vector Mascot -->
        <div class="hero-portal">
            <div class="hero-content">
                <div class="hero-tag">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                    </svg>
                    PORTAL AKADEMIK
                </div>
                <h1>Data Siswa SMK Budi Luhur</h1>
                <p>Kelola informasi siswa dengan mudah dalam satu tempat. Lihat daftar, tambahkan siswa baru, atau perbarui data kapan saja.</p>
            </div>

            <!-- 2D Minimalist Vector Mascot (Cute Friendly Stylized Student with Graduation Cap) -->
            <div class="mascot-wrapper" title="Halo! Selamat Datang di Portal Akademik">
                <div class="mascot-glow"></div>
                <svg class="mascot-svg" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <!-- Bayangan Bawah Tubuh -->
                    <ellipse cx="60" cy="112" rx="28" ry="5" fill="#030712" opacity="0.4"/>
                    
                    <!-- Badan / Hoodie Mahasiswa -->
                    <path d="M35 88C35 77 45 74 60 74C75 74 85 77 85 88V110H35V88Z" fill="#1e293b"/>
                    <path d="M48 78L60 92L72 78" stroke="#38bdf8" stroke-width="2.5" stroke-linecap="round"/>
                    <circle cx="60" cy="98" r="3.5" fill="#38bdf8"/>
                    
                    <!-- Leher -->
                    <rect x="53" y="68" width="14" height="12" rx="4" fill="#fed7aa"/>
                    
                    <!-- Kepala & Wajah -->
                    <circle cx="60" cy="50" r="24" fill="#ffedd5"/>
                    
                    <!-- Rambut Minimalis -->
                    <path d="M38 46C38 32 46 28 60 28C74 28 82 32 82 46C82 41 78 35 60 35C44 35 38 42 38 46Z" fill="#1e293b"/>
                    
                    <!-- Mata Ramah (Mata Tertawa Bahagia) -->
                    <path d="M49 48C50 45 54 45 55 48" stroke="#1e293b" stroke-width="2.5" stroke-linecap="round"/>
                    <path d="M65 48C66 45 70 45 71 48" stroke="#1e293b" stroke-width="2.5" stroke-linecap="round"/>
                    
                    <!-- Pipi Merona Lembut -->
                    <ellipse cx="46" cy="54" rx="3.5" ry="2" fill="#fca5a5" opacity="0.7"/>
                    <ellipse cx="74" cy="54" rx="3.5" ry="2" fill="#fca5a5" opacity="0.7"/>
                    
                    <!-- Senyum Hangat -->
                    <path d="M56 54C58 57 62 57 64 54" stroke="#1e293b" stroke-width="2.2" stroke-linecap="round"/>
                    
                    <!-- Topi Toga Wisuda (Graduation Cap) -->
                    <g transform="rotate(-6 60 28)">
                        <!-- Belah Ketupat Atas Topi -->
                        <polygon points="60 12 94 25 60 38 26 25" fill="#0f172a" stroke="#38bdf8" stroke-width="1.5"/>
                        <!-- Dudukan Topi (Skull Cap) -->
                        <path d="M42 27C42 27 44 35 60 35C76 35 78 27 78 27" fill="#1e293b"/>
                        <!-- Tombol Tengah Topi -->
                        <circle cx="60" cy="25" r="2.5" fill="#f59e0b"/>
                        <!-- Tali Rumbai (Tassel) Emas -->
                        <path d="M60 25C68 28 73 34 74 41" stroke="#f59e0b" stroke-width="2" stroke-linecap="round"/>
                        <circle cx="74" cy="42" r="2.5" fill="#f59e0b"/>
                    </g>
                    
                    <!-- Kilau Partikel Bintang Kecil -->
                    <circle cx="28" cy="24" r="1.5" fill="#38bdf8" opacity="0.8"/>
                    <circle cx="96" cy="72" r="1.8" fill="#f59e0b" opacity="0.8"/>
                </svg>
            </div>
        </div>

        <!-- Card Tabel Data Siswa (Dark Mode Surface) -->
        <div class="portal-card">
            
            <!-- Card Header: Tag, Judul & Tombol Tambah Siswa -->
            <div class="portal-card-header">
                <div>
                    <div class="card-tag">DIREKTORI KELAS</div>
                    <h2 class="card-title-text">Daftar Siswa Terdaftar</h2>
                </div>
                <div>
                    <button type="button" class="btn-tambah" data-bs-toggle="modal" data-bs-target="#modalTambah">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                        Tambah Siswa
                    </button>
                </div>
            </div>

            <!-- Tabel Siswa -->
            <div class="table-responsive">
                <table class="table-custom">
                    <thead>
                        <tr>
                            <th width="7%" class="text-center">NO</th>
                            <th width="15%">NIS</th>
                            <th width="42%">NAMA</th>
                            <th width="20%">KELAS</th>
                            <th width="16%" class="text-center">AKSI</th>
                        </tr>
                    </thead>
                    <tbody id="siswaTableBody">
                        <?php if (!empty($siswa) && is_array($siswa)) : ?>
                            <?php $no = 1; foreach ($siswa as $row) : ?>
                                <tr class="baris-siswa">
                                    <td class="text-center no-urut"><?= $no++ ?></td>
                                    <td><span class="badge-nis"><?= esc($row['nis']) ?></span></td>
                                    <td class="student-name"><?= esc($row['nama']) ?></td>
                                    <td class="student-class"><?= esc($row['kelas']) ?></td>
                                    <td class="text-center">
                                        <div class="d-inline-flex gap-2">
                                            <!-- Tombol Edit (Amber Glow Pill) -->
                                            <button type="button" class="btn-action-edit" 
                                                data-bs-toggle="modal" data-bs-target="#modalEdit<?= $row['id']; ?>">
                                                Edit
                                            </button>
                                            <!-- Tombol Hapus (Rose Outline Pill) -->
                                            <a href="<?= base_url('home/hapus/' . $row['id']); ?>" 
                                               class="btn-action-delete" 
                                               onclick="return confirm('Apakah Anda yakin ingin menghapus data siswa ini?');">
                                                Hapus
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr id="emptyDataRow">
                                <td colspan="5" class="text-center py-4 text-muted">
                                    Belum ada data siswa terdaftar.
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

        </div>

        <!-- Pagination Bar di Bawah Card (Maksimal 5 Data Per Halaman) -->
        <div class="portal-pagination-bar">
            <div>
                <button type="button" class="btn-nav-prev" id="btnSebelumnya">
                    &larr; Sebelumnya
                </button>
            </div>
            <div>
                <p class="pagination-text">
                    Halaman <strong id="teksHalamanAktif">1</strong> dari <strong id="teksTotalHalaman">1</strong>
                </p>
            </div>
            <div>
                <button type="button" class="btn-nav-next" id="btnBerikutnya">
                    Berikutnya &rarr;
                </button>
            </div>
        </div>

    </div>

    <!-- Modal Tambah Siswa Baru (Dark Mode) -->
    <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header modal-header-teal">
                    <h5 class="modal-title m-0 fw-bold" id="modalTambahLabel">Tambah Siswa Baru</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= base_url('home/tambah'); ?>" method="POST">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nis" class="form-label">Nomor Induk Siswa (NIS)</label>
                            <input type="text" name="nis" id="nis" class="form-control" placeholder="Contoh: 1001" required>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Contoh: Ahmad Pratama" required>
                        </div>
                        <div class="mb-3">
                            <label for="kelas" class="form-label">Kelas</label>
                            <select name="kelas" id="kelas" class="form-select" required>
                                <option value="" disabled selected>-- Pilih Kelas --</option>
                                <option value="10 ANIMASI">10 ANIMASI</option>
                                <option value="10 BC">10 BC</option>
                                <option value="10 RPL">10 RPL</option>
                                <option value="11 ANIMASI">11 ANIMASI</option>
                                <option value="11 BC">11 BC</option>
                                <option value="11 RPL">11 RPL</option>
                                <option value="12 ANIMASI">12 ANIMASI</option>
                                <option value="12 BC">12 BC</option>
                                <option value="12 RPL">12 RPL</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary btn-sm rounded-pill px-3" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn-tambah" style="padding: 0.45rem 1.35rem;">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit Siswa (Dark Mode) -->
    <?php if (!empty($siswa) && is_array($siswa)) : ?>
        <?php 
        $listOpsiKelas = [
            '10 ANIMASI', '10 BC', '10 RPL',
            '11 ANIMASI', '11 BC', '11 RPL',
            '12 ANIMASI', '12 BC', '12 RPL'
        ];
        ?>
        <?php foreach ($siswa as $row) : ?>
            <div class="modal fade" id="modalEdit<?= $row['id']; ?>" tabindex="-1" 
                aria-labelledby="modalEditLabel<?= $row['id']; ?>" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header modal-header-amber">
                            <h5 class="modal-title m-0 fw-bold" id="modalEditLabel<?= $row['id']; ?>">
                                Edit Data Siswa
                            </h5>
                            <button type="button" class="btn-close btn-close-white" 
                                data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="<?= base_url('home/edit/' . $row['id']); ?>" method="POST">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label">Nomor Induk Siswa (NIS)</label>
                                    <input type="text" name="nis" class="form-control" 
                                        value="<?= esc($row['nis']); ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control" 
                                        value="<?= esc($row['nama']); ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Kelas</label>
                                    <select name="kelas" class="form-select" required>
                                        <?php 
                                        $currentKelas = $row['kelas'];
                                        // Jika kelas siswa saat ini belum ada di list standar, tetap sertakan agar data aman
                                        if (!empty($currentKelas) && !in_array($currentKelas, $listOpsiKelas)) {
                                            echo '<option value="' . esc($currentKelas) . '" selected>' . esc($currentKelas) . ' (Saat Ini)</option>';
                                        }
                                        foreach ($listOpsiKelas as $optKls) {
                                            $isSelected = (strtoupper(trim($currentKelas)) === strtoupper(trim($optKls))) ? 'selected' : '';
                                            echo '<option value="' . esc($optKls) . '" ' . $isSelected . '>' . esc($optKls) . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary btn-sm rounded-pill px-3" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-warning btn-sm text-dark fw-bold rounded-pill px-4" style="background-color: var(--accent-amber); border:none;">Simpan Perubahan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>

    <!-- CDN Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script Paginasi Otomatis (Maksimal 5 data per halaman) -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const baris = Array.from(document.querySelectorAll('.baris-siswa'));
            const btnPrev = document.getElementById('btnSebelumnya');
            const btnNext = document.getElementById('btnBerikutnya');
            const teksHalaman = document.getElementById('teksHalamanAktif');
            const teksTotal = document.getElementById('teksTotalHalaman');

            // MAKSIMAL 5 DATA SISWA SETIAP HALAMAN
            const maxPerHalaman = 5;
            const totalHalaman = Math.max(1, Math.ceil(baris.length / maxPerHalaman));

            // Ambil halaman dari URL parameter ?page=X jika ada
            const urlParams = new URLSearchParams(window.location.search);
            let pageParam = parseInt(urlParams.get('page'));
            let halamanAktif = (!isNaN(pageParam) && pageParam >= 1 && pageParam <= totalHalaman) ? pageParam : 1;

            function tampilkanHalaman(page) {
                halamanAktif = page;

                // Tampilkan hanya 5 baris yang sesuai dengan halaman aktif
                const mulai = (halamanAktif - 1) * maxPerHalaman;
                const selesai = mulai + maxPerHalaman;

                baris.forEach((r, idx) => {
                    if (idx >= mulai && idx < selesai) {
                        r.style.display = '';
                    } else {
                        r.style.display = 'none';
                    }
                });

                // Update teks info halaman
                if (teksHalaman) teksHalaman.textContent = halamanAktif;
                if (teksTotal) teksTotal.textContent = totalHalaman;

                // Atur status disabled tombol navigasi
                if (btnPrev) btnPrev.disabled = (halamanAktif <= 1);
                if (btnNext) btnNext.disabled = (halamanAktif >= totalHalaman);

                // Update URL ?page=X tanpa merefresh halaman
                const url = new URL(window.location);
                url.searchParams.set('page', halamanAktif);
                window.history.replaceState({}, '', url);
            }

            // Event Tombol Sebelumnya
            if (btnPrev) {
                btnPrev.addEventListener('click', function () {
                    if (halamanAktif > 1) {
                        tampilkanHalaman(halamanAktif - 1);
                    }
                });
            }

            // Event Tombol Berikutnya
            if (btnNext) {
                btnNext.addEventListener('click', function () {
                    if (halamanAktif < totalHalaman) {
                        tampilkanHalaman(halamanAktif + 1);
                    }
                });
            }

            // Jalankan awal
            tampilkanHalaman(halamanAktif);
        });
    </script>
</body>
</html>
