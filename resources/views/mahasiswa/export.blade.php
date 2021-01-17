<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DATA Mahasiswa</title>

  <style>
    .header{
      width: 100%;
      color: #212121;
    }

    small{
      /*font-weight: 100;*/
      font-size: 12px;
    }

    .judul{
      display: block;
      margin: 0;
      padding: 0;
    }

    .bg-dark{
      background-color: #343a40;
      color: #fff;
      text-align: center;
      border-radius: 5px;
      padding: 0;
      text-transform: uppercase;
    }

    table {
        border-collapse: collapse;
    }

    .table {
      width: 100%;
      margin-bottom: 1rem;
      color: #212529;
      border: none;
    }

    .table th,
    .table td {
      padding: 5px;
      vertical-align: top;
      border-top: 1px solid #3d3e48;
    }

    .table thead th {
      vertical-align: bottom;
      border-bottom: 2px solid #3d3e48;
    }

    .table tbody + tbody {
      border-top: 2px solid #3d3e48;
    }

    .table-bordered {
      border: 1px solid #3d3e48;
    }

    .table-bordered th,
    .table-bordered td {
      border: 1px solid #3d3e48;
    }

    .table-bordered thead th,
    .table-bordered thead td {
      border-bottom-width: 2px;
    }

    .table-responsive {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .table-responsive > .table-bordered {
      border: 0;
    }
    .table-striped tbody tr:nth-of-type(odd) {
      background-color: rgba(0, 0, 0, 0.05);
    }

    .mt{
      margin-top: 15px;
    }

    .col-md {
        -ms-flex: 0 0 45.666667%;
        flex: 0 0 45.666667%;
        max-width: 45.666667%;
    }
  </style>  
</head>
<body>
 
  <table style=" width: 100%;margin-top: 20px;margin-bottom: 20px" border="0">

    <tr>
      <td width="100" align="center"><img src="{{ public_path('/adminlte/dist/img/stmik_sumedang.png') }}" width="120" alt=""></td>
      <td align="center">
      <h4 class="judul">SEKOLAH TINGGI MANAJEMEN INFORMATIKA DAN KOMPUTER</h4>
      <h5 class="judul">(STMIK) SUMEDANG</h5>
      <h6 class="judul">TERAKREDITASI</h6>
      <small class="judul">Program Studi : Manajemen Informatika (D3) : SK BAN PT Nomor :0044/SK/BAN-PT/Akred/Dipl-III/I/2017</small>
      <small class="judul">Program Studi : Teknik Informatika (S1) : SK BAN PT Nomor :0155/SK/BAN-PT/Akred/S/I/2017</small>
      <small class="judul">Program Studi : Sistem Informasi (S1) : SK BAN PT Nomor :0342/SK/BAN-PT/Akred/S/I/2017</small>
      <small class="judul">Jalan Angkrek Situ No.19 Telp./Fax. 0261-207395 Sumedang 45323</small>
      <small style="margin: 0 50px 0 0;padding: 0;">Website : www.stmik-sumedang.ac.id</small>
      <small style="margin: 0 0 0 50px;padding: 0;">Email : info@stmik-sumedang.ac.id</small>
      </td>
    </tr>
  </table>

  <hr style="margin: 0 0 2px 0;padding: 0;border: 1.5px solid #000">
  <hr style="margin: 0 0 0 0;padding: 0;">

  <h3 align="center" style="text-transform: uppercase;">Data Mahasiswa</h3>

  <table class="table" style="margin-top: 20px;width: 50%">

  <tr>
    <th>NPM</th>
        <th>Nama</th>
        <th>Pilihan Prodi</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Alamat Lengkap</th>
        <th>Kecamatan</th>
        <th>Kabupaten</th>
        <th>KTP</th>
        <th>KK</th>
        <th>No.HP</th>
    </tr>
   
    @foreach($data_mahasiswa as $mahasiswa)
    <tr>
        <td>{{$mahasiswa->NPM}}</td>
        <td>{{$mahasiswa->Nama}}</td>
        <td>{{$mahasiswa->Pilihan_Prodi}}</td>
        <td>{{$mahasiswa->Tempat_Lahir}}</td>
        <td>{{$mahasiswa->Tanggal_lahir}}</td>
        <td>{{$mahasiswa->Jenis_kelamin}}</td>
        <td>{{$mahasiswa->Alamat_lengkap}}</td>
        <td>{{$mahasiswa->Kecamatan}}</td>
        <td>{{$mahasiswa->Kabupaten}}</td>
        <td>{{$mahasiswa->KTP}}</td>
        <td>{{$mahasiswa->KK}}</td>
        <td>{{$mahasiswa->No_HP}}</td>
        </tr>  
      @endforeach

    </table>
</body> 
</html>