<?php
if(!defined('CORE_PATH')){
	exit;
}

if( !$this->permission('loggedin') )
{
	header('Location: ' . $this->__get('base_url') );
	exit;
}
?>
<div class="main">
    <div class="container">
        <div class="row">
    		<div class="col-lg-12">
                <h4>Your are logged in</h4>
                <p>Welcome <?php echo $_SESSION['data']['username']; ?></p>
                <p>This is what the seession contain when a user is logged in:</p>
                <pre><?php print_r($_SESSION); ?></pre>
                <p>the "data" array is where the user id, username and md5 hash of the users email (used for Gravatar) is stored.</p>
            </div>
        </div>
    </div>
</div>