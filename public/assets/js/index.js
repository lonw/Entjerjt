supplierType = "";
var engine_corp = new Bloodhound({
	datumTokenizer: function(d) {
		return Bloodhound.tokenizers.whitespace(d.company_name);
	},
	queryTokenizer: Bloodhound.tokenizers.whitespace,

	remote: {
		url: '/suppliers/mastervendors/ajax?type=corporationSupplier&search=%QUERY',
		wildcard: '%QUERY'
	}
});

var engine_vendor = new Bloodhound({
	datumTokenizer: function(d) {
		return Bloodhound.tokenizers.whitespace(d.company_name);
	},
	queryTokenizer: Bloodhound.tokenizers.whitespace,

	remote: {
		url: '/suppliers/mastervendors/ajax?type=taxesSupplier&search=%QUERY',
		wildcard: '%QUERY'
	}
});

// some stuff we're going to need 
var pd7a_fields = [['business_number', 'pd7a_business_number'],
            ['number_of_employees', 'pd7a_number_of_employees'],
            ['gross_payroll', 'pd7a_gross_payroll'],
            ['remitting_period', 'pd7a_period_end'],
            ['payment_date', 'pd7a_payment_date'],
            ['total_deductions', 'pd7a_total_deductions']];

var hst_fields = [['tax_business_number', 'tax_business_number'],
                    ['tax_installment_payment', 'tax_installment_payment'],
                    ['tax_amount_owing', 'tax_amount_owing'],
                    ['tax_audit_assessment', 'tax_audit_assessment'],
                    ['tax_total_payment', 'tax_total_payment'],
                    ['tax_due_date', 'tax_due_date'],
                    ['tax_period_end', 'tax_period_end']]; 

var corptax_fields = [['corptax_business_number', 'corptax_business_number'],
                    ['corptax_total_payment', 'corptax_total_payment'],
                    ['corptax_payment_date', 'corptax_payment_date']];


var direct_pay_skus = ["S_MC", "S_VISA", "S_AMEX"]; 



$(document).ready(function() {

	updateDateTimePickers();

	createSelectPicker();

	addRequiredAsterisks();

	$('#vendor.typeahead').typeahead({
		hint: true,
		highlight: true
	}, {
		name: 'company-name',
		display: 'company_name',
		source: engine_vendor,
		limit: 20

	});

	$('#bus_name.typeahead').typeahead({
		hint: true,
		highlight: true
	}, {
		name: 'company-name',
		display: 'company_name',
		source: engine_corp,
		limit: 20

	});


    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })


    // Chosen js
    var chosenOpts = { search_contains: true };

    var allCurrencies = '[name="currency"]:visible';
    var e = $('#fundingForm').find(allCurrencies);
    var filteredCurrencies = $(allCurrencies).not(e);
        
    $('#profile_id:visible').chosen(chosenOpts);
    filteredCurrencies.chosen(chosenOpts);
});

function addRequiredAsterisks() {
	var labels = $('input[required], select[required], input[requiredMarker], select[requiredMarker]')
		.closest('.form-group').find('label');

	$.each(labels, function(i, label) {
		$(label).text($(label).text() + ' *');
	});
}

function createSelectPicker() {

	$('.selectpicker').selectpicker({		
		style: 'selectbox',
		showContent: false
	});
}

function updateDateTimePickers() {
	$('.datetimepicker:not(.no-use-current)').datetimepicker({
	  //format: 'MM/DD/YYYY',
	  format: 'MMM DD, YYYY',
      minDate: moment(new Date()),
	  allowInputToggle: true
	});


	// support for default date on order date time pickers
	var default_date_field = document.getElementById('date_of_payment_default');

	if (default_date_field) {
		$('.datetimepicker.no-use-current').datetimepicker({
			format: 'MMM DD, YYYY',
			minDate: moment(),
			defaultDate: moment(default_date_field.value, 'MMM DD, YYYY'),
			useCurrent: false,
			allowInputToggle: true
		});
	}

    // set a second type that can be used for things like Taxt periods. 

    $('.datetimepicker_open').datetimepicker({
      //format: 'MM/DD/YYYY',
      format: 'MMM DD, YYYY',
      allowInputToggle: true,
      widgetPositioning: {
        vertical: 'bottom'
      }
    });

}

function toggleEditableRow(e) {
	e.preventDefault();
	e.stopPropagation();
  	
 	var tr = $(e.target).closest('tr');

    // not touching supplier in this mode
 	// var supplier = tr.find('.tbl_supplier');
 	// var supplieri = tr.find('.tbl_supplieri');

 	var amount = tr.find('.tbl_amount');
 	var amounti = tr.find('.tbl_amounti');

 	var memo = tr.find('.tbl_memo');
 	var memoi = tr.find('.tbl_memoi');

 	var method = tr.find('.tbl_method');
 	var methodi = tr.find('.tbl_methodi');
 	var methodi_selected = methodi.find('option:selected');

 	var date = tr.find('.tbl_date');
 	var datei = tr.find('.tbl_datei');
 	var datei_text = datei.find('input');

 	if (amounti.is(':visible')) {

 		var oldAmount = amount.html();

 		// copy inputs to original and hide inputs
		// supplier.html(supplieri.val());
		amount.html(Number(amounti.val()).toCurrency());
		memo.html(memoi.val());

		method.attr('value', methodi_selected.val());
		method.html(methodi_selected.text());

		date.html(datei_text.val());

		// add diff to 
		var difference = amount.html().toNumber() - oldAmount.toNumber();
		updateOrderTotal(difference);

 	} else {

 		// read from originals and copy into inputs
 		// supplieri.val(supplier.html());
 		amounti.val(amount.html().toNumber());
 		memoi.val(memo.html());

		methodi.val(method.attr('value'));
		datei_text.val(date.html());
 	}

	// supplier.toggle(0);
	// supplieri.toggle(0);

	amount.toggle(0);
	amounti.toggle(0);

	memo.toggle(0);
	memoi.toggle(0);

	method.toggle(0);
	methodi.toggle(0);

	date.toggle(0);
	datei.toggle(0);
}

function showMore(dom, section, showText, hideText) {

	if ($(section).is(':visible')) {
		$(section).slideUp(400, callback);
	} else {
		$(section).slideDown(400, callback);
	}
	function callback() {
		dom.innerHTML = $(this).is(':visible') ? hideText : showText;	
	}
}

var closeButton = '<button type="button" class="close float_right" data-dismiss="alert" onclick="XXX">&#215</button>';
closeButton = closeButton+'<img src="/images/spacer.png" width="25" class=" float_right top_mar_5" />';


function closeButtonCallback(callback, editable) {
	//alert('closeButton = '. closeButton);
    /*
      <button type="button" class="close float_right" data-dismiss="alert" onclick="removePaymentOrder(this);">×</button>
            <a href="javascript:void(0);" class="putinparking"><img src="/images/icon_parking_in_circle_small.svg" width="20" class="right_mar_20 float_right top_mar_5" /></a>
            <a href="javascript:void(0);" class="pencil" onclick="toggleEditableRow(event);"></a>
    */
	var dom = closeButton.replace('XXX', typeof callback !== 'undefined' ? callback : '');
	return (editable ? dom+'<a href="javascript:void(0);" class="pencil" onclick="toggleEditableRow(event);"></a>' : dom );
}

//TODO:  not the most elegant solution (duplication of above)
function closeButtonPD7ACallback(callback, editable) {
	//alert('closeButton = '. closeButton);
	var dom = closeButton.replace('XXX', typeof callback !== 'undefined' ? callback : '');
	return (editable ? dom+'<a href="javascript:void(0);" class="pencil" onclick="openPD7AModal(event);"></a>' : dom );
}


function closeButtonHSTCallback(callback, editable) {
	//alert('closeButton = '. closeButton);
	var dom = closeButton.replace('XXX', typeof callback !== 'undefined' ? callback : '');
	return (editable ? dom+'<a href="javascript:void(0);" class="pencil" onclick="openHSTModal(event);"></a>' : dom );
}


function closeButtonCorpTaxCallback(callback, editable) {
    //alert('closeButton = '. closeButton);
    var dom = closeButton.replace('XXX', typeof callback !== 'undefined' ? callback : '');
    return (editable ? dom+'<a href="javascript:void(0);" class="pencil" onclick="openCorpTaxModal(event);"></a>'  : dom );
}

function openCorpTaxModal(e)
{

    var modalname = "modal_S_corptax"; 
    current_modal = modalname; 
    var btn = $("#confirmCorpTaxButton")
    btn.html('Update Payment'); 

    // store an EDIT flag on the button 
    btn.data('edit', true); 

    // store the row that these values need to update
    var tr = $(e.target).closest('tr');
    btn.data("rowtarget", tr); 

    // get targets for the fields in the modal for populating
    var corptax_business_number = document.getElementById('corptax_business_number'); 
    var corptax_total_payment = document.getElementById("corptax_total_payment");
    var corptax_payment_date = document.getElementById("corptax_payment_date");
   
     // populate based on what's in the row
    var tbl_corptax_business_number = tr.find('.tbl_corptax_business_number');
    var tbl_corptax_total_payment = tr.find('.tbl_corptax_amount');
    var tbl_corptax_payment_date = tr.find('.tbl_corptax_payment_date');
    
    console.log("tbl_corptax_amount = "+ tbl_corptax_total_payment.val()); 

    corptax_business_number.value  = tbl_corptax_business_number.val();
    corptax_total_payment.value = tbl_corptax_total_payment.val();
    corptax_payment_date.value = tbl_corptax_payment_date.val();

    $("#" + current_modal).modal('show');

    extra_fields = corptax_fields;

}


function openHSTModal(e)
{
	var modalname = "modal_S_HST"; 
	current_modal = modalname; 
	var btn = $("#confirmHSTButton")
	btn.html('Update Payment'); 

	// store an EDIT flag on the button 
	btn.data('edit', true); 

	// store the row that these values need to update
	var tr = $(e.target).closest('tr');
	btn.data("rowtarget", tr); 

	// get targets for the fields in the modal for populating
	var tax_business_number = document.getElementById('tax_business_number'); 
    var tax_period_end = document.getElementById("tax_period_end");
    var tax_due_date = document.getElementById("tax_due_date");
    var tax_installment_payment = document.getElementById("tax_installment_payment");
    var tax_amount_owing = document.getElementById("tax_amount_owing");
    var tax_other_payment = document.getElementById("tax_other_payment"); 
    var tax_audit_assessment = document.getElementById("tax_audit_assessment"); 
     // populate based on what's in the row
    var tbl_tax_business_number = tr.find('.tbl_tax_business_number');
	var tbl_tax_period_end = tr.find('.tbl_tax_period_end');
	var tbl_tax_due_date = tr.find('.tbl_tax_due_date');
	var tbl_tax_installment_payment = tr.find('.tbl_tax_installment_payment');
    var tbl_tax_other_payment = tr.find('.tbl_tax_other_payment');
    var tbl_tax_audit_assessment = tr.find('.tbl_tax_audit_assessment');
    var tbl_tax_total_payment = tr.find('.tbl_tax_total_payment');
    var tbl_tax_amount_owing = tr.find('.tbl_tax_amount_owing');

    tax_business_number.value  = tbl_tax_business_number.val();
    tax_period_end.value = tbl_tax_period_end.val();
    tax_due_date.value = tbl_tax_due_date.val();
    tax_installment_payment.value = tbl_tax_installment_payment.val();
    tax_audit_assessment.value = tbl_tax_audit_assessment.val();
    tax_other_payment.value = tbl_tax_other_payment.val();
    tax_amount_owing.value = tbl_tax_amount_owing.val();

    totalTaxes();
	
    $("#tax_installment_payment").on("change paste keyup", totalTaxes);
    $("#tax_amount_owing").on("change paste keyup", totalTaxes);
    $("#tax_other_payment").on("change paste keyup", totalTaxes);
    $("#tax_audit_assessment").on("change paste keyup", totalTaxes);


    $("#" + current_modal).modal('show');

	extra_fields = hst_fields;
}


function openPD7AModal(e)
{
	var modalname = "modal_S_EPR"; 
	current_modal = modalname; 
	var btn = $("#confirmPD7AButton")
	btn.html('Update Payment'); 
	
	// store an EDIT flag on the button 
	btn.data('edit', true); 

	// store the row that these values need to update
	var tr = $(e.target).closest('tr');
	btn.data("rowtarget", tr); 

	// get targets for the fields in the modal for populating
	var gross_payroll = document.getElementById('gross_payroll'); 
    var business_number = document.getElementById("business_number");
    var number_of_employees = document.getElementById("number_of_employees");
    var total_deductions = document.getElementById("total_deductions");
    var period_end = document.getElementById("remitting_period");
    var payment_date = document.getElementById("payment_date"); 


    // populate based on what's in the row
    var amount = tr.find('.tbl_total_deductions');
	var memo = tr.find('.tbl_business_number');
	var employees = tr.find('.tbl_number_of_employees');
	var payroll = tr.find('.tbl_gross_payroll');
    var date_end = tr.find('.tbl_period_end');
    var date_payment = tr.find('.tbl_payment_date');
   
	gross_payroll.value = payroll.val();
    total_deductions.value = amount.val();
    payment_date.value = date_payment.val();
	number_of_employees.value = employees.val();
	period_end.value = date_end.val();
	business_number.value = memo.val();	

	console.log(btn.data("rowtarget"));
	$("#" + current_modal).modal('show');

	extra_fields = pd7a_fields;


}




//----- order
// this is now utilized on the dashboard for the quick pay option as well 
function changeMethodOfReceiptDropDown(profileId, target_element, dropdown_name) {

    var sel = $(target_element);
    var newOptions = [];
    var values = supplier_lookup[profileId].payments;
    current_supplier = profileId; 

   
   	
    var suppliername  = $("#"+dropdown_name+" option:selected").text();
    var accountnumber = supplier_lookup[profileId].accountnumber; 
    console.log(supplier_lookup[profileId]); 

   


    // trigger the PD7A modal 
    if(suppliername.indexOf("PD7A") > -1 )
    {
    	
        
        var modalname = "modal_S_EPR";
        current_modal = modalname; //getElementById(modalname); 
        $('#confirmPD7AButton').data('edit', null); 
        $('#confirmPD7AButton').data("rowtarget", null); 

        $("#" + current_modal).modal('show');

        extra_fields = pd7a_fields;
       
        if(accountnumber == "")
        {
            $("#" + current_modal).find("#business_number").attr("value", "");
            $("#" + current_modal).find("#business_number").removeAttr("readonly");

        }
        else
        {
            $("#" + current_modal).find("#business_number").attr("value", accountnumber);
            $("#" + current_modal).find("#business_number").prop("readonly", true);
        }
         // clear out the fields forthe modals 
        for (var i = 0; i < extra_fields.length; i++) {
            var elem = $('#' + extra_fields[i][0]);
            elem.attr('value', ''); 
        }

        
    }else if(suppliername.indexOf("Federal - GST/HST") > -1)
    {

    	var modalname = "modal_S_HST";
        current_modal = modalname; //getElementById(modalname); 
        totalTaxes();
        
        $('#confirmHSTButton').data("edit", null);
        $('#confirmHSTButton').data("rowtarget", null);

        console.log("account numner "+accountnumber); 

        if(accountnumber == "")
        {
            $("#" + current_modal).find("#tax_business_number").attr("value", "");
            $("#" + current_modal).find("#tax_business_number").removeAttr("readonly");
        }else
        {
             var f = $("#" + current_modal).find("#tax_business_number");
             f.attr("value", accountnumber); 
             
             f.val(accountnumber); 

             

             $("#" + current_modal).find("#tax_business_number").prop("readonly", true);
        }



        $("#" + current_modal).modal('show');

        $("#tax_installment_payment").on("change paste keyup", totalTaxes);
        $("#tax_amount_owing").on("change paste keyup", totalTaxes);
        $("#tax_other_payment").on("change paste keyup", totalTaxes);
        $("#tax_audit_assessment").on("change paste keyup", totalTaxes);



        extra_fields = hst_fields;
         // clear out the fields forthe modals 
        for (var i = 0; i < extra_fields.length; i++) {
            var elem = $('#' + extra_fields[i][0]);
            elem.attr('value', ''); 
        }


    }else if(suppliername.indexOf("Federal - Corporation Tax Payments -- TXINS") > -1)
    {
        var modalname = "modal_S_corptax";
        current_modal = modalname; 
        $('#confirmCorpTaxButton').data('edit', null);
        $('#confirmCorpTaxButton').data('rowtarget', null);


        $("#" + current_modal).modal('show');
        if(accountnumber == "")
        {
            $("#" + current_modal).find("#corptax_business_number").attr("value", ""); 
             $("#" + current_modal).find("#corptax_business_number").removeAttr("readonly");
        }else
        {
             $("#" + current_modal).find("#corptax_business_number").val(accountnumber); 
             $("#" + current_modal).find("#corptax_business_number").prop("readonly", true);
        }
       

        extra_fields = corptax_fields;
         // clear out the fields forthe modals 
        for (var i = 0; i < extra_fields.length; i++) {
            var elem = $('#' + extra_fields[i][0]);
            elem.attr('value', ''); 
        }
    }


   


    for (var i in values) {
        newOptions.push (values[i]);
    }


  
    

    sel.empty(); // remove old options
    var pref = "";
    var icon_html = ""; 
    $.each(newOptions, function(key, value) {
        
        pref = "";
        if(value.is_preferred == 1)
        {
            pref = value.id; 
            
        } 

        if(direct_pay_skus.indexOf(value.sku) > -1 )
        {
              if(value.sku == "S_MC")
                {
                   icon_html += ' <img src="/images/fudning_icon_mastercard.png" width="30">'; 

                }else if(value.sku == "S_VISA")
                {
                    icon_html += ' <img src="/images/funding_icon_visa.png" width="30">'; 

                }else if(value.sku == "S_AMEX")
                {
                    icon_html += '  <img src="/images/funding_icon_credit_cardcc_2.png" width="30">'; 
                }

        }

        var optionhtml = "<option value='"+value.id+"' data-sku='"+value.sku+"' data-days-to-pay='"+value.days+"' data-currency='"+value.currency_code+"'"; 
        if(pref!= "")
        {
            optionhtml += " selected>"; 
        }else
        {
            optionhtml += ">";
        }

        optionhtml += value.name +"</option>"; 

        //sel.append($("<option></option>").attr("value", value.id).attr("data-sku", value.sku).text(value.name));
        sel.append(optionhtml); 

    });

    

    if(pref != "")
    {
        payment_acceptance_limit    = supplier_lookup[profileId].payments[pref].accept_limit; 
        payment_sku                 = supplier_lookup[profileId].payments[pref].sku; 
       // $(target_element+' option:[value="'+pref+'"]').attr("selected", "selected"); 
    }else
    {
        //$(target_element+' option:last').attr("selected", "selected"); 
        payment_sku                 = supplier_lookup[profileId].payments[$(target_element+' option:last').val()].sku; 
        payment_acceptance_limit    = supplier_lookup[profileId].payments[$(target_element+' option:last').val()].accept_limit;
    }

    console.log("preference = "+ payment_acceptance_limit); 
    $("#icon_cell").html(icon_html); 


    // in a Dashboard context this gets called 
    updateAvailableFundingAccounts();

    // in an Order context this gets called 
    updateDefaultDateOfPayment(sel);

    

}

// only useful in the Order workflow / context 

function updateDefaultDateOfPayment(jqobject)
{
    // get the dropdown value 
    // days to pay 
    var days_to_pay = jqobject.find(":selected").attr('data-days-to-pay'); 
    $.get("/order/ajax/getpaymentdate?sku="+ jqobject.find(":selected").attr("data-sku"), function(data){
        console.log(data); 

        $("#date_of_payment_default").attr("value", data[0]);  
    });
  
   

}


// currently only used on Dashboard but MAY Be called from Order Workflow as well.... 
function updateAvailableFundingAccounts()
{
    var selected_payment_method = $("#method_of_receipt").find(":selected"); 
    var disbursement = supplier_lookup[$("#profile_id").find(":selected").val()].payments[selected_payment_method.val()];
    var target_currency = disbursement.currency_code; 
    
    //loop through the options in the funding dropdown and hide any that don't match, UNLESS it's a WP Shared Account 
    $("#funding_account > option").each(function() {
        
        console.log("checking currency for  "+this.text+" ("+$(this).attr('data-currency') +") against target currency of "+ target_currency ); 

        if($(this).attr('data-currency') != target_currency && this.text.indexOf("WayPay") < 0 )
        {
            $(this).prop('disabled', true); 
            $(this).removeAttr('selected'); 

        }else
        {
             $(this).prop('disabled', false); 
        }
    });
}








// this looks deprecated 
function setPreferenceLimits(e)
{
    console.log($(e.target)); 

}


function totalTaxes() {
    console.log("calculate!!!!");
    
	console.log($("#total_tax_label"));
    var tax1 = Number($("#tax_installment_payment").val());
    var tax2 = Number($("#tax_amount_owing").val());
    var tax3 = Number($("#tax_other_payment").val());
    var tax4 = Number($("#tax_audit_assessment").val());

    var amount = tax1 + tax2 + tax3 + tax4;
    
    $("#tax_total_payment").attr("value", amount);
    $("#total_tax_label").html(Number($("#tax_total_payment").val()).toCurrency());
}


function addPaymentOrder() {


    // source
	var form = document.getElementById("orderForm");


    // values
	var profile_id = document.getElementById('profile_id').value;
	var name = supplier_lookup[profile_id].name;
	var amount = document.getElementById('amount');
	var memo = document.getElementById('memo');
	var method_of_receipt = document.getElementById('method_of_receipt');
	var date_of_payment = document.getElementById('date_of_payment_default');
	
	// pd7a
	var gross_payroll = document.getElementById('pd7a_gross_payroll'); 
    var business_number = document.getElementById("pd7a_business_number");
    var number_of_employees = document.getElementById("pd7a_number_of_employees");
    var total_deductions = document.getElementById("pd7a_total_deductions");
    var period_end = document.getElementById("pd7a_period_end");
 	var payment_date = document.getElementById("pd7a_payment_date");



 	// HST GST
 	var tax_period_end = document.getElementById('tax_period_end'); 
 	var tax_due_date = document.getElementById('tax_due_date');
	var tax_installment_payment = document.getElementById('tax_installment_payment');
 	var tax_amount_owing = document.getElementById('tax_amount_owing');
  	var tax_other_payment = document.getElementById('tax_other_payment');
  	var tax_audit_assessment = document.getElementById('tax_audit_assessment');
  	var tax_total_payment = document.getElementById('tax_total_payment');
  	var tax_business_number = document.getElementById('tax_business_number');

    //corptax 
    var corptax_business_number = document.getElementById('corptax_business_number'); 
    var corptax_total_payment = document.getElementById('corptax_total_payment');
    var corptax_payment_date = document.getElementById('corptax_payment_date');


  	var pd7a            = false;
    var hst             = false;
    var corptax         = false;
    
    if(gross_payroll.value)
    {
    	pd7a = true;
    }

    if(tax_total_payment.value)
    {
    	hst = true;
    }

    if(corptax_total_payment.value)
    {
        corptax = true;
    }

 //    console.log("PD7A? "+pd7a +"("+gross_payroll.value+")"); 
	// console.log("HST? "+hst+"("+tax_period_end.value+")"); 
 //    console.log("Default date of Payment "+ date_of_payment.value);
 //    console.log("method_of_receipt = "+method_of_receipt.value); 

    // target
	var table = document.getElementById("orderTable");
	var $row = $(table.insertRow(1));

	$row.hide();

    // copy and create new
	var clone = $('#dummyRow').clone();


    // ****************DIRECT PAY 
    var dp_action = "";
    


	clone.find('.tbl_supplier').html(name+dp_action);
    clone.find('.tbl_supplieri').attr('value', profile_id);

	clone.find('.tbl_amount').html(Number(amount.value).toCurrency());
    clone.find('input.tbl_amounti').attr('value', amount.value);

    var amount_to_show = amount.value; 

    if(payment_acceptance_limit > 0 && amount.value > payment_acceptance_limit)
    {
        alert("This amount exceeds what this supplier is willing to accept via this payment method. The limit is "+Number(payment_acceptance_limit).toCurrency()); 
        return; 
    }



    //PD7A 
    if(amount.value == "")
    {

        // let's see if it's a PD7A 
        amount_to_show = total_deductions.value; 
        clone.find('.tbl_amount').html(Number(total_deductions.value).toCurrency());
    	clone.find('input.tbl_amounti').attr('value', total_deductions.value);

    	//HST
    	if(total_deductions.value == "")
    	{	
    		amount_to_show = tax_total_payment.value; 
    		clone.find('.tbl_amount').html(Number(tax_total_payment.value).toCurrency());
    		clone.find('input.tbl_amounti').attr('value', tax_total_payment.value);
    	}

        // corp tax 
        if(tax_total_payment.value=="" && total_deductions.value=="")
        {
            amount_to_show = corptax_total_payment.value; 
            clone.find('.tbl_amount').html(Number(corptax_total_payment.value).toCurrency());
            clone.find('input.tbl_amounti').attr('value', corptax_total_payment.value);
        }
    }



    clone.find('.tbl_memo').html(memo.value);
    clone.find('input.tbl_memoi').attr('value', memo.value);

    //PD7A
    if(memo.value == "")
    {
    	clone.find('.tbl_memo').html(business_number.value);
    	clone.find('input.tbl_memoi').attr('value', business_number.value);

    	// HST 
    	if(business_number.value == "")
    	{
    		clone.find('.tbl_memo').html(tax_business_number.value);
    		clone.find('input.tbl_memoi').attr('value', tax_business_number.value);
    	}

        // Corp tax 
        if(tax_business_number.value == "")
        {
            clone.find('.tbl_memo').html(corptax_business_number.value);
            clone.find('input.tbl_memoi').attr('value', corptax_business_number.value);
        }
    }


    // set the select options of tbl_method to the only options the user can pick from supplier_lookup
	clone.find('.tbl_method').attr('value', method_of_receipt.value);

    
    // little consideration here for our DIRECT PAY methods 
    var pre_icon = ""; 
    var is_directpay = 0; 
    if(supplier_lookup[profile_id].payments[method_of_receipt.value].sku == "S_MC")
    {
        pre_icon = ' <img src="/images/fudning_icon_mastercard.png" width="30">'; 
        is_directpay = 1;

    }else if(supplier_lookup[profile_id].payments[method_of_receipt.value].sku == "S_VISA")
    {
        pre_icon = ' <img src="/images/funding_icon_visa.png" width="30">'; 
        is_directpay = 1;
    }else if(supplier_lookup[profile_id].payments[method_of_receipt.value].sku == "S_AMEX")
    {
        pre_icon = '  <img src="/images/funding_icon_credit_cardcc_2.png" width="30">'; 
        is_directpay = 1;
    }


    clone.find('.tbl_icon').html(pre_icon); 
    clone.find('.tbl_is_directpay').attr("value", is_directpay); 
	clone.find('.tbl_method').html($(method_of_receipt).find('option:selected').text());
    clone.find('input.tbl_methodi').empty();

    var values = supplier_lookup[profile_id].payments;
    var currency_code = supplier_lookup[profile_id].payments[method_of_receipt.value].currency_code;
   
    console.log("currency code = "+currency_code); 
    console.log('method of method_of_receipt = '+method_of_receipt)
    clone.find('.tbl_currencycode').attr('value', currency_code);
    

    var newOptions = [];

    for (var i in values) {
        newOptions.push (values[i]);
    }

    // sel.append($("<option disabled selected>Select</option>"));
    $.each(newOptions, function(key, value) {
        clone.find('.tbl_methodi').append($("<option></option>")
            .attr("value", value.id).text(value.name));
    });
     
     // now let's set the SELECTED state of our cloned dropdown. 
	 var selectedValue = method_of_receipt.value;
     clone.find('.tbl_methodi').find("option[value = '" + selectedValue + "']").attr("selected", "selected");
    
    
  
    clone.find('.tbl_date').html(date_of_payment.value);
    clone.find('.tbl_datei').find('input').val(date_of_payment.value).attr("defaultValue", date_of_payment.value);


    // add any relevant PD7A fields. 
    clone.find('.tbl_gross_payroll').attr('value', gross_payroll.value); 

    
    
    clone.find('.tbl_business_number').attr('value',business_number.value); 
    clone.find('.tbl_number_of_employees').attr('value',number_of_employees.value); 
    clone.find('.tbl_total_deductions').attr('value',total_deductions.value); 
    clone.find('.tbl_period_end').attr('value',period_end.value); 
    
    console.log("tbl_period_end = "+  clone.find('.tbl_period_end').val()); 

     // add any relevant HST/GST fields. 
    clone.find('.tbl_tax_period_end').attr('value', tax_period_end.value); 
    clone.find('.tbl_tax_due_date').attr('value',tax_due_date.value); 
    clone.find('.tbl_tax_business_number').attr('value', tax_business_number.value); 
    clone.find('.tbl_tax_installment_payment').attr('value', tax_installment_payment.value);
    clone.find('.tbl_tax_other_payment').attr('value',tax_other_payment.value); 
    clone.find('.tbl_tax_audit_assessment').attr("value", tax_audit_assessment.value); 
    clone.find('.tbl_tax_total_payment').attr("value", tax_total_payment.value);
    clone.find('.tbl_tax_amount_owing').attr('value',tax_amount_owing.value); 
    
    console.log("corptax_business_number.value=" + corptax_business_number.value);
    console.log("corptax_total_payment.value=" + corptax_total_payment.value);
    console.log("corptax_payment_date.value=" + corptax_payment_date.value);

    // add relevant corp tax fields
    clone.find('.tbl_corptax_business_number').attr('value', corptax_business_number.value); 
    clone.find('.tbl_corptax_amount').attr('value',corptax_total_payment.value); 
    clone.find('.tbl_corptax_payment_date').attr('value', corptax_payment_date.value); 

    

    // Overrides for for PD7A and HST scenarios 
    if(pd7a)
    {
        console.log("using PD7A Dates"); 
    	clone.find('.tbl_date').html(payment_date.value);
    	clone.find('.tbl_datei').find('input').attr('value', payment_date.value);
        clone.find('.tbl_datei').attr('data-default-date', payment_date.value).find('input').val(payment_date.value);

    }else if(hst)
    {
        console.log("using HST Dates"); 
    	clone.find('.tbl_date').html(tax_due_date.value);
    	
        var dtp = clone.find('.tbl_datei').find('.datetimepicker'); 

        //clone.find('.tbl_datei').find('input').attr('value', tax_due_date.value);
        clone.find('.tbl_datei').attr('data-default-date', tax_due_date.value).find('input').val(tax_due_date.value);


    }else if(corptax)
    {
        console.log("using Corp Tax Dates");
        clone.find('.tbl_date').html(corptax_payment_date.value);
        clone.find('.tbl_datei').attr('data-default-date', corptax_payment_date.value).find('input').val(corptax_payment_date.value);
    }
    else
    {
        console.log("using 'normal' Dates");

        clone.find('.tbl_date').html(date_of_payment.value);
	    // This is actually a complete red herring. See updateDateTimePickers()
        clone.find('.tbl_datei').attr('data-default-date', date_of_payment.value).find('input').val(date_of_payment.value);
    }

    

  
    if(pd7a)
    {
    	clone.find('.tbl_close').html(closeButtonPD7ACallback('removePaymentOrder(this);', true));

    }else if(hst)
    {
    	clone.find('.tbl_close').html(closeButtonHSTCallback('removePaymentOrder(this);', true));
    }else if(corptax)
    {
        clone.find('.tbl_close').html(closeButtonCorpTaxCallback('removePaymentOrder(this);', true)); 
    }else
    {
    	clone.find('.tbl_close').html(closeButtonCallback('removePaymentOrder(this);', true));
    }

	$row.append(clone.html())
		.show(1000);


	updateOrderTotal(amount_to_show.toNumber(), currency_code);
	updateDateTimePickers();

    document.getElementById('pd7a_form').reset();; // <-- why no worky... 
    document.getElementById('hst_form').reset(); // <-- why no worky... 


    // pd7a form clear
     gross_payroll.value = "";  
     business_number.value = "";
     number_of_employees.value = "";
     total_deductions.value = "";
     period_end.value = "";
     payment_date.value = "";

    // HST GST form clear
     tax_period_end.value = "";
     tax_due_date.value = "";
     tax_installment_payment.value = "";
     tax_amount_owing.value = "";
     tax_other_payment.value = "";
     tax_audit_assessment.value = "";
     tax_total_payment.value = "";
     tax_business_number.value = "";
     $("#total_tax_label").html("");  

     // corp tax clear 
     corptax_business_number.value = ""; 
     corptax_total_payment.value = "";
     corptax_payment_date.value = ""; 

     
    
    form.reset();
    $("#icon_cell").html(""); 
    $('#profile_id').trigger('chosen:updated');
}





function updateOrderTotal(delta, currency) {
	
    console.log("UpdateOrderAMount "+currency); 


    if(currency)
	{
		var total_elem = $('.total_'+currency);	
	}else
	{
		var total_elem = $('.total_CAD'); // TODO: Provide better fallback support	
	}

	//alert(total_elem.html()); 

	var total = total_elem.html().toNumber();
	total_elem.html((total + delta).toCurrency());



}

function removePaymentOrder(e) {

    var order_detail_id = $(e).parents('tr').find('#detailid'); 

    
    console.log("setting the OD_ID: "+ order_detail_id.val()); 

    if( !order_detail_id.val() )
    {
        console.log("not a saved item"); 
        
        var amount = $(e).parents('tr').find('.tbl_amount').html().toNumber();
        var currency_code = $(e).parents('tr').find('.tbl_currencycode').val(); 
        updateOrderTotal(-amount, currency_code);
        removeParentRow(e);
    }else
    {
         $("#payment-delete").modal("show"); 
         $("#payment-delete").data('order_detail_id', order_detail_id.val());    
    }
    
   
    
    return; 


    // the rest of this stuff likely won't get run by this method.. 


   

    var removeElement = $(e).parents('tr').find('.tbl_close').attr("data-source"); 
    
    console.log('order_detail_id= '+order_detail_id.val()); 
    console.log('removeElement source: '+ removeElement); 
    if(removeElement=="supplier")
    {
       

        // trigger a modal to tell the user it's been moved back into the parking lot 
        current_modal = "modal_message";
        $("#modal_message").modal('show');
        $("#messageCancelLink").hide();
        // send off a call to move it to parking 
        moveToParking(order_detail_id.val()); 
        $("#MessageDismissalBtn").click(function(e){

            $("#modal_message").modal('hide');

        });

        
         
    }
	
    updateOrderTotal(-amount, currency_code);
	
	removeParentRow(e);
}

function captureMoveToParking(e)
{
    var row = e.parents("tr").find('#detailid').val(); 
    var amount = $(e).parents('tr').find('.tbl_amount').html().toNumber();
    var currency_code = $(e).parents('tr').find('.tbl_currencycode').val(); 

    var parkingLotCount = Number($("#pending_payment_count").html());
    parkingLotCount++; 
    $("#pending_payment_count").html(parkingLotCount); 
    if(parkingLotCount > 0 )
    {
        $("#importFromPendingBtn").removeAttr("disabled");
    }

    console.log('amount =' + amount);
    console.log('currency_code =' + currency_code);
    
    updateOrderTotal(-amount, currency_code);
    
    removeParentRow(e);

    // trigger a modal to tell the user it's been moved back into the parking lot 
    current_modal = "modal_message";
    $("#modal_message").modal('show');
    $("#messageCancelLink").hide();
    // send off a call to move it to parking 
    moveToParking(row); 
    $("#MessageDismissalBtn").click(function(e){

        $("#modal_message").modal('hide');

    });

}


function moveToParking(order_detail_id)
{
   
    $.get("/order/ajax/moveitemtoparking/"+order_detail_id, function(data){
        console.log(data); 
    });
}


function removeParentRow(elem) {
	$(elem).parents('tr').remove();
}

function updateAvailableBalance(delta, value) {


	var selectedOption = value ? $('#funds option[value="' + value + '"]') : $('#funds option:selected');

	var available = selectedOption.data('content').replace(/.*Available: /, '').replace(/<br>.*/, '');
	var balance = selectedOption.data('content').replace(/.*Balance: /, '').replace(/<br>.*/, '');

	selectedOption.data('content', selectedOption.data('content')
		.replace(/Available: .+?<br>/, 'Available: ' + (available.toNumber() + delta).toCurrency() + '<br>')
		.replace(/Balance: .+?<br>/, 'Balance: ' + (balance.toNumber() + delta).toCurrency() + '<br>')
	);
}

//----- order2

function confirmFundingRequest()
{
 

    $("#fx_rate_notes").html('');
    $("#confirmation_notes").html(''); 
    var confirmbtn = $("#modal-confirm-funding #confirmFundingRequest"); 
    confirmbtn.attr("disabled", "disabled");
    confirmbtn.show();

    var msg = ""; 
    
    // get the amount in question 
    var take_this_much_elem = $('#take_this_much');
    var section = $('#currency_' + $('#currency').val());
    var amt = Number(take_this_much_elem.val());
    var funded_elem = section.find('.funded');
    var remaining_elem = section.find('.remaining');
    var funded = funded_elem.text().toNumber();
    var remaining = remaining_elem.text().toNumber();

    if(amt > remaining) 
    {
        amt = remaining; 
        take_this_much_elem.val(remaining);
    }

     // get the accounts they are using 
    var selectedOption = $('#funds option:selected');
    var hasfx = false; 
    var target_currency_code = $('#currency  option:selected').text();
    var account_currency_code =  funding_lookup[selectedOption.val()].currency_code; 
    var product_sku  = funding_lookup[selectedOption.val()].sku;
    // TODO 
    // Check for account balances but ONLY if it's WayPay Shared accounts 
    if(product_sku == "P_WPCAD" || product_sku == "P_WPUSD")
    {
        console.log("check for account balance"); 

        if(Number(selectedOption.attr('data-account-balance')) < amt)
        {
            alert("You do not have sufficient funds in your account to fund $"+amt+". Please select another account."); 
            return; 
        }
    }    


    // get the currency
    
     if(product_sku == "P_MC")
     {
        fi = '<img src="/images/fudning_icon_mastercard.png" width="80">'; 
     }else if(product_sku == "P_VISA")
     {
        fi = '   <img src="/images/funding_icon_visa.png" width="80">'; 

     }else if(product_sku == "P_AMXBIPUSD" || product_sku == "P_AMXBIPCAD" || product_sku == "P_AMXCAD" || product_sku == "P_AMXUSD")
     {
        fi = ' <img src="/images/funding_icon_credit_cardcc_2.png" width="80">'; 
     }else
     {
        fi = '<img src="/images/icon_bank_in_circle2colour.svg" width="80">'; 
     }
          
    console.log("product_sku  " + product_sku ); 
    
    var account_msg = "<span class='medium_text_display'>"+selectedOption.text()+"</span><br>("+account_currency_code+")";
    $("#confirmation_account_message").html(account_msg); 
    $("#funding_source_icon").html(fi); 

    console.log(fi); 

   
    msg = msg +" <span class='medium_text_display'>"+amt.toCurrency()+"</span><br>("+target_currency_code+")<br>"; 
    
    $("#confirmation_amount_message").html(msg);    

    


    
    //************ ACCOUNT BALANCE STUFF
    // do we know the account balance?
    var account_balance = Number(funding_lookup[selectedOption.val()].available);
    var confirmationmsg = ""; 

    console.log("account balance = "+account_balance + ", amount ="+ amt); 
    if(amt > account_balance)
    {
        confirmationmsg = confirmationmsg+"Please note that this amount exceeds the known available funds currently in this account. <br>"; 

    }

    // ******** END ACCOUNT BALANCE STUFF

    //************ EXCHANGE RATE STUFF
    var fxmsg = "";//"in "+target_currency_code;
  

    $("#modal-confirm-funding").modal('show');
    confirmbtn.data('amount', amt);
    
    if(target_currency_code == account_currency_code)
    {
        // make the adjustment to the order math here 
        if(amt > remaining) 
        {
            take_this_much_elem.val(remaining); 
            amt = remaining; 
        }
        confirmbtn.removeAttr('disabled');
        confirmbtn.data('amount', amt);
        confirmbtn.data('fxrate', 1);
        confirmbtn.data('fxamount', amt);
        confirmbtn.data('fx_deal_key', "");
        //$("#fx_rate_notes").html(fxmsg);
        $("#confirmation_notes").html(confirmationmsg); 

        confirmbtn.click(function () {
            
            console.log(confirmbtn.data('fxrate')); 
            addFundingOrder(confirmbtn.data('fxrate'),confirmbtn.data('amount'), selectedOption.val(),  confirmbtn.data('fxamount'),confirmbtn.data('fx_deal_key')); 
        });



    }else // currency conversion 
    {
        hasfx = true;
        rate = 1.32;  
        console.log("get the FX Rate");
        $("#fx_rate_notes").html("Retrieving exchange rate...");

        $.get("/order/ajax/getfxrate", { "currency_code": target_currency_code, "amount": amt, "buying":account_currency_code }, function(data){
            console.log("-----------PAYLINE CALL: "); 
            rate = data.fxrate;
            var failed = data.flag; 
            if(failed!=undefined)
            {
                console.log("well that was a failure"); 
                fxmsg = "<div class='error'>We were not able to retrieve the exchange rate for this transaction. A customer support specialist has been notified but you are welcome to contact us at support@waypay.ca </div>"; 
                $("#fx_rate_notes").html(fxmsg);
                confirmbtn.hide();
            }else
            {

                fxamount = data.result;
                fx_deal_key=data.fx_deal_key;

                confirmbtn.data('fxrate', rate); 
                confirmbtn.data('amount', amt);
                confirmbtn.data('fxamount', fxamount);
                confirmbtn.data('fx_deal_key', fx_deal_key);
                fxmsg = fxmsg + " at an exchange rate of "+rate+".";
                fxmsg = fxmsg + "<br>This will result in "+Number(fxamount).toCurrency()+"* being withdrawn.";

                if((product_sku == "P_WPCAD" || product_sku == "P_WPUSD") && Number(fxamount) > account_balance  )
                {
                    fxmsg = fxmsg + "<br><span style='color:red;'>This amount <strong>exceeds</strong> the amount available in your WayPay Shared Account</span>.<br> Please pre-fund your WayPay account to complete this order.";
                    $("#fx_rate_notes").html(fxmsg);
                    confirmbtn.hide();
                    return;
                }

                var d = new Date();
                confirmationmsg = confirmationmsg+"<sup>*</sup>Rate as of "+d.getHours()+":"+d.getMinutes()+" today. Please note that this exchange rate will be recalculated when this payment order is submitted for processing."; 


                $("#fx_rate_notes").html(fxmsg);
                $("#confirmation_notes").html(confirmationmsg); 
                confirmbtn.removeAttr('disabled');
                confirmbtn.click(function () {
                    
                    console.log(confirmbtn.data('fxrate')); 
                    addFundingOrder(confirmbtn.data('fxrate'),confirmbtn.data('amount'), selectedOption.val(), confirmbtn.data('fxamount'),confirmbtn.data('fx_deal_key')); 
               });

            }

        });
    }
}


// **********  submitted via confirmation modal 

function addFundingOrder(fx, amt, accountid, fxamount, fx_deal_key) {

    $("#modal-confirm-funding").modal('hide');

    // need to determine if we already have a decision to pull from a certain account
    // if so... need to UPDATE that portion of the order, not create a new order row


    var fxrate = fx; 
    var adjustedamount = amt; 
	var section = $('#currency_' + $('#currency').val());

	var funded_elem = section.find('.funded');
	var remaining_elem = section.find('.remaining');
	var take_this_much_elem = $('#take_this_much');

	var both = funded_elem.add(remaining_elem);

	funded_elem.finish();
	remaining_elem.finish();

	// if the target currency and the funding currency are the same then 
	// `take_this_much` and `fund_this_much` will remain the same. 
	// But if there's a currency conversion going on it's going to change...  
	var take_this_much = take_this_much_elem.val().toNumber();
	var fund_this_much = take_this_much; 

	var funded = funded_elem.text().toNumber();
	var remaining = remaining_elem.text().toNumber();

    if(take_this_much > remaining)
    {
        take_this_much = remaining; 
    }

	var selectedOption = $('#funds option:selected');

    console.log("accountid = "+accountid);
	
	var target_currency_code = $('#currency  option:selected').text();
	var account_currency_code =  funding_lookup[accountid].currency_code//funding_lookup[selectedOption.val()].currency_code; 

    displayFundingOrderAdjustments(fxrate, take_this_much, take_this_much_elem, remaining, funded, both, selectedOption, funded_elem, remaining_elem, section, fxamount, fx_deal_key);
    updateInternalFundingObject( $('#currency').val() , take_this_much );

	
}




function displayFundingOrderAdjustments(fxrate, take_this_much, take_this_much_elem, remaining, funded,  both, selectedOption, funded_elem, remaining_elem, section, fxamount, fx_deal_key)
{
	
	console.log("take this much= "+take_this_much);
	console.log("fxrate = "+fxrate);
	console.log("remaining = "+remaining);
    console.log("fxamount = "+fxamount); 
	
	if (take_this_much > 0 && take_this_much <= remaining) {

		$('#tipAmount').html(take_this_much.toCurrency());
		$('#tipSource').html(selectedOption.text());
		$('#tipCurrency').html($('#currency  option:selected').text() );

		$('#tip').finish();
		$('#tip').css('opacity', 0).animate({opacity: 1}, {queue: false, duration: 500});

		updateAvailableBalance(-take_this_much);
		
		both.animate({backgroundColor: '#ffffaa'}, 500)
			.promise().done(function() {
				animateNumber(funded_elem, funded + take_this_much);
				animateNumber(remaining_elem, Math.max(remaining - take_this_much, 0));

				addFundingOrderRow(fxrate, take_this_much, selectedOption.val(), fxamount, fx_deal_key);

				both.delay(100).animate({backgroundColor: 'transparent'}, 500).promise().then(function() {

					var funded_wrapper = section.find('.funded_wrapper');
					if (remaining - take_this_much <= 0) {
						funded_wrapper.removeClass('hidden');
                        // see if the whole order is funded
                        checkOrderForFundingCompletion();

					} else {
						funded_wrapper.addClass('hidden');
					}
				});

		});

	}
}


function updateInternalFundingObject(currency_id, amount)
{
    if(funding_committments[currency_id])
    {
        var amt = funding_committments[currency_id] + amount;
        amt = Math.round(amt * 100) / 100 ; 

        funding_committments[currency_id] = amt; 

    }else
    {
        funding_committments[currency_id] = Math.round(amount * 100) / 100; 
    }
    console.log("updateInternalFundingObject()");

    console.log(funding_committments); 
}



function checkOrderForFundingCompletion(shoutout)
{

    // look at all the items that we have to fund 
   
    var complete = true; 

    $.each(funding_requirements, function(i, v){
        console.log(funding_requirements[i] +":"+funding_committments[i]);
        var fc = funding_committments[i]; 
        if(fc == undefined && funding_requirements[i] == 0) fc = 0; 
        if(funding_requirements[i] != fc)
        {
            complete = false;
        } 
    });

    console.log("Are we funded ?"+ complete); 


    // check to see if there is some direct pay business to deal with 



    if(!shoutout)
    {
        if(complete)
        {
             // trigger a modal 
            $("#modal-funding-complete").modal("show"); 
            $("#modal-funding-complete #continuetostep3").click(function(){
                triggerDateSelector();
            });
        }
    }else
    {
        if(complete)
        {
             triggerDateSelector();
        }else
        {
             alert("Please fulfill all funding requirements");
        }
    }

}





function addFundingOrderRow(fxrate, newamount, accountid, fxamount, fx_deal_key) {

    var form = document.getElementById('fundingForm');
	var selected_cycle_id = document.getElementById('bip_cycle').value; 

    console.log("addFundingOrderRow.accountid = "+ accountid);
    console.log("addFundingOrderRow.newamount = "+ newamount);
    console.log("addFundingOrderRow.fxrate = "+ fxrate);
    console.log("addFundingOrderRow.fxamount = "+ fxamount);
	
    var funds = document.getElementById('funds');
	if(!newamount)
	{
		var take_this_much = document.getElementById('take_this_much');	
	}else 
	{
		var take_this_much = newamount; 
	}
	

	var currency = document.getElementById('currency');

	// TODO:  update this cause it's, well, limited 
    var currencyName = $('#currency  option:selected').text();
    
    var selectedOption = $('#funds option:selected');
	var table = document.getElementById('table_' + currencyName);
    
    var rowid = "fa_"+accountid; 
    var t = $("#table_" + currencyName);

    // check to see if we have this account already in our table 
    var row ; 

    row = $(t).find("tr[id="+rowid+"]");

   
    if(row.length)
    {
        // update what's here. 
        console.log("UPDATE THE ROW!! "); 
        var amt_field = row.find("input[name=amount\\[\\]]"); 
        var amtfx_field = row.find("input[name=fxamount\\[\\]]");
        
        var oldamount = Number(amt_field.val()); // the original amount in the row 
        var oldfxamount = Number(amtfx_field.val());
        console.log(" old amount =  "+ (oldamount)); 
        
        var thenewstuff = oldamount+(newamount);
        var thenewfxamount = oldfxamount + Number(fxamount); 
        console.log(" new total =  "+ (thenewstuff)); 

        amt_field.val(thenewstuff); 
        amtfx_field.val(thenewfxamount);

        
        row.find("td:eq(4)").html(Number(thenewstuff).toCurrency()+'<input type="hidden" name="fxamount[]" value="'+thenewfxamount+'"/>' + '<input type="hidden" name="fx_deal_key[]" value="'+fx_deal_key+'"/>'); 
        row.find("td:eq(1)").html(Number(thenewstuff).toCurrency()+'<input type="hidden" name="amount[]" value="'+ thenewstuff +'"/>'); 
        row.find("td:eq(5)").html(closeButtonCallback('removeFundingOrderRow(this,'  + thenewstuff + ', \'' + currencyName + '\', \'' + selectedOption.val() + '\');'));
       

    }
    else
    {

        row = table.insertRow(1);
        $(row).hide()
        $(row).attr("id", "fa_"+accountid);
        $(row).show(1000);
        // inject some form elements in this here row.
        row.insertCell(0).innerHTML = selectedOption.text() + '<input type="hidden" name="fa_id[]" value="' + funds.value + '"/>'
            + '<input type="hidden" name="funding_id[]" value="0"/>'+'<input type="hidden" name="cycle_number[]" value="'+selected_cycle_id+'" />'+'<input type="hidden" name="is_directpay[]" value="0" />';
        row.insertCell(1).innerHTML = Number(newamount).toCurrency() + '<input type="hidden" name="amount[]" value="'+ take_this_much +'"/>';
        row.insertCell(2).innerHTML = currencyName + '<input type="hidden" name="currency[]" value="' + currency.value+ '"/>';
        row.insertCell(3).innerHTML = fxrate+ '<input type="hidden" name="fxrate[]" value="'+fxrate+'"/>';
        row.insertCell(4).innerHTML = Number(fxamount).toCurrency()+'<input type="hidden" name="fxamount[]" value="'+fxamount+'"/>' + '<input type="hidden" name="fx_deal_key[]" value="'+fx_deal_key+'"/>';
        row.insertCell(5).innerHTML = closeButtonCallback(
            'removeFundingOrderRow(this, ' + newamount + ', \'' + currencyName + '\', \'' + selectedOption.val() + '\');');



    }

	

    

	form.reset();

	$('.selectpicker').selectpicker('refresh');
}



function removeFundingOrderRow(e, amount, currency, source) {

	var index = $("#currency option:contains('" + currency + "')").val();
	var section = $('#currency_' + index);

    console.log("amount to remove is "+ amount); 

	var required_elem = section.find('.required');
	var funded_elem = section.find('.funded');
	var remaining_elem = section.find('.remaining');
	var both = funded_elem.add(remaining_elem);

	if (funded_elem.is(':animated') || remaining_elem.is(':animated'))
		return;

	removeParentRow(e);

	$(funded_elem).finish();
	$(remaining_elem).finish();

	var required = required_elem.html().toNumber();
	var funded = funded_elem.html().toNumber();	
	var remaining = remaining_elem.html().toNumber();

	var funded_new = funded - amount;
	var remaining_new = required - funded_new;

	updateAvailableBalance(amount, source);
	$('.selectpicker').selectpicker('refresh');

	both.animate({backgroundColor: '#ffffaa'}, 1000)
		.promise().done(function() {

			animateNumber(funded_elem, funded_new);
			animateNumber(remaining_elem, Math.max(remaining_new, 0));

			both.delay(500).animate({backgroundColor: 'transparent'}, 1000).promise().then(function() {

				var funded_wrapper = section.find('.funded_wrapper');
				if (remaining_new <= 0) {
					funded_wrapper.removeClass('hidden');
				} else {
					funded_wrapper.addClass('hidden');
				}
			});

		});

        updateInternalFundingObject(index, -(amount)); 

}
//---------- order3
function submitProcessingFees() {

	var form = document.getElementById("processingFeesForm");
	var funds = document.getElementById('funds');
	var amount = document.getElementById('amount');
	// let's also get a numeric version of this
	var amountnum = amount.value.replace("$", ""); 
	amountnum = amountnum.replace(",", ""); 
	amountnum = Number(amountnum); 

	var table = document.getElementById("processingFeesTable");

	var partB = document.getElementById('partB');

	var selectedOption = $('#funds option:selected');
	var target_currency_code = 'CAD'; // Assumes that all WayPay Fees are in CAD 
	var account_currency_code =  funding_lookup[selectedOption.val()].currency_code; 
	console.log("target payment currency = "+target_currency_code+", funding source currency ="+account_currency_code); 


	if(target_currency_code == account_currency_code)
	{

		addFeesRowToProcessingStep(form, funds, amountnum, account_currency_code, "1.0", table)
	}
	else
	{

		// if there's an FX conversion to be done... then let's bring up the blocker... 
		$('#myModal').modal('show');
		// let's do a test of the FX Rate 
		// TODO: MAKE SURE THAT THE FX SERVICE IS CONFIGURED TO THE RIGHT ENVIRONMENT???
		$.post( "ajax/getfxrate", { currency_code: target_currency_code, amount: amountnum })
		  .done(function( data ) {
		    fxrate 			= data.fxrate; 
		    adjustedamount 	= data.result;  
		    $('#myModal').modal('hide');
		  	console.log("fxrate ="+fxrate); 
		    // this is dirty AF but a quick refactor 
			addFeesRowToProcessingStep(form, funds, amountnum, account_currency_code, fxrate, table)
		  });
	}
}


function addFeesRowToProcessingStep(form, funds, amount, account_currency_code, fxrate, table){

// populate the hidden form 
	$('#fa_id').attr('value', funds.value);
	$('#processing_fees').attr('value', amount);
	$('#fxrate').attr('value', fxrate); 
	
	
	
	/*
	$(form).slideUp(1000, function() {

		$(partB).slideDown(1000, function() {
			var row = table.insertRow(1);
			
			row.insertCell(0).innerHTML = funding_lookup[funds.value].name;
			row.insertCell(1).innerHTML = Number(amount).toCurrency(); 
			row.insertCell(2).innerHTML = account_currency_code; // TODO: update this shiz 
			row.insertCell(3).innerHTML = fxrate; // TODO: update this shiz too
			row.insertCell(4).innerHTML = Number(amount*fxrate).toCurrency();
			row.insertCell(5).innerHTML = closeButtonCallback('removeProcessingFees(this);');		
			$(row).hide();
			$(row).fadeIn(500);
		});
	});
	*/

}

function removeProcessingFees(e) {

	removeParentRow(e);
	$('#fa_id').attr('value', '');
	$('#processing_fees').attr('value', '');
	$('#fxrate').attr('value', ''); 

	var partB = document.getElementById('partB');
	$(partB).slideUp(1000, function() {
		var form = document.getElementById("processingFeesForm");
		$(form).slideDown(1000);			

	});
}

function animateNumber(elem, to) {

	elem.finish();

	elem
	.prop('number', elem.text().toNumber())
	.animateNumber(
    {
      number: to,

      numberStep: function(now, tween) {
        var target = $(tween.elem);
        target.text(now.toCurrency());
      }
    },
    500);
}

function changeSupplierType(section) {

	var duration = 300;
	var suppliers = ['corporationSupplier', 'individualSupplier', 'taxesSupplier'];

	suppliers.forEach(function(supplier) {

		var supplierObj = $(document.getElementById(supplier));
		
		if (supplier === section) {
			supplierObj.finish();

			supplierObj.find('input[requiredMarker], select[requiredMarker]').each(function(i, obj) {
				$(obj).removeAttr('requiredMarker');
				$(obj).attr('required', '');
			});

		} else {
			supplierObj.stop(true, false);

			supplierObj.find('input[required], select[required]').each(function(i, obj) {
				$(obj).removeAttr('required');
				$(obj).attr('requiredMarker', '');
			});
		}

		if (supplierObj.is(':visible')) {
			supplierObj.fadeOut(duration, callback);
		}
	});

	function callback() {
		$(document.getElementById(section)).fadeIn(duration);
	}
}

function toggleTip(event, override) {

    event.preventDefault();
    event.stopPropagation();

    var tipButton = $(event.currentTarget).find('.tip');
    // var tip = $(tipButton).data('for');

    // if (typeof override === 'undefined') {
    //  $(tip).toggleClass('visibility_hidden');        
    // } else {

    //  if (override) {
    //      $(tip).removeClass('visibility_hidden');
    //  } else {
    //      $(tip).addClass('visibility_hidden');
    //  }
    // }    

    var icon_hover = 'url(/images/question_hover_icon.png)';
    var icon_orig = 'url(/images/question_icon.png)';

    if (typeof override === 'undefined') {
        var bg = $(tipButton).css('background-image');
        if (bg == icon_hover) {
            $(tipButton).css('background-image', icon_orig)
        } else {
            $(tipButton).css('background-image', icon_hover)            
        }
    } else {

        if (override) {
            $(tipButton).css('background-image', icon_hover)
        } else {
            $(tipButton).css('background-image', icon_orig)
        }
    }    

    // if ($('#overdraftLimit').hasClass('visibility_hidden')) {
    //  $(tipButton).css('background-image', 'url(/images/question_icon.png)')
    // } else {
    //  $(tipButton).css('background-image', 'url(/images/question_hover_icon.png)')
    // }
}

function toggleExpiryDate(opt) {
	var dateColumn = $('#dateColumn');

	if (opt.selectedOptions[0].id === 'specifyDate') {
		dateColumn.removeClass('displaynone');
	} else {
		dateColumn.addClass('displaynone');
	}	
}

function switchPaymentForm(id) {

	var new_pid = "pid_" + id;
	// hide everything
	$('div[class*="pid_"]').addClass('hidden');
	$('div[class*="pid_"]').find('input, select, textarea').each(function (idx, e) {
		$(e).attr('disabled', true);
		console.log("turning off "+e.name);
	});

	// show only selected
	$('div.' + new_pid).removeClass('hidden');//show();

	console.log("showing "+new_pid); 

	$('div.' + new_pid).find('input, select, textarea').each(function (idx, e) {
		console.log("turning on "+e.name);
		$(e).attr('disabled', false);
	});

    toggleCurrencySpecificFields('currency')

}

function toggleCurrencySpecificFields(currency_field) {
    //disable all currency specific fields
    $('div.currency-specific').find('input, select, textarea').each(function (idx, e) {
        console.log("turning off "+e.name);
        $(e).attr('disabled', true);
    });
    $('div.currency-specific').hide();

    //show currency fields for the selected currency
    if ($('[name="'+currency_field+'"]').length) {
        var currency = $('[name="'+currency_field+'"]').val();
        console.log("currency is", currency);
        $('div.currency-' + currency).show();
        $('div.currency-' + currency).find('input, select, textarea').each(function (idx, e) {
			if ($(e).is(":visible")) {
				console.log("turning on "+e.name);
            	$(e).attr('disabled', false);
			}
        });
    }
}

function populateStates(country, id, state_selection) {

    //don't mess with hidden province fields (it would add hidden required fields preventing the form from submitting)
    if($('[name="' + id+'"]').is(":hidden")) {
        return true;
    }

    //This breaks setting the values of the state WPAY-268
	//TODO: Remove this line?
	//state_selection = $('#state').attr('value');

	console.log("state_selection = "  + state_selection); 
	var statesCanada = [
		{ name: 'Alberta', abbreviation: "AB"},
		{ name: 'British Columbia', abbreviation: "BC"},
		{ name: 'Manitoba', abbreviation: "MB"},
		{ name: 'New Brunswick', abbreviation: "NB"},
		{ name: 'Newfoundland and Labrador', abbreviation: "NL"},
		{ name: 'Northwest Territories', abbreviation: "NT"},
		{ name: 'Nunavut', abbreviation: "NU"},
		{ name: 'Nova Scotia', abbreviation: "NS"},
		{ name: 'Ontario', abbreviation: "ON"},
		{ name: 'Prince Edward Island', abbreviation: "PE"},
		{ name: 'Quebec', abbreviation: "QC"},
		{ name: 'Saskatchewan', abbreviation: "SK"},
		{ name: 'Yukon Territory', abbreviation: "YT"},

	];

	var statesUS = [
		{ name: "Alabama", abbreviation: "AL"},
		{ name: "Alaska", abbreviation: "AK"},
		{ name: "Arizona", abbreviation: "AZ"},
		{ name: "Arkansas", abbreviation: "AR"},
		{ name: "California", abbreviation: "CA"},
		{ name: "Colorado", abbreviation: "CO"},
		{ name: "Connecticut", abbreviation: "CT"},
		{ name: "Delaware", abbreviation: "DE"},
		{ name: "District of Columbia", abbreviation: "DC"},
		{ name: "Florida", abbreviation: "FL"},
		{ name: "Georgia", abbreviation: "GA"},
		{ name: "Hawaii", abbreviation: "HI"},
		{ name: "Idaho", abbreviation: "ID"},
		{ name: "Illinois", abbreviation: "IL"},
		{ name: "Indiana", abbreviation: "IN"},
		{ name: "Iowa", abbreviation: "IA"},
		{ name: "Kansas", abbreviation: "KS"},
		{ name: "Kentucky", abbreviation: "KY"},
		{ name: "Louisiana", abbreviation: "LA"},
		{ name: "Maine", abbreviation: "ME"},
		{ name: "Maryland", abbreviation: "MD"},
		{ name: "Massachusetts", abbreviation: "MA"},
		{ name: "Michigan", abbreviation: "MI"},
		{ name: "Minnesota", abbreviation: "MN"},
		{ name: "Mississippi", abbreviation: "MS"},
		{ name: "Missouri", abbreviation: "MO"},
		{ name: "Montana", abbreviation: "MT"},
		{ name: "Nebraska", abbreviation: "NE"},
		{ name: "Nevada", abbreviation: "NV"},
		{ name: "New Hampshire", abbreviation: "NH"},
		{ name: "New Jersey", abbreviation: "NJ"},
		{ name: "New Mexico", abbreviation: "NM"},
		{ name: "New York", abbreviation: "NY"},
		{ name: "North Carolina", abbreviation: "NC"},
		{ name: "North Dakota", abbreviation: "ND"},
		{ name: "Ohio", abbreviation: "OH"},
		{ name: "Oklahoma", abbreviation: "OK"},
		{ name: "Oregon", abbreviation: "OR"},
		{ name: "Pennsylvania", abbreviation: "PA"},
		{ name: "Rhode Island", abbreviation: "RI"},
		{ name: "South Carolina", abbreviation: "SC"},
		{ name: "South Dakota", abbreviation: "SD"},
		{ name: "Tennessee", abbreviation: "TN"},
		{ name: "Texas", abbreviation: "TX"},
		{ name: "Utah", abbreviation: "UT"},
		{ name: "Vermont", abbreviation: "VT"},
		{ name: "Virginia", abbreviation: "VA"},
		{ name: "Washington", abbreviation: "WA"},
		{ name: "West Virginia", abbreviation: "WV"},
		{ name: "Wisconsin", abbreviation: "WI"},
		{ name: "Wyoming", abbreviation: "WY" }
	];



	var states;

	console.log('populateStates.country = '+ country); 

	if (country === 'CA') {
		states = statesCanada;
	} else if (country === 'US') {
		states = statesUS
	} else if (country !== '') {
		// hide the dropdown list entirely and show a text entry field
		var elem = document.getElementById(id);
		elem.style.display = "none"; 
		elem.setAttribute("name", ""); 
		elem.removeAttribute('required'); 

		var field = document.getElementById(id+"_field");
		
		field.style.display = "block"; 
		field.setAttribute("name", id); 
		field.setAttribute('required', ''); 

		return; 
	} else 
	{
		return; 
	}

	var elem = document.getElementById(id);

	/* if we locate an extra text entry field then hide it and do that whole name changey thingy */
	var field = document.getElementById(id+"_field");
	if(field)
	{
		field.style.display = "none"; 
		field.setAttribute("name", "");
		field.removeAttribute('required'); 
		
		elem.setAttribute("name", id); 
		elem.style.display = "block"; 
		elem.setAttribute('required', ''); 

	}
	
	
	var match; 
	if(state_selection != "")
	{
		match = state_selection; 		
	}else
	{
		match = elem.getAttribute('data-val');
	}

	
	elem.innerHTML = '';
	console.log('populateStates.match = '+ match); 

	var opt = document.createElement('option');
	opt.innerHTML = 'Select';
	opt.setAttribute("value", '');
	elem.appendChild(opt);

	states.forEach(function(state) {
		var opt = document.createElement('option');
		opt.innerHTML = state.name;
		opt.setAttribute("value", state.abbreviation);
		//console.log(state.abbreviation +" : "+ match); 
		if(match == state.abbreviation)
		{
			console.log("set "+ match+' as selected');
			opt.setAttribute('selected', 'selected');
			setTimeout(setStateValue.bind(null, elem, match), 300);	
		}
		elem.appendChild(opt);

	});
			
	elem.value = match; //<-- this should just work... but it doesn't seem to all the time. 

	$("#"+id).val(match);
	elem.removeAttribute("readonly");

}


function setStateValue(elem, match)
{
	
	
	elem.value = match; 
}