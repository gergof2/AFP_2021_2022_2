
<div class="container-fluid">
    <div class="row">
        <div class="col-10">
            <div class="messageContainer" >
            	<div id='auto'>
            		 <?php require_once 'application/views/home/messagebox.php' ?>
            	</div>
            	   
            </div>
            <div>
                <form action="api/sendmessages" method="post">
                    <div >
                        <input class="widinput" type="text" name="message" required placeholder="Send message your friend :D">
                    </div>

                    <button class="button" type="submit" >Send message</button>
                </form>
            </div>
        </div>
        <div class="col-1">
            <?php foreach ($users as $key => $value): ?>
            	   <?php  print_r($value[0].'<br>'); ?>
            	   <!-- <?php  print_r($value[1]); echo "<br>"; ?> -->
            	 <!-- <?php var_dump($users) ?> -->
           	<?php endforeach ?>
        </div>
        <div class="col-1">
        	<?php foreach ($users as $key => $value): ?>
        	        <?php switch ($value[1]) {
            	   	case '1':
            	   		echo "online <br>";
            	   		break;
            	   	case '2':
            	   		echo "busy <br>";
            	   		break;
            	   	case '3':
            	   		echo "inactive <br>";
            	   		break;
            	   	case '4':
            	   		echo "offline <br>";
            	   		break;

            	   	default:
            	   		# code...
            	   		break;
            	   } ?>
            <?php endforeach ?>
        </div>
    </div>
</div>
