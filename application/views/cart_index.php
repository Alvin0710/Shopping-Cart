<!DOCTYPE html>
<html>

<head>
	<title>Tokopaedi</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>">
	<style>
		section {
			width: 100%;
			height: 100vh;
			overflow-y: hidden;
			/* display: flex;
			align-items: center;
			justify-content: center; */
		}

		.scroller {
			/* width: 21.3vw;*/
			height: 100vh;
			overflow-x: hidden;
			overflow-y: scroll;
			scrollbar-color: rebeccapurple green;
			scrollbar-width: thin;
		}

		#card-shoes {
			margin-bottom: 25vh;
		}

		#source {
			margin-top: 20vh;
		}
	</style>
</head>

<body>
	<section>
		<div class="container"><br />
			<h1 class="text-success"><b>Tokopaedi</b></h1>
			<hr />
			<div class="row">
				<div class="col-md-9 col-xs-9">
					<h4><b>Product</b></h4>
					<div class="scroller">
						<div class="row" id="card-shoes">
							<?php foreach ($data as $row) : ?>
								<div class="col-md-5">
									<div class="thumbnail">
										<img class="img-fluid" src="<?php echo base_url() . 'assets/images/' . $row->product_image; ?>">
										<div class="caption">
											<h5><b><?php echo $row->product_name; ?></b></h5>
											<div class="row mb-5">
												<div class="col-md-7">
													<h5><?php echo 'Rp ' . number_format($row->product_price); ?></h5>
												</div>
												<div class="col-md-5">
													<input type="number" name="quantity" id="<?php echo $row->product_id; ?>" value="1" class="quantity form-control">
												</div>
											</div><br>
											<button class="add_cart btn btn-success btn-block" data-Productid="<?php echo $row->product_id; ?>" data-Productname="<?php echo $row->product_name; ?>" data-Productprice="<?php echo $row->product_price; ?>">Add To Cart</button>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>

				</div>
				<div class="col-md-3 col-xs-3">
					<h4><b>Shopping Cart</b></h4>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Product</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Subtotal</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody id="detail_cart">
						</tbody>
					</table>
					<a href="<?php echo base_url() ?>GeneratePdf" class="btn btn-success btn-block">Buy now!</a>
					<p id="source"><b>Source :</b> <br> https://review.bukalapak.com/mens-style/merk-sepatu-pria-murah-berkualitas-97846</p><br>

				</div>
			</div>
		</div>
	</section>

	<script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery-2.2.3.min.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.js' ?>"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.add_cart').click(function() {
				var product_id = $(this).data("productid");
				var product_name = $(this).data("productname");
				var product_price = $(this).data("productprice");
				var quantity = $('#' + product_id).val();
				$.ajax({
					url: "<?php echo base_url(); ?>index.php/cart/add_to_cart",
					method: "POST",
					data: {
						product_id: product_id,
						product_name: product_name,
						product_price: product_price,
						quantity: quantity
					},
					success: function(data) {
						$('#detail_cart').html(data);
					}
				});
			});

			// Load shopping cart
			$('#detail_cart').load("<?php echo base_url(); ?>index.php/cart/load_cart");

			//delete Item Cart
			$(document).on('click', '.delete_cart', function() {
				var row_id = $(this).attr("id"); //mengambil row_id dari artibut id
				$.ajax({
					url: "<?php echo base_url(); ?>cart/delete_cart",
					method: "POST",
					data: {
						row_id: row_id
					},
					success: function(data) {
						$('#detail_cart').html(data);
					}
				});
			});
		});
	</script>
</body>

</html>