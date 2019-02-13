
/**
 * Created by IntelliJ IDEA.
 * User: rsg
 * Date: 2019-02-13
 * Time: 02:11
 */

<?php
$name = $_GET['name'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$state = $_GET['state'];
echo "<ol>
        <li>Name: ".$name."</li>
        <li>Email: ".$email."</li>
        <li>Phone: ".$phone."</li>
        <li>State: ".$state."</li>
        
    </ol>";