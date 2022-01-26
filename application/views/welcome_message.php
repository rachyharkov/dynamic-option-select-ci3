<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>

<div id="container">
	<h1>Test</h1>

	<div id="body">
		<table>
			<tr>
				<td>Kode Penilaian</td>
				<td>Deskripsi</td>
				<td>Pilihan lagi</td>
			</tr>
			<tr>
				<td>
					<select class="combobox_level_penilaian">
						<?php
							foreach ($level_penilaian_list as $key => $value) {
								?>
								<option value="<?php echo $value->kode_penilaian ?>"><?php echo $value->kode_penilaian ?></option>
								<?php
							}
						?>
					</select>
				</td>
				<td>
					<p class="penjelasannya"></p>
				</td>
				<td>
					<select>
						<option>A</option>
						<option>C</option>
					</select>
				</td>
			</tr>
		</table>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>
<script>
	$(document).ready(function(){
		
		$('.combobox_level_penilaian').on('change', function() {

			id_levelnya = $(this).val()

			$.ajax({
				type: 'GET',
				url: "<?php echo base_url().'index.php/welcome/get_detail_penilaian/' ?>" + id_levelnya,
				success: function(data) {
					$('.penjelasannya').html(data)
				},
				error: function(e){
					alert('error njir')
				}
			})
		})

	})
</script>
</body>
</html>