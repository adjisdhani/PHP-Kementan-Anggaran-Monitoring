<?php
$page=$_GET['page'];

if (!isset($_GET['page'])) {
	$page='home';
	if ($_SESSION['pengguna_status'] == 1) {
		include 'tampil/admin/admin.php';
	}
	elseif ($_SESSION['pengguna_status'] == 2) {
		include 'tampil/pegawai/pegawai.php';
	}
	elseif ($_SESSION['pengguna_status'] == 3) {
		include 'tampil/pumk/pumk.php';
	}
	elseif ($_SESSION['pengguna_status'] == 4) {
		include 'tampil/bendahara/bendahara.php';
	}
}
if ($page=='pengguna_tambah') {
	include 'Tampil/admin/pengguna_tambah.php';
}
if ($page=='ceknip') {
	include 'Tampil/admin/ceknip.php';
}
elseif ($page=='pengguna_tambah_proses') {
	include 'Tampil/admin/pengguna_tambah_proses.php';
}
elseif ($page=='pengguna_lihat') {
	include 'Tampil/admin/pengguna_lihat.php';
}
elseif ($page=='pengguna_ubah') {
	include 'Tampil/admin/pengguna_ubah.php';
}
elseif ($page=='pengguna_ubah_proses') {
	include 'Tampil/admin/pengguna_ubah_proses.php';
}
elseif ($page=='pengguna_hapus') {
	include 'Tampil/admin/pengguna_hapus.php';
}
elseif ($page=='pengajuan_tambah') {
	include 'Tampil/pegawai/pengajuan_tambah.php';
}
elseif ($page=='pengajuan_tambah_proses') {
	include 'Tampil/pegawai/pengajuan_tambah_proses.php';
}
elseif ($page=='pengajuan_lihat') {
	include 'Tampil/pengajuan_lihat.php';
}
elseif ($page=='pengajuan_lihat_masuk') {
	include 'Tampil/pumk/pengajuan_lihat_masuk.php';
}
elseif ($page=='pengajuan_diterima') {
	include 'Tampil/pumk/pengajuan_diterima.php';
}
elseif ($page=='pengajuan_ditolak') {
	include 'Tampil/pumk/pengajuan_ditolak.php';
}
elseif ($page=='update_pengajuan_ditolak') {
	include 'Tampil/pumk/update_pengajuan_ditolak.php';
}
elseif ($page=='update_pengajuan_lihat_masuk') {
	include 'Tampil/pumk/penerimaan_pengajuan_lihat_masuk.php';
}
elseif ($page=='update_pelaporan_lihat_masuk') {
	include 'Tampil/pumk/penerimaan_pelaporan_lihat_masuk.php';
}
elseif ($page=='katasandi_ubah') {
	include 'Tampil/pengguna/katasandi_ubah.php';
}
elseif ($page=='katasandi_ubah_proses') {
	include 'Tampil/pengguna/katasandi_ubah_proses.php';
}
elseif ($page=='identitas_ubah') {
	include 'Tampil/pengguna/identitas_ubah.php';
}
elseif ($page=='identitas_ubah_proses') {
	include 'Tampil/pengguna/identitas_ubah_proses.php';
}
elseif ($page=='realisasi') {
	include 'Tampil/realisasi_lihat.php';
}
elseif ($page=='realisasikegiatan') {
	include 'Tampil/pumk/realisasikegiatan.php';
}
elseif ($page=='realisasikegiatan_proses') {
	include 'Tampil/pumk/realisasikegiatan_proses.php';
}
elseif ($page=='kegiatan_terlaksana') {
	include 'Tampil/bendahara/kegiatan_terlaksana.php';
}
elseif ($page=='kegiatan_terlaksana_pumk') {
	include 'Tampil/pumk/kegiatan_terlaksana_pumk.php';
}
elseif ($page=='kegiatan_belum_terlaksana') {
	include 'Tampil/bendahara/kegiatan_belum_terlaksana.php';
}
elseif ($page=='laporan_mingguan') {
	include 'Tampil/laporan/laporan_mingguan.php';
}
elseif ($page=='laporan_bulanan') {
	include 'Tampil/laporan/laporan_bulanan.php';
}
elseif ($page=='laporan_mingguan') {
	include 'Tampil/laporan/laporan_mingguan.php';
}
elseif ($page=='detail_pengguna') {
	include 'Tampil/detail/detail_pengguna.php';
}
elseif ($page=='detail_kegiatan') {
	include 'Tampil/detail/detail_kegiatan.php';
}
elseif ($page=='detail_pelaporan') {
	include 'Tampil/detail/detail_pelaporan.php';
}
elseif ($page=='detail_pengajuan') {
	include 'Tampil/detail/detail_pengajuan.php';
}
elseif ($page=='detail_realisasi') {
	include 'Tampil/detail/detail_realisasi.php';
}
elseif ($page=='kegiatan_tambah') {
	include 'Tampil/admin/kegiatan_tambah.php';
}
elseif ($page=='kegiatan_tambah_proses') {
	include 'Tampil/admin/kegiatan_tambah_proses.php';
}
elseif ($page=='pelaporan_tambah') {
	include 'Tampil/pegawai/pelaporan_tambah.php';
}
elseif ($page=='pelaporan_tambah_proses') {
	include 'Tampil/pegawai/pelaporan_tambah_proses.php';
}
elseif ($page=='pelaporan_lihat') {
	include 'Tampil/pelaporan_lihat.php';
}
elseif ($page=='pelaporan_lihat_masuk') {
	include 'Tampil/pumk/pelaporan_lihat_masuk.php';
}
elseif ($page=='pelaporan_diterima') {
	include 'Tampil/pumk/pelaporan_diterima.php';
}
elseif ($page=='pelaporan_ditolak') {
	include 'Tampil/pumk/pelaporan_ditolak.php';
}
elseif ($page=='kegiatan_lihat') {
	include 'Tampil/kegiatan_lihat.php';
}
elseif ($page=='bidang_tambah') {
	include 'Tampil/admin/bidang_tambah.php';
}
elseif ($page=='bidang_tambah_proses') {
	include 'Tampil/admin/bidang_tambah_proses.php';
}
elseif ($page=='bidang_hapus') {
	include 'Tampil/admin/bidang_hapus.php';
}
elseif ($page=='bidang_ubah') {
	include 'Tampil/admin/bidang_ubah.php';
}
elseif ($page=='bidang_ubah_proses') {
	include 'Tampil/admin/bidang_ubah_proses.php';
}
elseif ($page=='bidang_lihat') {
	include 'Tampil/admin/bidang_lihat.php';
}
elseif ($page=='subbidang_tambah') {
	include 'Tampil/admin/subbidang_tambah.php';
}
elseif ($page=='subbidang_tambah_proses') {
	include 'Tampil/admin/subbidang_tambah_proses.php';
}
elseif ($page=='subbidang_hapus') {
	include 'Tampil/admin/subbidang_hapus.php';
}
elseif ($page=='subbidang_ubah') {
	include 'Tampil/admin/subbidang_ubah.php';
}
elseif ($page=='subbidang_ubah_proses') {
	include 'Tampil/admin/subbidang_ubah_proses.php';
}
elseif ($page=='subbidang_lihat') {
	include 'Tampil/admin/subbidang_lihat.php';
}
elseif ($page=='judul_lihat') {
	include 'Tampil/admin/judul_lihat.php';
}
elseif ($page=='judul_tambah') {
	include 'Tampil/admin/judul_tambah.php';
}
elseif ($page=='judul_tambah_proses') {
	include 'Tampil/admin/judul_tambah_proses.php';
}
elseif ($page=='judul_hapus') {
	include 'Tampil/admin/judul_hapus.php';
}
elseif ($page=='judul_ubah') {
	include 'Tampil/admin/judul_ubah.php';
}
elseif ($page=='judul_ubah_proses') {
	include 'Tampil/admin/judul_ubah_proses.php';
}
elseif ($page=='subjudul_lihat') {
	include 'Tampil/admin/subjudul_lihat.php';
}
elseif ($page=='subjudul_tambah') {
	include 'Tampil/admin/subjudul_tambah.php';
}
elseif ($page=='subjudul_tambah_proses') {
	include 'Tampil/admin/subjudul_tambah_proses.php';
}
elseif ($page=='subjudul_hapus') {
	include 'Tampil/admin/subjudul_hapus.php';
}
elseif ($page=='subjudul_ubah') {
	include 'Tampil/admin/subjudul_ubah.php';
}
elseif ($page=='subjudul_ubah_proses') {
	include 'Tampil/admin/subjudul_ubah_proses.php';
}
elseif ($page=='pengajuan_riwayat') {
	include 'Tampil/pegawai/pengajuan_riwayat.php';
}
elseif ($page=='pengajuan_riwayat_diterima') {
	include 'Tampil/pegawai/pengajuan_riwayat_diterima.php';
}
elseif ($page=='pengajuan_riwayat_ditolak') {
	include 'Tampil/pegawai/pengajuan_riwayat_ditolak.php';
}
elseif ($page=='pelaporan_riwayat') {
	include 'Tampil/pegawai/pelaporan_riwayat.php';
}
elseif ($page=='pelaporan_riwayat_diterima') {
	include 'Tampil/pegawai/pelaporan_riwayat_diterima.php';
}
elseif ($page=='pelaporan_riwayat_ditolak') {
	include 'Tampil/pegawai/pelaporan_riwayat_ditolak.php';
}
elseif ($page=='laporankegiatan') {
	include 'Tampil/laporankegiatan.php';
}
elseif ($page=='update_kegiatanstatus') {
	include 'Tampil/bendahara/ganti_kegiatanstatus.php';
}
elseif ($page=='laporanpengajuan') {
	include 'Tampil/laporan/laporanpengajuan.php';
}
elseif ($page=='pengguna_cetak') {
	include 'Tampil/laporan/cetak/pengguna_cetak.php';
}
elseif ($page=='pengajuanditerimapumk') {
	include 'Tampil/bendahara/pengajuan_diterima_pumk.php';
}
elseif ($page=='prosespersetujuanpengajuan') {
	include 'Tampil/bendahara/proses_persetujuan_pengajuan.php';
}
elseif ($page=='pengajuandisetujui') {
	include 'Tampil/bendahara/pengajuan_disetujui.php';
}
elseif ($page=='kegiatan_lihat_pegawai') {
	include 'Tampil/pegawai/kegiatan_lihat_pegawai.php';
}
elseif ($page=='kegiatan_lihat_admin') {
	include 'Tampil/admin/kegiatan_lihat_admin.php';
}
elseif ($page=='kegiatan_ubah') {
	include 'Tampil/admin/kegiatan_ubah.php';
}
elseif ($page=='kegiatan_ubah_proses') {
	include 'Tampil/admin/kegiatan_ubah_proses.php';
}
elseif ($page=='kegiatan_hapus') {
	include 'Tampil/admin/kegiatan_hapus.php';
}
elseif ($page=='kegiatanpegawai_cetak') {
	include 'Tampil/laporan/cetak/kegiatanpegawai_cetak.php';
}
elseif ($page=='pengajuan_hapus') {
	include 'Tampil/pegawai/pengajuan_hapus.php';
}
elseif ($page=='pengajuan_ubah') {
	include 'Tampil/pegawai/pengajuan_ubah.php';
}
elseif ($page=='pengajuan_ubah_proses') {
	include 'Tampil/pegawai/pengajuan_ubah_proses.php';
}
elseif ($page=='pelaporan_hapus') {
	include 'Tampil/pegawai/pelaporan_hapus.php';
}
elseif ($page=='pelaporan_ubah') {
	include 'Tampil/pegawai/pelaporan_ubah.php';
}
elseif ($page=='pelaporan_ubah_proses') {
	include 'Tampil/pegawai/pelaporan_ubah_proses.php';
}
elseif ($page=='pengajuanpegawai_cetak') {
	include 'Tampil/laporan/cetak/pengajuanpegawai_cetak.php';
}
elseif ($page=='pelaporanpegawai_cetak') {
	include 'Tampil/laporan/cetak/pelaporanpegawai_cetak.php';
}
elseif ($page=='kegiatan_lihat_pumk') {
	include 'Tampil/pumk/kegiatan_lihat_pumk.php';
}
elseif ($page=='realisasi_lihat_pumk') {
	include 'Tampil/pumk/realisasi_lihat_pumk.php';
}
elseif ($page=='pengajuan_disetujui_pumk') {
	include 'Tampil/pumk/pengajuan_disetujui_pumk.php';
}
elseif ($page=='kegiatanpumk_cetak') {
	include 'Tampil/laporan/cetak/kegiatanpumk_cetak.php';
}
elseif ($page=='realisasipumk_cetak') {
	include 'Tampil/laporan/cetak/realisasipumk_cetak.php';
}
elseif ($page=='kegiatan_lihat_bendahara') {
	include 'Tampil/bendahara/kegiatan_lihat_bendahara.php';
}
elseif ($page=='realisasi_lihat_bendahara') {
	include 'Tampil/bendahara/realisasi_lihat_bendahara.php';
}
elseif ($page=='realisasibendahara_cetak') {
	include 'Tampil/laporan/cetak/realisasibendahara_cetak.php';
}
elseif ($page=='kegiatanbendaharacetak') {
	include 'Tampil/laporan/cetak/bendaharacetak.php';
}
elseif ($page=='ubah_pelaporan_status') {
	include 'Tampil/pumk/ubah_pelaporan_status.php';
}
elseif ($page=='ubah_pengajuan_status') {
	include 'Tampil/pumk/ubah_pengajuan_status.php';
}
elseif ($page=='kegiatan_sedang_terlaksana') {
	include 'Tampil/bendahara/kegiatan_sedang_terlaksana.php';
}
elseif ($page=='kegiatan_sedang_terlaksana_pumk') {
	include 'Tampil/pumk/kegiatan_sedang_terlaksana_pumk.php';
}
elseif ($page=='realisasi_ubah') {
	include 'Tampil/pumk/realisasi_ubah.php';
}
elseif ($page=='realisasi_ubah_proses') {
	include 'Tampil/pumk/realisasi_ubah_proses.php';
}
elseif ($page=='tatacara_admin') {
	include 'Tampil/admin/tatacara_admin.php';
}
elseif ($page=='tatacara_pegawai') {
	include 'Tampil/pegawai/tatacara_pegawai.php';
}
elseif ($page=='tatacarapengajuan_pegawai') {
	include 'Tampil/pegawai/tatacarapengajuan_pegawai.php';
}
elseif ($page=='tatacarapelaporan_pegawai') {
	include 'Tampil/pegawai/tatacarapelaporanpegawai.php';
}
elseif ($page=='tatacara_pumk') {
	include 'Tampil/pumk/tatacara_pumk.php';
}
elseif ($page=='tatacarapengajuan_pumk') {
	include 'Tampil/pumk/tatacarapengajuan_pumk.php';
}
elseif ($page=='tatacarapelaporan_pumk') {
	include 'Tampil/pumk/tatacarapelaporan_pumk.php';
}
elseif ($page=='ubah_pengajuan_ditolak') {
	include 'Tampil/pumk/ubah_pengajuan_ditolak.php';
}
elseif ($page=='ubah_pelaporan_ditolak') {
	include 'Tampil/pumk/ubah_pelaporan_ditolak.php';
}
elseif ($page=='update_pelaporan_ditolak') {
	include 'Tampil/pumk/update_pelaporan_ditolak.php';
}
elseif ($page=='ubah_pengajuan_ditolak_pegawai') {
	include 'Tampil/pegawai/ubah_pengajuan_ditolak_pegawai.php';
}
elseif ($page=='update_pengajuan_ditolak_pegawai') {
	include 'Tampil/pegawai/update_pengajuan_ditolak_pegawai.php';
}
elseif ($page=='ubah_pelaporan_ditolak_pegawai') {
	include 'Tampil/pegawai/ubah_pelaporan_ditolak_pegawai.php';
}
elseif ($page=='update_pelaporan_ditolak_pegawai') {
	include 'Tampil/pegawai/update_pelaporan_ditolak_pegawai.php';
}
elseif ($page=='tatacarabendahara') {
	include 'Tampil/bendahara/tatacarabendahara.php';
}
?>