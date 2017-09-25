<?php error_reporting(0);?>
<style type="text/css">
	
		
		.center{
			text-align: center;
		}
		.cola
		{
			width: 10px!important;	
		}
		.cold,.cole,.colf,.colg,.colh,.colj,.colk{
			width:100px!important;
		}
		.colb{
			width:250px;
		}
	}
</style>

<table width="100%" class="page4">
	<tr class="hide">
		<td class="cola"></td>
		<td class="colb"></td>
		<td class="colc"></td>
		<td class="cold"></td>
		<td class="cole"></td>
		<td class="colf"></td>
		<td class="colg"></td>
		<td class="colh"></td>
		<td class="coli"></td>
		<td class="colj"></td>
		<td class="colk"></td>
	</tr>

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
		<td style="width:100px"><input type="checkbox" <?php echo $yes34a;?> disabled> YES </td>
		<td style="width:100px"><input type="checkbox" <?php echo $no34a;?> disabled> NO </td>
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
		<td style="width:100px"><input type="checkbox" <?php echo $yes34b;?> disabled> YES </td>
		<td style="width:100px"><input type="checkbox" <?php echo $no34b;?> disabled> NO  </td>
	</tr>
	<tr>
		
		<td colspan="2"> If YES, give details: <br><span style="text-decoration: underline;"><?php echo $row34b['details'];?></span></td>
		
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
		<td style="width:100px"><input type="checkbox" <?php echo $yes35a;?> disabled> YES </td>
		<td style="width:100px"><input type="checkbox" <?php echo $no35a;?> disabled> NO </td>
	</tr>
	<tr>
		
		<td colspan="2"> If YES, give details: <br><span style="text-decoration: underline;"><?php echo $row35a['details'];?></span></td>
		
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
		<td style="width:100px"><input type="checkbox" <?php echo $yes35b;?> disabled> YES </td>
		<td style="width:100px"><input type="checkbox" <?php echo $no35b;?> disabled> NO </td>
	</tr>
	<tr>
		
		<td colspan="2"> If YES, give details: <br>Date Filed: <span style="text-decoration: underline;"><?php echo date("m/d/Y",strtotime($row35b['date_filed']));?></span>
		<br>Status of Case/s: <span style="text-decoration: underline;"><?php echo $row35b['details'];?></span></td>
		
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
		<td style="width:100px"><input type="checkbox" <?php echo $yes36;?> disabled> YES </td>
		<td style="width:100px"><input type="checkbox" <?php echo $no36;?> disabled> NO </td>
	</tr>
	<tr>
		
		<td colspan="2"> If YES, give details: <br> <span style="text-decoration: underline;"><?php echo $row36['details']?></span></td>
		
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
		<td class="q" rowspan="2">37.</td>
		<td colspan="4" class="q" rowspan="2">Have you ever been separated from the service in any of the following modes: resignation, retirement, dropped from the rolls, dismissal, termination, end of term, finished contract or phased out (abolition) in the public or private sector?</td>
		<td style="width:100px"><input type="checkbox" <?php echo $yes37;?> disabled> YES </td>
		<td style="width:100px"><input type="checkbox" <?php echo $no37;?> disabled> NO </td>
	</tr>
	<tr>
		
		<td colspan="2"> If YES, give details: <br><span style="text-decoration: underline;"><?php echo $row37['details']?></span></td>
		
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
		<td class="q" rowspan="2">38.</td>
		<td colspan="4" class="q" rowspan="2">a. Have you ever been a candidate in a national or local election held within the last year (except Barangay election)?</td>
		<td style="width:100px"><input type="checkbox" <?php echo $yes38a;?> disabled> YES </td>
		<td style="width:100px"><input type="checkbox" <?php echo $no38a;?> disabled> NO </td>

	</tr>
	<tr>
		
		<td colspan="2"> If YES, give details: <br><span style="text-decoration: underline;"><?php echo $row38a['details']?></span></td>
		
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
		<td style="width:100px"><input type="checkbox" <?php echo $yes38b;?> disabled> YES </td>
		<td style="width:100px"><input type="checkbox" <?php echo $no38b;?> disabled> NO </td>
	</tr>
	<tr>
		
		<td colspan="2"> If YES, give details: <br><span style="text-decoration: underline;"><?php echo $row38b['details']?></span></td>
		
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
		<td style="width:100px"><input type="checkbox" <?php echo $yes39;?> disabled> YES </td>
		<td style="width:100px"><input type="checkbox" <?php echo $no39;?> disabled> NO </td>

	</tr>
	<tr>
		
		<td colspan="2"> If YES, give details (country): <br><span style="text-decoration: underline;"><?php echo $row39['details']?></span></td>
		
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
		<td style="width:100px"><input type="checkbox" <?php echo $yes40;?> disabled> YES </td>
		<td style="width:100px"><input type="checkbox" <?php echo $no40;?> disabled> NO </td>

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
		<td class="q" rowspan="2">a </td>
		<td colspan="4" class="q" rowspan="2">Are you a member of any indigenous group?</td>
		<td style="width:100px"><input type="checkbox" <?php echo $yes40a;?> disabled> YES </td>
		<td style="width:100px"><input type="checkbox" <?php echo $no40a;?> disabled> NO </td>
	</tr>
	<tr>
		
		<td colspan="2"> If YES, please specify: <span style="text-decoration: underline;"><?php echo $row40a['details']?></span></td>
		
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
		<td class="q" rowspan="2">b </td>
		<td colspan="4" class="q" rowspan="2">Are you a person with disability?</td>
		<td style="width:100px"><input type="checkbox" <?php echo $yes40b;?> disabled> YES </td>
		<td style="width:100px"><input type="checkbox" <?php echo $no40b;?> disabled> NO </td>
	</tr>
	<tr>
		
		<td colspan="2"> If YES, please specify ID No.: <span style="text-decoration: underline;"><?php echo $row40b['details']?></span></td>
		
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
		<td class="q" rowspan="2">c </td>
		<td colspan="4" class="q" rowspan="2">Are you a solo parent?</td>
		<td style="width:200px"><input type="checkbox" <?php echo $yes40c;?> disabled> YES </td>
		<td style="width:200px"><input type="checkbox" <?php echo $no40c;?> disabled> NO </td>
	</tr>
	<tr>
		
		<td colspan="2"> If YES, please specify ID No.: <span style="text-decoration: underline;"><?php echo $row40c['details']?></span></td>
		
	</tr>
</table>
<table width="100%" class="page4">
	<tr>
		<td width="10px" class="header">41.</td>
		<td colspan="9" class="header">REFERENCES (Person not related by consanguinity or affinity to applicant /appointee)</td>
		<td width="300px" rowspan="7">
			<div style="border:1px solid;height: 120px;width: 100px;margin: auto;padding: 5px;text-align: center;font-size: 10px;margin-top: -100px">
				ID picture taken within 
					the last  6 months 
					3.5 cm. X 4.5 cm 
					(passport size)

					With full and handwritten
					name tag and signature over
					printed name

					Computer generated 
					or photocopied picture 
					is not acceptable
					 
	
			</div>
			<br>
			<div style="border:1px solid;height: 50px;width: 100px;margin: auto;padding: 10px;text-align: center;font-size: 12px;margin-bottom: -100px">
				
				<br><br><br><br><br>	 
				<div style="border:1px solid;margin-left:-10px;margin-right: -10px;background-color: grey;margin-top: -30px;" class="header">Right Thumbmark</div>
			</div>
		</td>
	</tr>
	<tr style="text-align: center;">
		<td colspan="4" class="heading">NAME</td>
		<td colspan="1" class="heading">ADDRESS</td>
		<td colspan="1" class="heading">TEL. NO.</td>
	</tr>
<?php error_reporting(0);
												$queryh=mysqli_query($con,"select * from reference where faculty_id='$id'")or die(mysqli_error($con));
															$name=array();
															$address=array();
															$contact=array();
                    									while($rowh=mysqli_fetch_array($queryh)){
                    										$name[]=$rowh['reference_name'];
                    										$address[]=$rowh['reference_address'];
                    										$contact[]=$rowh['reference_contact'];
                    									}
											?>			
	<tr style="text-align: center;">
		<td colspan="4" class="q"><?php echo $name[0];?></td>
		<td colspan="1" class="q"><?php echo $address[0];?></td>
		<td colspan="1" class="q"><?php echo $contact[0];?></td>
		
	</tr>
	<tr style="text-align: center;">
		<td colspan="4" class="q"><?php echo $name[1];?></td>
		<td colspan="1" class="q"><?php echo $address[1];?></td>
		<td colspan="1" class="q"><?php echo $contact[1];?></td>
	</tr>
	<tr style="text-align: center;">
		<td colspan="4" class="q"><?php echo $name[2];?></td>
		<td colspan="1" class="q"><?php echo $address[2];?></td>
		<td colspan="1" class="q"><?php echo $contact[2];?></td>
		
	</tr>
	<tr>
		<td width="10px">42.</td>
		<td colspan="6" class="q">I declare under oath that I have personally accomplished this Personal Data Sheet which is a true, correct and complete statement pursuant to the provisions of pertinent laws, rules and regulations of the Republic of the Philippines. I authorize the agency head/authorized representative to verify/validate the contents stated herein.          I  agree that any misrepresentation made in this document and its attachments shall cause the filing of administrative/criminal case/s against me.</td>
		
		
	</tr>
	<tr>
		<td width="10px"></td>
		<td colspan="2" class="q">
			<div style="width:300px;background-color: grey;border:solid 1px" class="header">
			Government Issued ID (i.e.Passport, GSIS, SSS, PRC, Driver's License, etc.) PLEASE INDICATE ID Number and Date of Issuance
			</div>
			<div style="width:300px;border:solid 1px">
			Government Issued ID: 
			</div>
			<div style="width:300px;border:solid 1px">
			ID/License/Passport No.: 
			</div>
			<div style="width:300px;border:solid 1px">
			Date/Place of Issuance:
			</div>
		</td>
		<td colspan="3" class="q">	
			<div style="width:300px;border:solid 1px;height: 52px;">
			
			</div>
			<div style="width:300px;background-color: grey;border:solid 1px;" class="header">
			Signature (Sign inside the box)
			</div>
			
			<div style="width:300px;border:solid 1px;height:20px">
			
			</div>
			<div style="width:300px;border:solid 1px;background-color: grey;" class="header">
			Date Accomplished
			</div>
		</td>
		
		
	</tr>
	<tr>
		<td colspan="11" class="center">
			SUBSCRIBED AND SWORN to before me this                                                                        , affiant exhibiting his/her validly issued government ID as indicated above.
		</td>
	</tr>
	<tr>
		<td colspan="11" class="center" style="height: 200px">
			<div style="border:1px solid;height: 80px;width: 350px;margin: auto;padding: 10px;text-align: center;font-size: 12px">
				
				<br><br><br><br><br>	 
				<div class="header" style="border:1px solid;margin-left:-10px;margin-right: -10px;background-color: grey">Person Administering Oath</div>
			</div>
		</td>
	</tr>

</table>
