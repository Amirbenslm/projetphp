<?php 
include 'header.php';
require 'phpmailer/mail.php';
	?>
		<div style="margin-top:30px ; margin-bottom: 40px;margin-left:100px;">
			<div class="container">
				<div class="panel panel-default" style="margin:0 auto;width:500px">
					<div class="panel-heading">
						<h2 class="panel-title">La Casa Contact</h2>
					</div>
					<div class="panel-body">
						<form name="contactform" method="post" action="contact.php" class="form-horizontal" role="form">
							<div class="form-group">
								<label for="inputName" class="col-lg-2 control-label">Name</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="inputName" name="inputName" placeholder="Your Name">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-2 control-label">Email</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="Your Email">
								</div>
							</div>
							<div class="form-group">
								<label for="inputSubject" class="col-lg-2 control-label">Subject</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="inputSubject" name="inputSubject" placeholder="Subject Message">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword1" class="col-lg-2 control-label">Message</label>
								<div class="col-lg-10">
									<textarea class="form-control" rows="4" id="inputMessage" name="inputMessage" placeholder="Your message..."></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button type="submit" class="btn btn-default">
										Send Message
									</button>
								</div>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	<?php 
//include 'footer.php';
if(isset($_POST['inputEmail']))
{
	if(!empty($_POST['inputEmail']))
	{
		$mail = new Mail();
            $mail->setFrom("amirbensalem30@gmail.com");
            $mail->addAddress($_POST['inputEmail']);
            $mail->subject($_POST['inputSubject']);
            $mail->body($_POST['inputMessage']);
             $mail->smtpConnect([
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                ]
            ]);
           if( $mail->send())	
     	{?>
     				<div class="alert alert-success alert-dismissable">
  <strong>Success!</strong> Indicates a successful or positive action.
</div>
<?php   }    
	}
}
 

	?>
