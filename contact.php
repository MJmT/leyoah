<?php

class Contact{

protected $db_connection = NULL;
    public $errors = array();
    /**
     * @var array Collection of success / neutral messages
     */
    public $messages = array();

	public function __construct() {	
		if(isset($_POST["send_message"])) {
			$this->sendMessage();

		}	
	}

	private function sendMessage() {
		if($this->contentCheck()) {
				if($this->setupDbConnection()==true) {
					 $user_name = $this->db_connection->real_escape_string(strip_tags($_POST['user_name'], ENT_QUOTES));
	                $user_email = $this->db_connection->real_escape_string(strip_tags($_POST['user_email'], ENT_QUOTES));
	                $user_content= $this->db_connection->real_escape_string(strip_tags($_POST['user_message'], ENT_QUOTES));
	                $web_url = $this->db_connection->real_escape_string(strip_tags($_POST['web_url'], ENT_QUOTES));
	                
	                	$sql = "INSERT into user_submission(user_name,user_email,web_url,user_content) 
	                			VALUES ('". $user_name . "', '" . $user_email . "', '" . $web_url . "', '" . $user_content . "');";
	                	$query=$this->db_connection->query($sql);
	                	if($query) {
	                		$this->messages[] = "Your message has been successfully submitted. We will get back to you ASAP!";
	                		                	
						}

						else {
							header('Location:localhost/error');
	       
							$this->errors[] = "Oops! Something went wrong. Can you retry that. Or you could get in touch with us at manjunath.mt0@gmail.com";
						}	
					
				}	

		}
	}	

	private function contentCheck() {
		if(empty($_POST['user_name'])) {
			$this->errors[] = "If we don't know your name, we wouldn't know what to call you!";
		}
		elseif(empty($_POST['user_email'])) {
			$this->errors[] = "We need your email to get back to you!";
		}
		else return true;
	}

	  protected function setupDbConnection() {

    // create a database connection, using the constants from config/db.php (which we loaded in index.php)
    $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);


            // change character set to utf8 and check it
        if (!$this->db_connection->set_charset("utf8")) {
            $this->errors[] = $this->db_connection->error;
           }

          // if no connection errors (= working database connection)
        if (!$this->db_connection->connect_errno)
        	return true;
        else
        	return false;
    }
}


