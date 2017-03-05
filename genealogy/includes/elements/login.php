<form id='frmFE' name='frmFE' method='post' target='_blank'>
<div style='display: none'>
family genealogy ancestry ancestor explorer search free membership information 
</div>
<center>
<table width='750' cellpadding=0 cellspacing=0 style='border-style: solid; border-width: 1; border-color: #12092f'>
   <tr>
      <td valign='top'><img src='addons/images/FamilyExplorer1.png'></td>
	  <td width='100%' valign='top'>
	     <table width='100%' cellpadding=0 cellspacing = 0>
		    <tr>
			   <td style='height: 38; width: 100%'>&nbsp;
			   </td>
            </tr>
			<tr>
			   <td style='height: 24; width: 100%' bgcolor='#0a6863' align='center'>
			   &nbsp;</td>
            </tr>	
         </table>					   
	  </td>
   </tr>
   <tr>
      <td colspan=2 bgcolor='white' align='right'><table>
   		     <tr>
      		    <td>First Name</td>
	  			<td><input name="firstName" id="firstName" type="text" value=""></td>
  	  			<td>Last Name</td>
	  			<td><input name="lastName" id="lastName" type="text" value=""></td>
				<td><input type='button' onclick="searchClick()" 
			   			   title='Search the Family Explorer database for an individual - does not require membership'
			   			   style='cursor: hand'
			   			   value='Search'>
			    </td>
            </tr></table>
			<div style='display: none'>
			<input type='radio' name='rdoPage' id='rdoPage' onclick="changePage('AJAX')"> AJAX
			<input type='radio' name='rdoPage' id='rdoPage' onclick="changePage('Standard')"> Standard
			<input type='radio' name='rdoPage' id='rdoPage' onclick="changePage('Other')"> Other
			</div>
			</td>
   </tr>
   <tr>
      <td colspan=2 bgcolor='#062498' style='padding: 5' valign='middle'>
	     <b><font color='#fefc1e'>Ancestry&nbsp;&nbsp;-&nbsp;&nbsp;
		 Family&nbsp;&nbsp;-&nbsp;&nbsp;Genealogy</font></b></td>
   </tr>
   <tr>
      <td colspan=2 bgcolor='white'>&nbsp;</td>
   </tr>
   <tr>
      <td bgcolor='#0a6863' align='center'>
	     <button onclick="" 
			   	 style='cursor: hand'
			   	 title='Free Membership Signup'
			   	 ><b><font color='#0a6863'>Free Membership</font></b></button>
      </td>	
	  <td>&nbsp;
	  </td>		   
   </tr>
   <tr>
      <td>&nbsp;
      </td>	
	  <td>&nbsp;
	  </td>		   
   </tr>
   <tr>
      <td valign='top'>
	     <table cellspacing=0 cellpadding=0 width='100%'>
		    <tr>
			   <td colspan=2  bgcolor='#0a6863' style='color: #ffffff' align='center' valign='middle' height='50'><b>Login</b>
			   </td>
			</tr>
			<tr>
			   <td colspan=2  valign='middle' style='padding: 3; border-style: solid; border-width: 1; border-color: black'>
			      <b>UserName:</b><br>
				  <input type='text' id='txtUserName' name='txtUserName'><br>
				  <b>Password:</b><br>
				  <input type='password' id='txtPassword' name='txtPassword'>&nbsp;
				  <!-- /*goClick();*/ -->
				  <img src='addons/images/go.gif' style='cursor: hand' onclick="check_login();"><br><br>
				  <a href='' style='cursor: hand'
				     onclick="openPage('member/' + pth + '/enterEmail.htm', wcW, wcH)" 
			   		 title='Send me my password'
				  	 title='Provide your user name and email address and we will email you your password'
					 >Forgot your password?</a><br><br>
				  <a href='' style='cursor: hand'
				     onclick="openPage('member/' + pth + '/PrivacyPolicy.htm', wcW, wcH)" 
			   		 title='Privacy Statement'
					 >Privacy Statement</a>
			   </td>
			</tr>
		 </table>
	  </td>
	  <td width='100%' valign='top'><!--
	     <div style='overflow: auto; border-style: inset; height: 300'>
	     <table width='100%' cellpadding=0 cellspacing = 0>
		    <tr>
			   <td style='width: 100%' align='center'>
			      <img src='addons/images/ahlogo.jpg' title='Search Engine for LDS Mormon Church Records'
				  	   onmouseover="this.style.borderColor = '#0001e2'"
					   onmouseout="this.style.borderColor = '#ffffff'"
					   onclick="openPage('http://www.ancestorhunt.com/mormon_church_records.htm', wcW, wcH)"
					   style='border-style: solid; border-color: #ffffff; border-width: 1; cursor: hand'><br><br><br><br>
			   </td>
            </tr>
			<tr>
			   <td align='center'>
			      <img src='addons/images/interment.png' title='Cemetery Transcriptions'
				  	   onmouseover="this.style.borderColor = '#0001e2'"
					   onmouseout="this.style.borderColor = '#ffffff'"
					   onclick="openPage('http://www.interment.net/Default.htm', wcW, wcH)"
					   style='border-style: solid; border-color: #ffffff; border-width: 1; cursor: hand' style='cursor: hand'><br><br><br><br>

			   </td>
            </tr>
			<tr>
			   <td align='center'>
			      <img src='addons/images/logo.gif' title='Genealogy site'
				  	   onmouseover="this.style.borderColor = '#0001e2'"
					   onmouseout="this.style.borderColor = '#ffffff'"
					   onclick="openPage('http://landing.ancestry.com/genealogy/genealogy_records.aspx', wcW, wcH)"
					   style='border-style: solid; border-color: #ffffff; border-width: 1; cursor: hand' style='cursor: hand'><br><br><br><br>

			   </td>
            </tr>	
			<tr>
			   <td align='center'>
			      <img src='addons/images/header.gif' title='Other Genealogy sites'
				  	   onmouseover="this.style.borderColor = '#0001e2'"
					   onmouseout="this.style.borderColor = '#ffffff'"
					   onclick="openPage('http://www.worldwidetopsites.com/sites/genealogy.html', wcW, wcH)"
					   style='border-style: solid; border-color: #ffffff; border-width: 1; cursor: hand' style='cursor: hand'><br><br><br><br>

			   </td>
            </tr>	
			<tr>
			   <td align='center'>
			      <a href='http://www.world-newspapers.com/' target='_blank'>World Newspapers</a><br><br>
			   </td>
            </tr>	
			<tr>
			   <td align='center'>
			      <a href='http://www.libdex.com/country.html' target='_blank'>
				  <img src='http://www.libdex.com/images/library_index.gif'
				       style='border-style: solid; border-color: #ffffff; border-width: 1; cursor: hand'></a><br><br>
			   </td>
            </tr>	
			<tr>
			   <td align='center'>
			      <a href='http://www.acadian-cajun.com' target='_blank'>Acadian - Cajun Genealogy and History</a><br><br>
			   </td>
            </tr>
			<tr>
			   <td align='center'>
			      <a href='http://www.acadian.org' target='_blank'>Acadian Genealogy Homepage</a><br><br>
			   </td>
            </tr>
			<tr>
			   <td align='center'>
			      <a href='http://www.vivelacajun.com' target='_blank'>Vive la Cajun Family Histories</a><br><br>
			   </td>
            </tr>
			<tr>
			   <td align='center'>
			      <a href='http://www.geocities.com/strivingmom/belleile.html' target='_blank'>78 families</a><br><br>
			   </td>
            </tr>
			<tr>
			   <td align='center'>
			      <a href='http://www.archives.gnb.ca' target='_blank'>Canada - New Brunswick</a><br><br>
			   </td>
            </tr>
			<tr>
			   <td align='center'>
			      <a href='http://www.grl.com' target='_blank'>The Genealogical Research Library</a><br><br>
			   </td>
            </tr>
			<tr>
			   <td align='center'>
			      <a href='http://www.blupete.com' target='_blank'>Canada - Nova Scotia</a><br><br>
			   </td>
            </tr>
			<tr>
			   <td align='center'>
			      <a href='http://www.canadiana.org/ECO/mtq?id=a6450175ac&doc=12359' target='_blank'>Early Canadiana Online</a><br><br>
			   </td>
            </tr>
			<tr>
			   <td align='center'>
			      <a href='http://www.genealogia.com' target='_blank'>Genealogia</a><br><br>
			   </td>
            </tr>
			<tr>
			   <td align='center'>
			      <a href='http://www.islandregister.com' target='_blank'>The Island Register</a><br><br>
			   </td>
            </tr>
			<tr>
			   <td align='center'>
			      <a href='http://www.umfk.maine.edu/archives' target='_blank'>Acadian Archives History and Mission</a><br><br>
			   </td>
            </tr>
			<tr>
			   <td align='center'>
			      <a href='http://www.rootsweb.com/~afgwgw/' target='_blank'>Afghanistan GenWeb Project</a><br><br>
			   </td>
            </tr>
			<tr>
			   <td align='center'>
			      <a href='http://www.africa-research.org/mainframe.html' target='_blank'>AFRICA RESEARCH CENTRAL</a><br><br>
			   </td>
            </tr>
			<tr>
			   <td align='center'>
			      <a href='http://www.afrigeneas.com/' target='_blank'>African American Ancestors</a><br><br>
			   </td>
            </tr>
			<tr>
			   <td align='center'>
			      <a href='http://www.rootsweb.com/~albwgw/' target='_blank'>Albania</a><br><br>
			   </td>
            </tr>
			<tr>
			   <td align='center'>
			      <a href='http://us.oneworld.net/article/country/16' target='_blank'>American Samoa</a><br><br>
			   </td>
            </tr>
			<tr>
			   <td align='center'>
			      <a href='http://www.arxius.ad/' target='_blank'>Andorra</a><br><br>
			   </td>
            </tr>
			<tr>
			   <td align='center'>
			      <a href='http://www.rootsweb.com/~canns/anglican.html' target='_blank'>Anglican Diocese of Nova Scotia</a><br><br>
			   </td>
            </tr>
			<tr>
			   <td align='center'>
			      <a href='http://www.libdex.com/country/Angola.html' target='_blank'>Catholic University of Angola</a><br><br>
			   </td>
            </tr>
			<tr>
			   <td align='center'>
			      <a href='http://www.candoo.com/genresources/' target='_blank'>Anguilla - Caribbean Genealogy</a><br><br>
			   </td>
            </tr>
			<tr>
			   <td align='center'>
			      <a href='http://www.candoo.com/genresources/' target='_blank'>ANTILLES FRANCAISES - Caribbean Genealogy</a><br><br>
			   </td>
            </tr>
			<tr>
			   <td align='center'>
			      <a href='http://www.spri.cam.ac.uk/library/archives/' target='_blank'>Arctic - Scott Polar Research Institute</a><br><br>
			   </td>
            </tr>
			<tr>
			   <td align='center'>
			      <a href='http://www.h-net.org/~latam/archives/buenosaires.html' target='_blank'>ARGENTINA: Archivo Historico de la Provincia de Buenos Aires, La Plata</a><br><br>
			   </td>
            </tr>
			<tr>
			   <td align='center'>
			      <a href='http://www.matenadaran.am/' target='_blank'>Armenia</a><br><br>
			   </td>
            </tr>
			<tr>
			   <td align='center'>
			      <a href='http://www.world-newspapers.com/aruba.html' target='_blank'>Aruba</a><br><br>
			   </td>
            </tr>
			<tr>
			   <td align='center'>
			      <a href='http://www.nla.gov.au/lap/' target='_blank'>Asia</a><br><br>
			   </td>
            </tr>
			<tr>
			   <td align='center'>
			      <a href='http://www.ausbdm.org/' target='_blank'>Australia</a><br><br>
			   </td>
            </tr>
			<tr>
			   <td align='center'>
			      <a href='http://www.rootsweb.ancestry.com/~autwgw/' target='_blank'>Austria</a><br><br>
			   </td>
            </tr>
			<tr>
			   <td align='center'>
			      <a href='http://homepages.rootsweb.ancestry.com/~andert/pomogy.htm' target='_blank'>Austro-Hungarian Empire</a><br><br>
			   </td>
            </tr>
			<tr>
			   <td align='center'>
			      <a href='http://homepages.rootsweb.ancestry.com/~andert/pomogy.htm' target='_blank'>Austro-Hungarian Empire</a><br><br>
			   </td>
            </tr>
	     </table> 
		 </div>  -->
	  </td>
   </tr>
</table>   
</center>
<input type='hidden' id='hID' name='hID'>
<hr></hr>
<center>
<table>
   <tr>
      <td>
<a href='it/opportunity.php' target='_self'><font size=1><i>Work from home</i></font></a>
      </td>
      <td>
   
<?php
/*include 'includes/connection.inc';
include 'includes/database_open_hits.inc';
include 'includes/hits_page.inc';
include 'includes/database_close.inc';
echo("<div style='border-style: inset'>".$hits."</div>");*/
?>
      </td>
   </tr>
</table> 
</center>  	  
<?php
// include 'member/common/includes/browser_info.inc';
?>
</form>

