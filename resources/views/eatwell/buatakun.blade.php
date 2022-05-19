@extends('layout.reglog')
@section('title', '- Buat Akun')

@section('content')
    <h1>Buat akun</h1>
    <input type="text" name="namapanjang" placeholder="Nama Panjang" />
    <input type="text" name="email" placeholder="Alamat E-mail" />
    <input type="password" name="katasandi" placeholder="kata Sandi" />
    <input type="submit" name="signup_submit" value="Buat Akun" />
    <p>Kamu sudah punya akun? <span>Masuk</span></p>
@endsection
