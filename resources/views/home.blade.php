@extends('mainLayout.main')

@section('container')
		<!--sofa-collection start -->
		<section id="sofa-collection">
			<div class="owl-carousel owl-theme" id="collection-carousel">
				<div class="sofa-collection collectionbg1">
                    <p>
                        <a href="https://ibb.co/87ymbtN"><img src="https://i.ibb.co/d5Nftxj/pink.jpg" alt="pink" width= "1100"></a>
                    </p>
					<div class="container">
						<div class="sofa-collection-txt">
						</div>
					</div>	
				</div><!--/.sofa-collection-->
				<div class="sofa-collection collectionbg2">
					<div class="container">
						<div class="sofa-collection-txt">
							<h5>Pinkflash adalah brand makeup asal China yang super affordable.</h5>
							<p>
                                Diluncurkan di tengah pandemi, tepatnya pada September 2020, Pinkflash berhasil mendapatkan izin BPOM (Badan Pengawas Obat dan Makanan) dan mencatatkan pertumbuhan pesat di seluruh wilayah Asia Tenggara.							
                            </p>
						</div>
					</div>
				</div><!--/.sofa-collection-->
			</div><!--/.collection-carousel-->

		</section><!--/.sofa-collection-->
		<!--sofa-collection end -->
    <div class="row">
        @foreach ($allBarang as $no => $barang)
        <div class="col-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('storage/'. $barang->photo) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $barang->namaBarang }}</h5>
                    <p class="card-text">Rp. {{ $barang->harga }}</p>
                    <p class="card-text">tersisa : {{ $barang->stok }}</p>
                    <a href="{{ route('reviewbrg', $barang->id) }}" class="btn btn-danger">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection