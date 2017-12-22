<?php
/*
Template Name: AUTHORIZE.NET


1. Create 3 New Pages in Wordpress (ex, Pay Bill, Confirm, thank you )
2. Put the confirmation page id (from wordpress) on line 29
3. Update lines 49,50 with the correct Login Id and Transaction Key From Authorize.ent
4. Write a description on line 54
5. Enter thank you page url where it says RETURN URL on line 104
6. Set the Pay Bill and Confirmation pages to use this template



*/
?>


<?php get_header(); ?>	
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
	<div class="container  maincontent">
        <div class="row">
            <div class="col-sm-12">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>

        <?php if (is_page('PAGE-ID') ) { ?>
        <div class="row">
            <div class="col-sm-12">
                <?php the_content('Read the rest of this entry &raquo;'); ?>
                <form action="<?php bloginfo('url'); ?>/index.php?page_id=4304" method="post">
                	<div class="form-group">
                		<label for="extraField">Extra Field:</label>
                		<input type="text" class="form-control" id="extraField" name="extraField">
                	</div>
                	<div class="form-group">
                		<label for="payment">Amount:</label>
                		<input type="text" class="form-control" id="payment" name="payment">
                	</div>
                	<input type="submit" class="btn btn-default" value="Continue" />
                </form>  
            </div>
        </div>
        <?php } else { ?>
                
            <?php  
            $loginID        = " "; //This must be generated in the customers Authorize.net Account
            $transactionKey = " ";  //This must be generated in the customers Authorize.net account
            $amount         = $_POST["payment"];
            $extraField          = $_POST["extraField"]; // Extra fields
            
            $description    = " ";
            $label          = "Continue to Payment"; // The is the label on the 'submit' button
            $testMode       = "false";


            $url    = "https://secure.authorize.net/gateway/transact.dll"; 
            // $url      = "https://test.authorize.net/gateway/transact.dll";

            if (array_key_exists("amount",$_REQUEST))
            { $amount = $_REQUEST["amount"]; }
            if (array_key_exists("amount",$_REQUEST))
                { $description = $_REQUEST["description"]; }

            // an invoice is generated using the date and time
            $invoice    = date(YmdHis);
            // a sequence number is randomly generated
            $sequence   = rand(1, 1000);
            // a timestamp is generated
            $timeStamp  = time();

            if( phpversion() >= '5.1.2' )
            { $fingerprint = hash_hmac("md5", $loginID . "^" . $sequence . "^" . $timeStamp . "^" . $amount . "^", $transactionKey); }
            else 
                { $fingerprint = bin2hex(mhash(MHASH_MD5, $loginID . "^" . $sequence . "^" . $timeStamp . "^" . $amount . "^", $transactionKey)); }


            ?>

            <h3>Step 2</h3>
                    <p>Please confirm the information below before continuing to the payment page:</p>
                    <!-- Print the Amount and Description to the screen. -->
                    <p><span class="bold">Payment Amount:</span> $<?php echo $amount; ?></p>
                    <p><span class="bold">Payment Type:</span> <?php echo $extraField; ?></p>

                    <!-- Create the HTML form containing necessary SIM post values -->
                    <form method='post' name="payment" action='<?php echo $url; ?>' >
                        <!--  Additional fields can be added here as outlined in the SIM integration
                        guide at: http://developer.authorize.net -->
        
                        <input type='hidden' name='x_login' value='<?php echo $loginID; ?>' />
                        <!-- <input type='hidden' name='x_cust_id' value='<?php echo $accountNum; ?>' /> -->
                        <input type='hidden' name='x_amount' value='<?php echo $amount; ?>' />
                        <input type='hidden' name='x_description' value='<?php echo $description; ?>' />
                        <input type='hidden' name='x_invoice_num' value='<?php echo $invoice; ?>' />
                        <input type='hidden' name='x_fp_sequence' value='<?php echo $sequence; ?>' />
                        <input type='hidden' name='x_fp_timestamp' value='<?php echo $timeStamp; ?>' />
                        <input type='hidden' name='x_fp_hash' value='<?php echo $fingerprint; ?>' />
                        <input type='hidden' name='x_test_request' value='<?php echo $testMode; ?>' />
                        <input type='hidden' name='x_receipt_link_method' value='LINK' />
                        <input type='hidden' name='x_receipt_link_text' value="Return to our website." />
                        <input type='hidden' name='x_receipt_link_url' value='THANK YOU PAGE URL' />
                        <input type='hidden' name='x_show_form' value='PAYMENT_FORM' />
		                <!--This adds a logo to the form, it must be hosted on https! -->
                        <input type="hidden" name="x_logo_URL" value="LOGO URL">             
                        <!-- extra field -->
                        <input type='hidden' name='Payment Type' value='<?php echo $extraField; ?>' />

                    <input type='submit' class="btn btn-default" value='<?php echo $label; ?>' />
                    </form>



        <?php } ?>

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