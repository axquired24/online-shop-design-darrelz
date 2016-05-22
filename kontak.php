<div class="container">
	<h2 class="page-header">Kontak Darrelz Shop</h2>
</div>

<div class="container">
	<div class="row bg-white">
		<div class="col-md-7">
			<h3>Form Pesan</h3><hr>
				<form role="form">
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" id="nama" placeholder="Nama kamu">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" placeholder="Email kamu">
					</div>
					<div class="form-group">
						<label for="pesan">Tinggalkan Pesan</label>
						<textarea class="form-control" id="nama" placeholder="To Darrelz Shop: ..."></textarea>
					</div>
						<button type="submit" class="btn btn-danger">Kirim</button>
				</form>				
			</div>
			
			<div class="col-md-5">
				<h3>Atau </h3><hr>			
				<address style="font-size:1.1em;">
					<strong>Darrelz Shop Office</strong><br>
					Jln Intan no. 24 - Sebelah Grandmall Lampung<br>
					Bandar Lampung<br>
					<em>08941222323</em> (Call Only)<br>
					<a href="#">kotak@darrelzshop.com</a>
				</address>
			</div>
			
			<div class="col-md-12">
				<h3>Maps</h3><hr>			
				<div id="map-canvas"></div>
			</div>
		</div> <!--Row-->
</div> <!--Container-->
<script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(-5.428579,105.267476),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
</script>
