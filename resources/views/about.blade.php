@extends('layouts.app') @section('content')
<style>
    .with-background {
        background-image: url('{{ asset('assets/img/bg_section.webp') }}');
        background-size: cover;
        background-position: center;
        background-blend-mode: multiply;
    }
</style>
<section class="section-title content-title with-background">
	<h1><i class="icofont-building-alt"></i></h1>
	<h3>Tentang Kami</h3>
</section>

<main>
	<section class="content-page" style="padding: 60px;">
		<div class="container mt-5">
			<div class="card custom-card mb-4">
				<div class="card-body">
					<h2 class="card-title">Zarindah Group</h2>
					<p class="card-text">Didirikan oleh Ir. M. Sadiq pada tahun 2005. Sejak berdirinya, Zarindah Group telah tumbuh menjadi pengembang properti yang terpercaya dan terdiversifikasi di Indonesia. Komitmen kami terhadap keunggulan tercermin dalam setiap proyek yang kami jalankan, berupaya membangun rumah dan komunitas masyarakat yang mensejahterakan kehidupan para penghuni kami. Hingga saat ini, Zarindah Group telah memiliki sekitar 26 proyek di 12 Kota dan lebih dari 100 Cluster di Indonesia.</p>
				</div>
			</div>
			<div class="card custom-card mb-4">
				<div class="card-body">
					<h2 class="card-title">Visi</h2>
					<p class="card-text">Menjadi yang terdepan dalam industri properti dengan tujuan utama memberikan manfaat sebesar-besarnya untuk kesejahteraan masyarakat. Kami berupaya untuk selalu berada di garis depan inovasi dan kualitas dalam setiap proyek yang kami kerjakan.</p>
				</div>
			</div>
			<div class="card custom-card mb-4">
				<div class="card-body">
					<h2 class="card-title">Misi</h2>
					<p class="card-text">Menjadi pengembang perumahan terkemuka di Indonesia dengan menawarkan produk properti yang berkualitas dan mudah dimiliki oleh masyarakat luas. Kami fokus pada penyediaan hunian yang terjangkau dan berkualitas tinggi.</p>
				</div>
			</div>
			<div class="card custom-card mb-4">
				<div class="card-body">
					<h2 class="card-title">Strategi</h2>
					<ul class="list-group list-group-flush">
					<li class="list-group-item custom-card"><strong>SDM yang Unggul:</strong> Kami menekankan pentingnya memiliki sumber daya manusia yang unggul, pekerja keras, penuh motivasi, dan inovatif untuk mencapai tujuan perusahaan.</li>
					<li class="list-group-item custom-card"><strong>Sistem Kerja yang Terintegrasi:</strong> Kami mengimplementasikan sistem kerja yang terintegrasi dan terkontrol untuk memastikan semua proses berjalan dengan baik serta menjaga hubungan yang harmonis dengan semua pemangku kepentingan.</li>
					<li class="list-group-item custom-card"><strong>Penyediaan Sendiri Bahan Baku:</strong> Kami mengutamakan pengadaan bahan baku secara mandiri untuk memastikan kualitas dan efisiensi dalam pembangunan unit serta pengembangan bisnis lainnya.</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
</main>

@endsection
