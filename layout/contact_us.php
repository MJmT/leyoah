<!-- Three -->
<?php  
if (isset($contact)) {
    if ($contact->errors) {
        foreach ($contact->errors as $error) {
          echo "<div class=\"alert alert-danger\">" .$error . "</div>";
        }
    }
    if($contact->messages) {
        foreach ($contact->messages as $message) {
            echo "<div class=\"alert alert-success\">a" .$message . "</div>";
        }
    }
}
?>

					<section>
						<h4>Form</h4>
						<form method="post" action="">
							<div class="row uniform">
								<div class="6u 12u$(xsmall)">
									<input type="text" name="user_name" id="demo-name" value="" placeholder="Name" />
								</div>
								<div class="6u$ 12u$(xsmall)">
									<input type="email" name="user_email" id="demo-email" value="" placeholder="Email" />
								</div>
								<div class="6u$ 12u$(xsmall)">
									<input type="text" name="web_url" id="website_url" value="" placeholder="Website" />
								</div>
								
								<div class="12u$">
									<textarea name="user_message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
								</div>
								<div class="12u$">
									<ul class="actions">
										<li><input type="submit" value="Send Message"  name="send_message" class="special" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</div>
							</div>
						</form>
					</section>