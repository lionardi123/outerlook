@section('title')
<title>Book</title>
@endsection

@extends('layouts.app')

@section('content')
<style>
	table{
		margin:auto;
	}
</style>
<div class="container">
	<div class="card-panel">
		{{$user_id }}
		<script>
			function kali(id,harga) {
				var x = document.getElementById("jumlah"+id);
				var y = document.getElementById("subtotal"+id);

				var a = x.value*harga;
				document.getElementById("subtotal"+id).value=a;
			}
		</script>
		<table class="responsive-table highlight">
			<?php for($i=0;$i<2;$i++){?>
			<thead>
				<tr>
					<th data-field="makeuptype">Make up Type <?php echo $i; ?></th>
				</tr>
				<tr>
					<th data-field="makeuptype">Service Name</th>
					<th data-field="makeuptype">Price</th>
					<th data-field="makeuptype">Qty</th>
					<th data-field="makeuptype">Subtotal</th>
				</tr>
			</thead>

			<tbody style="max-height: 10px !important;">
				<?php for($j=0;$j<10;$j++){?>
				<tr>
					<td width="350px">Make up Service <?php echo $i;echo $j; ?></td>
					<td width="150px">IDR 200000</td>
					<td width="50px" style="padding-bottom: 0px; padding-top: 0px;">
						<input type="number" name="jumlah<?php echo $i."s".$j; ?>" id="jumlah<?php echo $i."s".$j; ?>" onchange="kali('<?php echo $i."s".$j;?>',200000)" >
					</td>
					<td width="250px" style="padding-bottom: 0px; padding-top: 0px;">
						<input type="text" name="subtotal<?php echo $i."s".$j; ?>" id="subtotal<?php echo $i."s".$j; ?>">
					</td>
				</tr>
				<?php } ?>
			</tbody>
			<?php } ?>
		</table>
	</div>
</div>
@endsection
