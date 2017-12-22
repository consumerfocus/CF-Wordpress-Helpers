<?php
/*
Template Name: NMI


1. Create 2 New Pages in Wordpress (ex, Pay, Thank You )
2. Create a new quick click donation button in NMI
3. Update the Form Action to the correct link that NMI gives you (line 23)
4. Update what is needed from lines 41-48, mainly, key_id, url_finish, hash, order_description from what nmi gave


*/
?>


<?php get_header(); ?>	
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
	<div class="container  maincontent">
        <div class="row">
            <div class="col-sm-12">
                <h1><?php the_title(); ?></h1>
                <form action="https://secure.metromerchantgateway.com/cart/cart.php" method="POST">

                  <div class="form-group">
                    <label for="Amount">Amount:</label>
                    <input type="text" class="form-control" id="amount" name="amount">
                  </div>

                  <div class="form-group">
                    <label for="extra">Reason for charge:</label>
                    <input type="text" class="form-control" id="extra" name="merchant_defined_field_1">
                  </div>

                  <div class="form-group">
                    <label for="extra">Send receipt email to:</label>
                    <p class="small">The customer email on the next form and emails set up within Metro Merchant will automatically get receipts even if this is not filled out.</p>
                    <input type="text" class="form-control" name="merchant_receipt_email" />
                  </div>

                    <input type="hidden" name="key_id" value=" " />
                    <input type="hidden" name="action" value="process_variable" />
                    <input type="hidden" name="order_description" value=" " />
                    <input type="hidden" name="language" value="en" />
                    <input type="hidden" name="url_finish" value="THANK YOU PAGE URL" />
                    <input type="hidden" name="customer_receipt" value="true" />
                    <input type="hidden" name="hash" value="action|order_description|ba3fb2399578cfc817dd3bc96cc03d24" />
                    <input type="submit" class="btn btn-default" name="submit" value="Proceed" />
                </form>

            </div>
        </div>
	</div>
<?php endwhile; ?>
	<?php else : ?>
	<div class="container  maincontent">
		<div class="row">
		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>
	</div>
<?php endif; ?>				
<?php get_footer(); ?>