<form method="post" action="question_add.php">
<table width="100%" class="page4">

	<tr>
		<td class="q">34.</td>
		<td colspan="4" class="q">Are you related by consanguinity or affinity to the appointing or recommending authority, or to the</td>
		<td colspan="6" rowspan="3"></td>
	</tr>
	<tr>
		<td class="q"></td>
		<td colspan="4" class="q">chief of bureau or office or to the person who has immediate supervision over you in the Office, </td>
		
	</tr>
	<tr>
		<td class="q"></td>
		<td colspan="4" class="q">Bureau or Department where you will be apppointed,</td>
		
	</tr>
<?php
	$query34a=mysqli_query($con,"select * from answer where faculty_id='$id' and question='34a'")or die(mysqli_error($con));
          	$row34a=mysqli_fetch_array($query34a);
          	if ($row34a['answer']=='Yes')
          		$yes34a="checked";
          	else
          		$no34a="checked";
?>		
	<tr>
		<td class="q"></td>
		<td colspan="4" class="q">a. within the third degree?</td>
		<input type="hidden" name="question[]" value="34a">
		<td style="width:100px"><input type="radio" name="answer34a" value="Yes" <?php echo $yes34a;?>> YES </td>
		<td style="width:100px"><input type="radio" name="answer34a" value="No" <?php echo $no34a;?>> NO </td>
	</tr>
<?php
	$query34b=mysqli_query($con,"select * from answer where faculty_id='$id' and question='34b'")or die(mysqli_error($con));
          	$row34b=mysqli_fetch_array($query34b);
          	if ($row34b['answer']=='Yes')
          		$yes34b="checked";
          	else
          		$no34b="checked";
?>	
	<tr>
		<td class="q" rowspan="2"></td>
		<td colspan="4" class="q" rowspan="2">b. within the fourth degree (for Local Government Unit - Career Employees)?</td>
		<input type="hidden" name="question[]" value="34b">
		<td style="width:100px"><input type="radio" name="answer34b" value="Yes" <?php echo $yes34b;?>> YES </td>
		<td style="width:100px"><input type="radio" name="answer34b" value="No" <?php echo $no34b;?>> NO  </td>
	</tr>
	<tr>
		
		<td> If YES, give details: </td>
		<td><input type="text" name="details34b" value="<?php echo $row34b['details']?>"></td>
		
	</tr>
<?php
	$query35a=mysqli_query($con,"select * from answer where faculty_id='$id' and question='35a'")or die(mysqli_error($con));
          	$row35a=mysqli_fetch_array($query35a);
          	if ($row35a['answer']=='Yes')
          		$yes35a="checked";
          	else
          		$no35a="checked";
?>
	<tr>
		<td class="q" rowspan="2">35.</td>
		<td colspan="4" class="q" rowspan="2">a. Have you ever been found guilty of any administrative offense?</td>
		<input type="hidden" name="question[]" value="35a">
		<td style="width:100px"><input type="radio" name="answer35a" value="Yes" <?php echo $yes35a;?>> YES </td>
		<td style="width:100px"><input type="radio" name="answer35a" value="No" <?php echo $no35a;?>> NO </td>
	</tr>
	<tr>
		
		<td> If YES, give details:</td>
		<td><input type="text" name="details35a" value="<?php echo $row35a['details']?>"></td>
		
	</tr>
<?php
	$query35b=mysqli_query($con,"select * from answer where faculty_id='$id' and question='35b'")or die(mysqli_error($con));
          	$row35b=mysqli_fetch_array($query35b);
          	if ($row35b['answer']=='Yes')
          		$yes35b="checked";
          	else
          		$no35b="checked";
?>	
	<tr>
		<td class="q" rowspan="2"></td>
		<td colspan="4" class="q" rowspan="2">b. Have you been criminally charged before any court? </td>
		<input type="hidden" name="question[]" value="35b">
		<td style="width:100px"><input type="radio" name="answer35b" value="Yes" <?php echo $yes35b;?>> YES </td>
		<td style="width:100px"><input type="radio" name="answer35b" value="No" <?php echo $no35b;?>> NO </td>
	</tr>
	<tr>
		
		<td colspan="1"> If YES, give details:<br>Date Filed: <br>Status of Case/s:</td>
		<td><br><input type="date" name="date35b" value="<?php echo $row35b['date_filed']?>">
		 <input type="text" name="details35b" value="<?php echo $row35b['details']?>"></td>
		
	</tr>
<?php
	$query36=mysqli_query($con,"select * from answer where faculty_id='$id' and question='36'")or die(mysqli_error($con));
          	$row36=mysqli_fetch_array($query36);
          	if ($row36['answer']=='Yes')
          		$yes36="checked";
          	else
          		$no36="checked";
?>
	<tr>
		<td class="q" rowspan="2">36.</td>
		<td colspan="4" class="q" rowspan="2">Have you ever been convicted of any crime or violation of any law, decree, ordinance or regulation by any court or tribunal?</td>
		<input type="hidden" name="question[]" value="36">
		<td style="width:100px"><input type="radio" name="answer36" value="Yes" <?php echo $yes36;?>> YES </td>
		<td style="width:100px"><input type="radio" name="answer36" value="No" <?php echo $no36;?>> NO </td>
	</tr>
	<tr>
		
		<td colspan="1"> If YES, give details: </td>
		<td><input type="text" name="details36" value="<?php echo $row36['details']?>"></td>
		
	</tr>
<?php
	$query37=mysqli_query($con,"select * from answer where faculty_id='$id' and question='37'")or die(mysqli_error($con));
          	$row37=mysqli_fetch_array($query37);
          	if ($row37['answer']=='Yes')
          		$yes37="checked";
          	else
          		$no37="checked";
?>	
	<tr>
		<td class="q" rowspan="1">37.</td>
		<td colspan="4" class="q" colspan="2">Have you ever been separated from the service in any of the following modes: resignation, retirement, dropped from the rolls, dismissal, termination, end of term, finished contract or phased out (abolition) in the public or private sector?</td>
		<input type="hidden" name="question[]" value="37">
		<td><input type="radio" name="answer37" value="Yes" <?php echo $yes37;?>> YES <br>If YES, give details: </td>
		<td><input type="radio" name="answer37" value="No" <?php echo $no37;?>> NO <br><input type="text" name="details37" value="<?php echo $row37['details']?>"><br></td>
	</tr>
	
<?php
	$query38a=mysqli_query($con,"select * from answer where faculty_id='$id' and question='38a'")or die(mysqli_error($con));
          	$row38a=mysqli_fetch_array($query38a);
          	if ($row38a['answer']=='Yes')
          		$yes38a="checked";
          	else
          		$no38a="checked";
?>
	<tr>
		<td class="q" rowspan="">38.</td>
		<td colspan="4" class="q">a. Have you ever been a candidate in a national or local election held within the last year (except Barangay election)?</td>
		<input type="hidden" name="question[]" value="38a">
		<td style="width:100px"><input type="radio" name="answer38a" value="Yes" <?php echo $yes38a;?>> YES <br>If YES, give details:</td>
		<td style="width:100px"><input type="radio" name="answer38a" value="No" <?php echo $no38a;?>> NO <br><input type="text" name="details38a" value="<?php echo $row38a['details']?>"> </td>

	</tr>
				
	
<?php
	$query38b=mysqli_query($con,"select * from answer where faculty_id='$id' and question='38b'")or die(mysqli_error($con));
          	$row38b=mysqli_fetch_array($query38b);
          	if ($row38b['answer']=='Yes')
          		$yes38b="checked";
          	else
          		$no38b="checked";
?>	
	<tr>
		<td class="q" rowspan="2"></td>
		<td colspan="4" class="q" rowspan="2">b. Have you resigned from the government service during the three (3)-month period before the last election to promote/actively campaign for a national or local candidate? </td>
		<input type="hidden" name="question[]" value="38b">
		<td style="width:100px"><input type="radio" name="answer38b" value="Yes" <?php echo $yes38b;?>> YES <br>If YES, give details:</td>
		<td style="width:100px"><input type="radio" name="answer38b" value="No" <?php echo $no38b;?>> NO <br><input type="text" name="details38b" value="<?php echo $row38b['details']?>"></td>
	</tr>
	<tr>
		
		<td colspan="2">  <br></td>
		
	</tr>
<?php
	$query39=mysqli_query($con,"select * from answer where faculty_id='$id' and question='39'")or die(mysqli_error($con));
          	$row39=mysqli_fetch_array($query39);
          	if ($row39['answer']=='Yes')
          		$yes39="checked";
          	else
          		$no39="checked";
?>
	<tr>
		<td class="q" rowspan="2">39.</td>
		<td colspan="4" class="q" rowspan="2">Have you acquired the status of an immigrant or permanent resident of another country?</td>
		<input type="hidden" name="question[]" value="39">
		<td style="width:100px"><input type="radio" name="answer39" value="Yes" <?php echo $yes39;?>> YES </td>
		<td style="width:100px"><input type="radio" name="answer39" value="No" <?php echo $no39;?>> NO </td>

	</tr>
	<tr>
		
		<td colspan="1"> If YES, give details (country): </td>
		<td><input type="text" name="details39" value="<?php echo $row39['details']?>"></td>
		
	</tr>
<?php
	$query40=mysqli_query($con,"select * from answer where faculty_id='$id' and question='40'")or die(mysqli_error($con));
          	$row40=mysqli_fetch_array($query40);
          	if ($row40['answer']=='Yes')
          		$yes40="checked";
          	else
          		$no40="checked";
?>	
	<tr>
		<td class="q" rowspan="">40.</td>
		<td colspan="4" class="q">Pursuant to: (a) Indigenous People's Act (RA 8371); (b) Magna Carta for Disabled Persons (RA 7277); and (c) Solo Parents Welfare Act of 2000 (RA 8972), please answer the following items:</td>
		<td style="width:100px"><input type="radio" name="answer40" value="Yes" <?php echo $yes40;?>> YES </td>
		<td style="width:100px"><input type="radio" name="answer40" value="No" <?php echo $no40;?>> NO </td>
		<input type="hidden" name="question[]" value="40">
	</tr>
	<?php
	$query40a=mysqli_query($con,"select * from answer where faculty_id='$id' and question='40a'")or die(mysqli_error($con));
          	$row40a=mysqli_fetch_array($query40a);
          	if ($row40a['answer']=='Yes')
          		$yes40a="checked";
          	else
          		$no40a="checked";
?>
	<tr>
		<td class="q" rowspan="2"> </td>
		<td colspan="4" class="q" rowspan="2">a. Are you a member of any indigenous group?</td>
		<td style="width:100px"><input type="radio" name="answer40a" value="Yes" <?php echo $yes40a;?>> YES </td>
		<td style="width:100px"><input type="radio" name="answer40a" value="No" <?php echo $no40a;?>> NO </td>
		<input type="hidden" name="question[]" value="40a">
	</tr>
	<tr>
		
		<td colspan="1"> If YES, please specify:</td>
		<td><input type="text" name="details40a" value="<?php echo $row40a['details']?>"></td>
		
	</tr>
<?php
	$query40b=mysqli_query($con,"select * from answer where faculty_id='$id' and question='40b'")or die(mysqli_error($con));
          	$row40b=mysqli_fetch_array($query40b);
          	if ($row40b['answer']=='Yes')
          		$yes40b="checked";
          	else
          		$no40b="checked";
?>	
	<tr>
		<td class="q" rowspan="2"> </td>
		<td colspan="4" class="q" rowspan="2">b. Are you a person with disability?</td>
		<td style="width:100px"><input type="radio" name="answer40b" value="Yes" <?php echo $yes40b;?>> YES </td>
		<td style="width:100px"><input type="radio" name="answer40b" value="No" <?php echo $no40b;?>> NO </td>
		<input type="hidden" name="question[]" value="40b">
	</tr>
	<tr>
		
		<td colspan="1"> If YES, please specify ID No.:</td>
		<td><input type="text" name="details40b" value="<?php echo $row40b['details']?>"></td>
		
	</tr>
	<?php
	$query40c=mysqli_query($con,"select * from answer where faculty_id='$id' and question='40c'")or die(mysqli_error($con));
          	$row40c=mysqli_fetch_array($query40c);
          	if ($row40c['answer']=='Yes')
          		$yes40c="checked";
          	else
          		$no40c="checked";
?>
	<tr>
		<td class="q" rowspan="2"> </td>
		<td colspan="4" class="q" rowspan="2">c. Are you a solo parent?</td>
		<td style="width:200px"><input type="radio" name="answer40c" value="Yes" <?php echo $yes40c;?>> YES </td>
		<td style="width:200px"><input type="radio" name="answer40c" value="No" <?php echo $no40c;?>> NO </td>
		<input type="hidden" name="question[]" value="40c">
	</tr>
	<tr>
		
		<td colspan="1"> If YES, please specify ID No.: </td>
		<td><input type="text" name="details40c" value="<?php echo $row40c['details']?>"></td>
		
	</tr>
</table>
<div class="row">
														<div class="col-md-4">
															<div class="margiv-top-10">
																<button class="btn green-haze" name="profile">
																Save Changes </button>
																<a href="javascript:;" class="btn default">
																Cancel </a>
															</div>
														</div>
													</div>
</form>