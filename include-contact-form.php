                        <?php
                            if (isset($_REQUEST["email"])) {
                                if (filter_var($_REQUEST["email"], FILTER_VALIDATE_EMAIL)) {
                                    $name    = $_REQUEST["name"];
                                    $email   = $_REQUEST["email"];
                                    $message = $_REQUEST["message"];
                                    $to      = "jackandjillshauntedhill@gmail.com";
                                    $msg     = " Name: $name \r\n Email: $email \r\n Message: $message";
                                    mail($to, "JJHH Website Form Submission", $msg, "From: $email");
                                    print("<p class='confirm'>Your message has been sent.</p>");
								}
                                else {
                        ?>
                        <p class="alert">Invalid email address!</p>
                        <form method="post" action="">
                            <label for="name">Name</label><input type="text" name="name" value="<?php echo($_REQUEST["name"]); ?>">
                            <label for="email">Email</label><input type="text" name="email" value="<?php echo($_REQUEST["email"]); ?>">
                            <label for="message">Message</label><textarea name="message"><?php echo($_REQUEST["message"]); ?></textarea>
                            <input type="submit" value="send">
                        </form>	
                        <?php
                                }
                            }
                            else {
                        ?>
                        <form method="post" action="">
                          <label for="name">Name</label><input type="text" name="name">
                          <label for="email">Email</label><input type="text" name="email">
                          <label for="message">Message</label><textarea name="message"></textarea>
                          <input type="submit" value="Send">
                        </form>	
                        <?php
                            }
                        ?>