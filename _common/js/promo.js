// return the value of the radio button that is checked
// return an empty string if none are checked, or
// there are no radio buttons

var promo_val;
function promo_check(val)
	{
        if (val == 1) {
		document.getElementById('g_promo_code_team_title').style.display = 'block';
		document.getElementById('g_promo_code_team_group').style.display = 'block';
		document.getElementById('g_team').value = "";
   		document.getElementById('g_promo_sth_account').value = "";
   		document.getElementById('g_promo_sth_code').value = "";
        document.getElementById('promo_grid_sth').style.display = 'block';
        document.getElementById('promo_grid_emp').style.display = 'none';
        document.getElementById('promo_grid_none').style.display = 'none';
		document.getElementById('but_promo_cont_2').style.display = 'none';
		}
        if (val == 2) {
   		document.getElementById('g_promo_sth_account').value = "";
   		document.getElementById('g_promo_sth_code').value = "";
        document.getElementById('promo_grid_sth').style.display = 'none';
        document.getElementById('promo_grid_emp').style.display = 'none';
        document.getElementById('promo_grid_none').style.display = 'block';
		document.getElementById('but_promo_cont_2').style.display = 'none';
		}

		if (val == 3) {
		document.getElementById('g_promo_emp_account').value = "";
   		//document.getElementById('g_promo_emp_code').value = "";
        document.getElementById('promo_grid_sth').style.display = 'none';
        document.getElementById('promo_grid_emp').style.display = 'block';
        document.getElementById('promo_grid_none').style.display = 'none';
		document.getElementById('but_promo_cont_2').style.display = 'none';
		}
		if (val == 4) {
		document.getElementById('g_promo_code_team_title').style.display = 'none';
		document.getElementById('g_promo_code_team_group').style.display = 'none';
		document.getElementById('g_team').value = "G";
   		document.getElementById('g_promo_sth_account').value = "";
   		document.getElementById('g_promo_sth_code').value = "";
        document.getElementById('promo_grid_sth').style.display = 'block';
        document.getElementById('promo_grid_emp').style.display = 'none';
        document.getElementById('promo_grid_none').style.display = 'none';
		document.getElementById('but_promo_cont_2').style.display = 'none';
		}
		if (val == 5) {
		document.getElementById('g_promo_code_team_title').style.display = 'none';
		document.getElementById('g_promo_code_team_group').style.display = 'none';
   		document.getElementById('g_promo_sth_account').value = "";
   		document.getElementById('g_promo_sth_code').value = "";
        document.getElementById('promo_grid_sth').style.display = 'none';
        document.getElementById('promo_grid_emp').style.display = 'none';
        document.getElementById('promo_grid_none').style.display = 'none';
		document.getElementById('but_promo_cont_2').style.display = 'block';
		}
		if (val == 6) {
			if(document.getElementById('x_chkbox').checked == 1){
		document.getElementById('g_promo_code_team_title').style.display = 'block';//
		document.getElementById('g_team').value = "G";//
   		document.getElementById('g_promo_sth_account').value = "";//
   		document.getElementById('g_promo_sth_code').value = "";//
        document.getElementById('promo_grid_sth').style.display = 'block';//
        document.getElementById('promo_grid_none').style.display = 'none';//
			}
			else{
		document.getElementById('g_promo_code_team_title').style.display = 'none';//
		document.getElementById('g_team').value = "";//
   		document.getElementById('g_promo_sth_account').value = "";//
   		document.getElementById('g_promo_sth_code').value = "";//
        document.getElementById('promo_grid_sth').style.display = 'none';//
        document.getElementById('promo_grid_none').style.display = 'none';//
				}
		}
        promo_val = val;

	}
function sth_check()
	{
        document.getElementById('promo_return_value').style.display = 'block';
	}
function enterCode(redeem_code)
    {
        document.getElementById('g_promo_code').value = redeem_code;
        document.getElementById('but_promo_cont').disabled = false;
        // set gift redemption
        val = 1;
        set_redeem(val, {'target':'set_redeem','preloader':'pr'});
    }
function enterDiscountCode(redeem_code)
    {
        document.getElementById('g_promo_code').value = redeem_code;
		document.getElementById('but_promo_cont').disabled = false;
    }
function showmessage(form) {
            alert("No discount offers w!");
            return true;
    }
function checkinput() {
    if (promo_val == 1) {
				document.getElementById('g_promo_code_gift').value = "sth"+"|"+
				document.getElementById('g_promo_sth_account').value + "|" +
				document.getElementById('g_team').value  + "|"+
				document.getElementById('g_promo_sth_code').value;
    }
    if (promo_val == 2) {
        document.getElementById('g_promo_code_gift').value = "";
	}
    if (promo_val == 3) {
		document.getElementById('g_promo_code_gift').value = "emp"+"|"+
        document.getElementById('g_promo_emp_account').value + "|";//+
        //document.getElementById('g_promo_emp_code').value;
		}
	if (promo_val == 4) {
				document.getElementById('g_promo_code_gift').value = "gft"+"|"+
				document.getElementById('g_promo_sth_account').value + "|" +
				document.getElementById('g_team').value  + "|"+
				document.getElementById('g_promo_sth_code').value;
    }
	if (promo_val == 6) {
				document.getElementById('g_promo_code_gift').value = "gft"+"|"+
				document.getElementById('g_promo_sth_account').value + "|" +
				document.getElementById('g_team').value  + "|"+
				document.getElementById('g_promo_sth_code').value;
    }

}

function checkCode(type){

    if (type == 'account'){
     val = document.getElementById("g_promo_code_gift").value;
     validate_sth_account(val, {'target':'msg','preloader':'pr'});
    }
    if (type == 'code'){
     val = document.getElementById("g_promo_code_gift").value;
     validate_sth_account_gift(val, {'target':'msg_gift','preloader':'pr_gift'});
    }
    if (type == 'emp'){
     /** val = document.getElementById("g_promo_code_gift").value;
     validate_emp(val, {'target':'msg_emp','preloader':'pr_emp'}); **/
	 document.getElementById('g_promo_code').value = document.getElementById('g_promo_emp_account').value;
    }
	if (type == 'giftcode'){
     val = document.getElementById("g_promo_code_gift").value;
     var stuff = validate_gift_account(val, {'target':'msg','preloader':'pr'});
    }

 }
 function getinput(){
	 	document.getElementById('g_promo_code_gift').value = "gft"+"|"+
		document.getElementById('g_promo_sth_account').value + "|" +
		document.getElementById('g_team').value  + "|"+
		document.getElementById('g_promo_code_account').value;
 }