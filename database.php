<?php
include_once ("config.php");

function user_insert($name,$email,$blood_group,$password,$birth_day,$location) {

    $result = mysql_query("INSERT INTO user(name,email,blood_group,password,birth_day,location) VALUES('$name','$email','$blood_group','$password','$birth_day','$location')");
    return true;
}

function post_insert($post,$post_date,$post_time) {

    $result = mysql_query("INSERT INTO post(post,post_date,post_time) VALUES('$post','$post_date','$post_time')");
    return true;
}

function replay_insert($replay,$replay_date,$creplay_time) {

    $result = mysql_query("INSERT INTO replay(replay,replay_date,replay_time) VALUES('$replay','$replay_date','$replay_time')");
    return true;
}

function comunity_insert($comunity_name) {

    $result = mysql_query("INSERT INTO community(comunity_name) VALUES('$comunity_name')");
    return true;
}

function comment_insert($comment,$comment_date,$comment_time) {

    $result = mysql_query("INSERT INTO comment(comment,comment_date,comment_time) VALUES('$comment','$comment_date','$comment_time')");
    return true;
}

function comment_replay_insert($comment_id,$replay_id) {

    $result = mysql_query("INSERT INTO comment_replay(comment_id,replay_id) VALUES('$comment_id','$replay_id')");
    return true;
}

function community_user_insert($com_id,$user_id,$comunity_role) {

    $result = mysql_query("INSERT INTO community_user(com_id,user_id,comunity_role) VALUES('$com_id','$user_id','$comunity_role')");
    return true;
}

function post_comment_insert($user_id,$comment_id) {

    $result = mysql_query("INSERT INTO post_comment(user_id,comment_id) VALUES('$user_id','$comment_id')");
    return true;
}

function user_replay_insert($user_id,$replay_id) {

    $result = mysql_query("INSERT INTO user_replay(user_id,replay_id) VALUES('$user_id','$replay_id')");
    return true;
}

function user_post_insert($user_id,$post_id) {

    $result = mysql_query("INSERT INTO user_post(user_id,post_id) VALUES('$user_id','$post_id')");
    return true;
}

function user_comment_insert($user_id,$comment_id) {

    $result = mysql_query("INSERT INTO user_comment(user_id,comment_id) VALUES('$user_id','$comment_id')");
    return true;
}


function community_user_insert2($com_id,$user_id) {

    $result = mysql_query("INSERT INTO user(com_id,user_id) VALUES('$com_id','$user_id')");
    return true;
}

function com_request_insert($user_id) {

    $result = mysql_query("INSERT INTO com_request(user_id) VALUES('$user_id')");
    return true;
}


function update_name($name,$id) {
    $result = mysql_query("UPDATE user SET name='$name' WHERE user_id=$id");
    return true;
}

function update_email($email,$id) {
    $result = mysql_query("UPDATE user SET email='$email' WHERE user_id=$id");
    return true;
}

function update_password($password,$id) {
    $result = mysql_query("UPDATE user SET password='$password' WHERE user_id=$id");
    return true;
}

function update_location($location,$id) {
    $result = mysql_query("UPDATE user SET location='$location' WHERE user_id=$id");
    return true;
}

function update_comment($comment,$id) {
    $result = mysql_query("UPDATE comment SET comment='$comment' WHERE user_id=$id");
    return true;
}

function update_post($post,$id) {
    $result = mysql_query("UPDATE post SET post='$post' WHERE user_id=$id");
    return true;
}
function update_replay($replay,$id) {
    $result = mysql_query("UPDATE replay SET replay='$replay' WHERE user_id=$id");
    return true;
}

function delete_user($id){
    
$result = mysql_query("DELETE FROM user WHERE user_id=$id");
$result = mysql_query("DELETE FROM user_post WHERE user_id=$id");
$result = mysql_query("DELETE FROM user_comment WHERE user_id=$id");
$result = mysql_query("DELETE FROM user_replay WHERE user_id=$id");
return true;
}

function delete_comment($id){
    
$result = mysql_query("DELETE FROM comment WHERE comment_id=$id");
$result = mysql_query("DELETE FROM post_comment WHERE user_id=$id");
$result = mysql_query("DELETE FROM user_comment WHERE user_id=$id");
return true;
}

function delete_post($id){
    
$result = mysql_query("DELETE FROM post WHERE post_id=$id");
$result = mysql_query("DELETE FROM post_comment WHERE post_id=$id");


return true;
}

function delete_replay($id){
    
$result = mysql_query("DELETE FROM replay WHERE replay_id=$id");
$result = mysql_query("DELETE FROM comment_replay WHERE replay_id=$id");
return true;
}


function user_details($id1) {
//$a=$_SESSION["user_id"];
$a=1;
    $result = mysql_query('SELECT * FROM user WHERE user_id=$id1');
    return $result;

}

function show_user_details() {
    $result = mysql_query("SELECT id,first_name,last_name,user_name,email FROM user ORDER BY id DESC");
    return $result;
}


function show_user_details2() {
    $result = mysql_query("SELECT id,first_name,last_name,user_name,email FROM user ORDER BY id DESC");
    return $result;
}






function logIn($email, $pass) {
     $result = mysql_query("SELECT email,password FROM user");
     while($res=mysql_fetch_array($result)){
         if($email===$res["email"]&&$pass===$res["password"]){
		     $role=$res["role"];
			 $user_id=$res["user_id"];
			 $_SESSION["role"]=$role;
			 $_SESSION["email"]=$email;
			
			 
             return true;
             
         }
     }
}
function logInForUserId($email,$pass) {
     $result = mysql_query("SELECT * FROM user WHERE email=$email AND password=$pass");
     while($res=mysql_fetch_array($result)){
         if($email===$res["email"]&&$pass===$res["password"]){		 
            $ab=res["user_id"];
			return $ab;
             
         }
     }
}

function delete($id){
    
$result = mysql_query("DELETE FROM user WHERE id=$id");
return true;
}


?>