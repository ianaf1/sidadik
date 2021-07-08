<?php defined('BASEPATH') or die("ip anda sudah tercatat oleh sistem kami") ?>
<?php
if ($pg == '') {
    include "home.php";
} elseif ($pg == 'siswa') {
    include "mod_siswa/siswa.php";
} elseif ($pg == 'updatekelas') {
    include "mod_siswa/updatekelas.php";
} elseif ($pg == 'berkas') {
    include "mod_berkas/upload.php";
} elseif ($pg == 'berkas_sidadik') {
    include "mod_siswa/siswa_berkas.php";
} elseif ($pg == 'ubahsiswa') {
    include "mod_siswa/edit_siswa.php";
} elseif ($pg == 'profil_lembaga') {
    include "mod_setting/profil_lembaga.php";
} elseif ($pg == 'detail') {
    include "mod_siswa/detail.php";
} elseif ($pg == 'kelas') {
    cek_login_admin();
    include "mod_kelas/kelas.php";
} elseif ($pg == 'jurusan') {
    cek_login_admin();
    include "mod_jurusan/jurusan.php";
} elseif ($pg == 'user-profile') {
    include "mod_user/user-profile.php";
} elseif ($pg == 'pengumuman') {
    include "mod_pengumuman/pengumuman.php";
} elseif ($pg == 'user') {
    cek_login_admin();
    include "mod_user/user.php";
} elseif ($pg == 'setting') {
    cek_login_admin();
    include "mod_setting/setting.php";
} elseif ($pg == 's_sidadik') {
    include "mod_setting/s_sidadik.php";
} elseif ($pg == 'kontak') {
    cek_login_admin();
    include "mod_kontak/kontak.php";
}
