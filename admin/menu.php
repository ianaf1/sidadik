 <?php
    $akhir  = new DateTime($setting['tgl_pengumuman']); //Waktu awal
    $awal = new DateTime(); // Waktu sekarang atau akhir
    $diff  = $awal->diff($akhir);

    ?>

 <ul class="sidebar-menu ">
     <li class="menu-header bg-warning"></li>

     <li class="dropdown ">
         <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-friends"></i> <span>Data Siswa</span></a>
         <ul class="dropdown-menu">
             <li><a class="nav-link" href="?pg=siswa">Siswa Aktif</a></li>
             <li><a class="nav-link" href="?pg=siswa10">Siswa Aktif 10</a></li>
             <li><a class="nav-link" href="?pg=siswa11">Siswa Kelas 11</a></li>
             <li><a class="nav-link" href="?pg=siswa12">Siswa Kelas 12</a></li>
             <!-- <li><a class="nav-link" href="?pg=updatekelas">Update Kelas</a></li> -->
             <li><a class="nav-link" href="?pg=berkas_sidadik">Dokumen Siswa</a></li>
         </ul>
     </li>
     <li class="dropdown ">
         <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-friends"></i> <span>Arsip Surat</span></a>
         <ul class="dropdown-menu">
            <li><a class="nav-link" href="?pg=buatsurat">Buat Surat</a></li>
            <li><a class="nav-link" href="?pg=suratmasuk">Surat Masuk</a></li>
            <li><a class="nav-link" href="?pg=suratkeluar">Surat Keluar</a></li>
         </ul>
     </li>

     <?php if ($user['level'] == 'admin') { ?>
         <li class="dropdown ">
             <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire fa-fw"></i> <span>Setting Data</span></a>
             <ul class="dropdown-menu">
                 <li><a class="nav-link" href="?pg=profil_lembaga">Lembaga</a></li>
                 <li><a class="nav-link" href="?pg=kelas">Data Kelas</a></li>
                 <li><a class="nav-link" href="?pg=jurusan">Jurusan</a></li>
                 <li><a class="nav-link" href="?pg=pengumuman">Pengumuman</a></li>
             </ul>
         </li>
     <?php } ?>
     <?php if ($user['level'] == 'admin') { ?>
         <li class="dropdown ">
             <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i> <span>Akun</span></a>
             <ul class="dropdown-menu">
                 <li><a class="nav-link" href="?pg=user">Akun Admin</a></li>
             </ul>
         </li>
     <?php } ?>


     <?php if ($akhir <= $awal) { ?>
     <?php } ?>

 </ul>