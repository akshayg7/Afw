@extends('layouts.layouts')
<style>
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

@section('content')
<div role="navigation" class="navbar navbar-default navbar-static-top">
	<div class="container" style="min-height:500px;">
	<br>
	<div class="container">
	<form action="{{route('invoice.store')}}" id="invoice-form" method="post" class="invoice-form" role="form" novalidate="">
        @csrf
        <div class="load-animate animated fadeInUp">
			<div class="row">
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <br /><br /><br /><br />
				</div>
			</div>
			<input id="currency" type="hidden" value="$">
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-7">
                    {{-- <h3>From,</h3>
                    <h2>Akshay Fabrication Works</h2>
					<br>
					<br> --}}
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
					<div class="form-group">
                        <label for="Search"><h3>Party name</h3></label>
                        <input type="text" autocomplete="off" placeholder="Search Party" class="form-control" id="search" name="search">
                    </div>
					<div class="form-group">
						<textarea class="form-control" rows="3" name="partydetail" id="address" placeholder="Party Address"></textarea>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<table class="table table-bordered table-striped table-vcenter" id="invoiceItem">
						<tr>
							<th width="2%"><input id="checkAll" class="formcontrol" type="checkbox"></th>
							<th width="4%">Item No</th>
							<th width="20%">Item Name</th>
                            <th width="9%">Unit</th>
							<th width="9%">Quantity</th>
							<th width="9%">Price</th>
							<th width="15%">Total</th>
						</tr>
						<tr>
							<td><input class="itemRow" type="checkbox"></td>
							<td><input type="text" name="productCode[]" id="productCode_1" class="form-control" autocomplete="off"></td>
							<td><input type="text" name="productName[]" id="productName_1" class="form-control" autocomplete="off"></td>
                            <td><select class="form-control" id="example-select" name="unit[]">
                                    <option value="0">select</option>
                                    <option value="Sq.ft">Sq.ft</option>
                                    <option value="RFT">RFT</option>
                                    <option value="No.">No.</option>
                                    <option value="Kg">Kg</option>
                                    <option value="Meter">Meter</option>
                                    <option value="-">-</option>
                                </select></td>
							<td><input type="number" name="quantity[]" id="quantity_1" class="form-control quantity" autocomplete="off"></td>
							<td><input type="number" name="price[]" id="price_1" class="form-control price" autocomplete="off"></td>
							<td><input type="number" name="total[]" id="total_1" class="form-control total" autocomplete="off"></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                        <button type="button" id="removeRows" class="btn btn-danger mr-1 mb-3">
                                <i class="fa fa-fw fa-times mr-1"></i> Delete
                            </button>
                    <button type="button" id="addRows" class="btn btn-success mr-1 mb-3">
                        <i class="fa fa-fw fa-plus mr-1"></i> Add More
                    </button>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
					<h3>Notes: </h3>
					<div class="form-group">
						<textarea class="form-control" rows="5" name="notes" id="notes" placeholder="Your Notes"></textarea>
					</div>
					<br>
					<div class="form-group">
						<input data-loading-text="Saving Invoice..." type="submit"  value="Save Invoice" class="btn btn-success submit_btn invoice-save-btm">
					</div>

				</div>
				<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5" style="float: right;margin-left: 0px;padding-left: 89px;">
					<span class="form-inline">
                        <div style="margin-bottom:4px" class="input-group">
                            <label style="padding-right: 30px;">Subtotal: &nbsp;</label>
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    ₹
                                </span>
                            </div>
                            <input type="number" class="form-control" name="subTotal" id="subTotal" placeholder="Subtotal" id="example-group1-input3" name="example-group1-input3">
                        </div>
                        <div style="margin-bottom:4px" class="input-group">
                            <label style="padding-right: 33px;">SGST (%)</label>
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    ₹
                                </span>
                            </div>
                            <input value="" type="number" class="form-control" name="taxRate" id="taxRate" placeholder="Gst" id="example-group1-input3" name="example-group1-input3">
                        </div>
                        <div style="margin-bottom:4px" class="input-group">
                            <label style="padding-right: 33px;">CGST (%)</label>
                            <div  class="input-group-prepend">
                                <span class="input-group-text">
                                    ₹
                                </span>
                            </div>
                            <input value="" type="number" class="form-control" name="taxRate1" id="taxRate1" placeholder="Gst" id="example-group1-input3" name="example-group1-input3">
                        </div>
                        <div style="margin-bottom:4px" class="input-group">
                            <label style="padding-right:12px">Tax Amount: </label>
                            <div class="input-group-prepend currency">
                                <span class="input-group-text">
                                    ₹
                                </span>
                            </div>
                            <input value="" type="number" class="form-control" name="taxAmount" id="taxAmount" placeholder="Tax Amount" id="example-group1-input3" name="example-group1-input3">
                        </div>
                        <div style="margin-bottom:4px" class="input-group">
                            <label style="padding-right: 67px;">Total </label>
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    ₹
                                </span>
                            </div>
                            <input value="" type="number" class="form-control" name="totalAftertax" id="totalAftertax" placeholder="Total" id="example-group1-input3" name="example-group1-input3">
                        </div>
                        <div style="margin-bottom:4px" class="input-group">
                            <label style="padding-right: 31px;">Advance &nbsp;</label>
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    ₹
                                </span>
                            </div>
                            <input value="" type="number" class="form-control" name="amountPaid" id="amountPaid" placeholder="Amount Paid" id="example-group1-input3" name="example-group1-input3">
                        </div>
                        <div style="margin-bottom:4px" class="input-group">
                            <label style="padding-right:2px">Amount Due &nbsp;</label>
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    ₹
                                </span>
                            </div>
                            <input value="" type="number" class="form-control" name="amountDue" id="amountDue" placeholder="Amount Due" id="example-group1-input3" name="example-group1-input3">
                        </div>

					</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</form>
</div>
</div>
</div>
<script>
jQuery(document).ready(function($){
	$(document).on('click', '#checkAll', function() {
		$(".itemRow").prop("checked", this.checked);
	});
	$(document).on('click', '.itemRow', function() {
		if ($('.itemRow:checked').length == $('.itemRow').length) {
			$('#checkAll').prop('checked', true);
		} else {
			$('#checkAll').prop('checked', false);
		}
	});
	var count = $(".itemRow").length;
	$(document).on('click', '#addRows', function() {
		count++;
		var htmlRows = '';
		htmlRows += '<tr>';
		htmlRows += '<td><input class="itemRow" type="checkbox"></td>';
		htmlRows += '<td><input type="text" name="productCode[]" id="productCode_'+count+'" class="form-control" autocomplete="off"></td>';
		htmlRows += '<td><input type="text" name="productName[]" id="productName_'+count+'" class="form-control" autocomplete="off"></td>';
        htmlRows += '<td><select class="form-control" id="example-select" name="unit[]"><option value="0">select</option><option value="Sq.ft">Sq.ft</option><option value="RFT">RFT</option><option value="No.">No.</option><option value="Kg">Kg</option><option value="Meter">Meter</option><option value="-">-</option></select></td>';
        htmlRows += '<td><input type="number" name="quantity[]" id="quantity_'+count+'" class="form-control quantity" autocomplete="off"></td>';
        htmlRows += '<td><input type="number" name="price[]" id="price_'+count+'" class="form-control price" autocomplete="off"></td>';
		htmlRows += '<td><input type="number" name="total[]" id="total_'+count+'" class="form-control total" autocomplete="off"></td>';
		htmlRows += '</tr>';
		$('#invoiceItem').append(htmlRows);
	});
	$(document).on('click', '#removeRows', function(){
		$(".itemRow:checked").each(function() {
			$(this).closest('tr').remove();
		});
		$('#checkAll').prop('checked', false);
		calculateTotal();
	});
	$(document).on('blur', "[id^=quantity_]", function(){
		calculateTotal();
	});
	$(document).on('blur', "[id^=price_]", function(){
		calculateTotal();
	});
	$(document).on('blur', "#taxRate", function(){
		calculateTotal();
	});
	$(document).on('blur', "#amountPaid", function(){
		var amountPaid = $(this).val();
		var totalAftertax = $('#totalAftertax').val();
		if(amountPaid && totalAftertax) {
			totalAftertax = totalAftertax-amountPaid;
			$('#amountDue').val(totalAftertax);
		} else {
			$('#amountDue').val(totalAftertax);
		}
	});
	$(document).on('click', '.deleteInvoice', function(){
		var id = $(this).attr("id");
		if(confirm("Are you sure you want to remove this?")){
			$.ajax({
				url:"action.php",
				method:"POST",
				dataType: "json",
				data:{id:id, action:'delete_invoice'},
				success:function(response) {
					if(response.status == 1) {
						$('#'+id).closest("tr").remove();
					}
				}
			});
		} else {
			return false;
		}
	});
});
function calculateTotal(){
	var totalAmount = 0;
	$("[id^='price_']").each(function() {
		var id = $(this).attr('id');
		id = id.replace("price_",'');
		var price = $('#price_'+id).val();
		var quantity  = $('#quantity_'+id).val();
		if(!quantity) {
			quantity = 1;
		}
		var total = price*quantity;
		$('#total_'+id).val(parseFloat(total));
		totalAmount += total;
	});

	$('#subTotal').val(parseFloat(totalAmount));
	var taxRate = $("#taxRate").val();
	// var taxRate1 = $("#taxRate1").val();
	// var gsttotal = taxRate+taxRate1;
	var subTotal = $('#subTotal').val();
	if(subTotal) {
		var taxAmount = subTotal*taxRate/100;
		$('#taxAmount').val(taxAmount);
		subTotal = parseFloat(subTotal)+parseFloat(taxAmount);
		$('#totalAftertax').val(subTotal);
		var amountPaid = $('#amountPaid').val();
		var totalAftertax = $('#totalAftertax').val();
		if(amountPaid && totalAftertax) {
			totalAftertax = totalAftertax-amountPaid;
			$('#amountDue').val(totalAftertax);
		} else {
			$('#amountDue').val(subTotal);
		}
	}
}


 </script>
<script type="text/javascript">
	var route = "{{ url('invoice/search') }}";
	$('#search').typeahead({
		source:  function (term, process) {
			return $.get(route, { term: term }, function (data) {
				return process(data);
			});
		}
	});
</script>
<script src="http://code.jquery.com/jquery-1.11.2.min.js" type="text/javascript"></script>
</html>
@endsection
