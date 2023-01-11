<?php
						// check if the form has been submitted
						if (isset($_POST['submit'])) {
					
							// retrieve the form data
							$name = $_POST['name'];
							$email = $_POST['email'];
                            $subject = $_POST['subject'];
							$message = $_POST['message'];
							
					
							// validate the data
							if (empty($name) || empty($email) || empty($message)) {
								echo "Please fill in all the fields";
							} 
							else {
								$name = $_POST['name'];
								$email= $_POST['email'];
                                $subject= $_POST['subject'];
								$message= $_POST['message'];
								$to = "amjadkhanniazi010@gmail.com";
								
								$txt ="Subject: ".$subject."\r\nName: ". $name . "\r\n  Email: " . $email . "\r\n Message: " . $message;
								$headers = "From: noreply@amjadniazi.com" . "\r\n" .
								"CC: somebodyelse@example.com";
								if($email!=NULL){
									mail($to,$subject,$txt,$headers);
								}
					
								echo "Thanks for your query, we'll get back to you soon!";
							}
						}
					?>