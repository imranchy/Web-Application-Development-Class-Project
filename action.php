<?php

	include 'connect.php';
	session_start();

	connect_db();
	switch ($_POST['action']) {
		case 'Signup':
		$first_name =$_POST['first_name'];
		$last_name= $_POST ['last_name'];
		$username =$_POST['username'];
		$phone= $_POST['phone'];
		$address=$_POST['address'];
		$e_mail=$_POST['Email'];
		$password=$_POST['password'];
		$confirm_password=$_POST['confirm_password'];

		if($password == $confirm_password){
		mysql_query("insert into user (id,f_name,l_name,username,phone,address,e_mail,password) values (null, '$first_name','$last_name','$username','$phone','$address','$e_mail','$password')");
		header("Location: index.php");
		echo '<script language="javascript">alert("Registration Successful")</script>';
		}else{
			header("Location: signup.php");
			echo '<script language="javascript">';
			echo 'alert ("Password did not match")';
			echo '</script>';
		}
		break;
		
		case 'Login':
		
			$username = $_POST['username'];
			$password = $_POST['password'];

			$sql = "SELECT * from user where username = '$username' and password = '$password' ";
			$result = mysql_query($sql) or die(mysql_error());
			$row = mysql_fetch_array($result);

			
			if($row['username'] == $username && $row['password'] == $password){
				$_SESSION["id"] = $row['id'];
				$_SESSION["username"] = $row['username'];
				$_SESSION["f_name"] = $row['f_name'];

				header("Location: index.php");
				echo '<script language="javascript">';
				echo 'alert("Login Successful")';
				echo '</script>';

			}

			if(isset($_SESSION['id'])===true){
				header("Location: index.php");
			}
			break;

		case 'Order':
		$name =$_POST['name'];
		$address= $_POST ['address'];
		$phone=$_POST['phone'];
		$pay_type= $_POST['pay_type'];
		$tran_id=$_POST['tran_id'];
		$price=$_POST['price'];

		
		mysql_query("insert into order_info (o_id, client_name, client_address, phone, type, t_id, price) values (null, '$name', '$address', '$phone', '$pay_type', '$tran_id', '$price')");
		header("Location: index.php");
		echo '<script language="javascript">';
		echo 'alert("Order placed successfully")';
		echo '</script>';
		break;
		
		default:
			# code...
			break;
	}


?>