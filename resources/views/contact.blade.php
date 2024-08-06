@extends('layouts.app') @section('content')
<section class="section-title content-title">
	<h1><i class="icofont-building-alt"></i></h1>
	<h3>Hubungi Kami</h3>
</section>

<main>
	<section class="content-page">
    <form style="padding: 50px;" method="post" role="form" class="php-email-form">
      <div class="form-group">
        <input type="text" name="name" class="form-control" id="name" placeholder="Nama" data-rule="minlen:4" data-msg="Masukkan nama kamu" />
        <div class="validate"></div>
      </div>
      <div class="form-group">
        <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Masukkan email kamu" />
        <div class="validate"></div>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="phone" id="phone" placeholder="Nomor WA" data-rule="phone" data-msg="Masukkan nomor wa kamu" />
        <div class="validate"></div>
      </div>
      <div class="form-group">
        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Sampaikan pesan anda" placeholder="Message"></textarea>
        <div class="validate"></div>
      </div>
      <div class="text-center"><button class="btn btn-info" type="submit">Send Request</button></div>
    </form>
	</section>
</main>

@endsection
