
<!DOCTYPE html>
<html>
<head>
	<title>TEST</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
<body>
<div class="container">
  <div class="row clearfix">
    <div class="col-md-12">
      <table class="table table-bordered table-hover" id="tab_logic">
        <thead>
          <tr>
            <th class="text-center"> Action </th>
            <th class="text-center"> Quantity </th>
            <th class="text-center"> Price </th>
            <th class="text-center"> Tax </th>
            <th class="text-center"> Exteded Price </th>
          </tr>
        </thead>
        <tbody>
          
          <tr id='addr0'>
            <td>
              <button id="add_row" class="btn btn-default pull-left">+</button>
              <button id='delete_row' class="pull-right btn btn-default">-</button>
            </td>
            <td>
              <input type="number" name='qty[]' placeholder='Enter Qty' class="form-control qty" step="0" min="0"/>
            </td>
            <td>
              <input type="number" name='price[]' placeholder='Enter Unit Price' class="form-control price" step="0.00" min="0"/>
            </td>
            <td>
              <input type="number" name='product[]'  placeholder='0.00' class="form-control product" step="0.00" min="0"/>
            </td>
            <td>
              <input type="number" name='total[]' placeholder='0.00' class="form-control total" readonly/>
            </td>
          </tr>
          <tr id='addr1'></tr>
        </tbody>
      </table>
    </div>
  </div>
 
  <div class="row clearfix">
    <div class="col-md-12">
      
    </div>
  </div>
  <div class="row clearfix" style="margin-top:20px">
    <div class="pull-right col-md-4">
      <table class="table table-bordered table-hover" id="tab_logic_total">
        <tbody>
          <tr>
            <th class="text-center">Sub Total</th>
            <td class="text-center"><input type="number" name='sub_total' placeholder='0.00' class="form-control" id="sub_total" readonly/></td>
          </tr>
          <tr>
            <th class="text-center">Discount</th>
            <td class="text-center">
              <div class="input-group mb-2 mb-sm-0">
                <input type="number" class="form-control" id="tax" placeholder="0">
                <div class="input-group-addon">%</div>
              </div>
            </td>
          </tr>
          <tr>
            
          </tr>
          <tr>
            <th class="text-center">Grand Total</th>
            <td class="text-center"><input type="number" name='total_amount' id="total_amount" placeholder='0.00' class="form-control" readonly/></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>


</body>
<script type="text/javascript" src="main.js"></script>
</html>