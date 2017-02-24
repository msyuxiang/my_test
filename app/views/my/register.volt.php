<h1>
    Contacts
</h1>

<form action="registerConfirm" method="post">
	<table>
		<tr>
			<td>Name</td>
			<td><?php echo $myForm->render("name");?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><?php echo $myForm->render("email");?></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><?php echo $myForm->render("password");?></td>
		</tr>
		<tr>
			<td><?php echo $myForm->render("save");?></td>
		</tr>
	</table>
</form>
<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

