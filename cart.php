<div class="container">
	<h2 class="page-header"><span class="glyphicon glyphicon-shopping-cart"></span> Isi Keranjang</h2>
</div>
<div class="container-fluid">
	<div class="container" style="padding:50px; padding-left:0;">
		<div class="row">
			<div class="col-md-3">
				<h1 class="superJumbo"><span class="glyphicon glyphicon-usd"></span></h1><p class="well">*Cek ulang barang belanjaan anda.</p>
			</div>
			
			<div class="col-md-9 bg-cart" style="margin-bottom:20px;">
				<table class="table table-responsive table-striped">
					<thead>
						<th>No.</th>
						<th>Barang</th>
						<th>Jumlah</th>
						<th>Total</th>
						<th>Opsi</th>
					</thead>
					<tbody>
						<?php for($j=0; $j<8; $j++){ ?>
						<tr>
							<td><?php echo $j+1; ?></td>
							<td>Clothing Ipsum</td>
							<td>3 x Rp. 25.000,-</td>
							<td>Rp 75.000</td>
							<td><a class="btn btn-xs btn-default" href="#" data-toggle="tooltip" title="Hapus"><span class="glyphicon glyphicon-remove"></span></a></td>
						</tr>
						<?php }; ?>
						<tr>
							<td align="right" class="bg-danger" colspan="3"><strong>Total Bayar ---</strong></td>
							<td class="bg-danger" colspan="2"><strong>Rp 600.000,-</strong></td>
						</tr>
					</tbody>
				</table>
			</div>
			
			<div class="col-md-12">
				<div class="btn-group pull-right">
					<a class="btn btn-lg btn-default" data-toggle="tooltip" title="Kembali belanja"><span class="glyphicon glyphicon-chevron-left"></span></a>
					<a class="btn btn-lg btn-danger">Bayar <span class="glyphicon glyphicon-chevron-right"></span></a>  
				</div>
			</div>
		</div><!--Row-->
	</div> <!--Container-->
</div><!--Container Fluid-->