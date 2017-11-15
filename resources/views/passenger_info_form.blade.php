@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-2">
      <div class="panel panel-default">

        <form class="form-horizontal" action='{{route("passenger.save")}}' method="POST">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name='tour_id' value='{{$tour->id}}'> 
          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif            
          <fieldset style="margin-top: 30px;">

            <div class="form-group">
              <label class="col-lg-2 control-label">
                Tour Name:
              </label>
              <div class="col-lg-4 " style="text-align: left" >
               <input type="text" name='name' class='form-control' value ="{{$tour->tour_name}}" disabled ></input> 
              </div>
            </div>
  
            <div class="form-group">
              <label class="col-lg-2 control-label">
                Tour Date:
              </label>
               
               <div class="col-lg-4 " style="text-align: left">
                 <input type="text" name='product_date' class='form-control' value ="
                 {{$tour->departure_date}}" disabled > 

               <!--  <select name="tour_date" class="form-control">
                 <option value=""></option>
                </select>
                <span class="help-block"></span> -->
              </div>
            
          </div>
            <div class="form-group">
              
              <div class="col-lg-offset-2 col-lg-4">
                <a href="javascript:void(0);" class="btn btn-primary" id="add_passenger_btn">Add
                Passenger</a>
              </div>
            </div>
            <div class="form-group">

              
              <fieldset id="passengers_wrapper">

                
              </fieldset>
            </div>
            
            <div class="form-group">
              <div class="col-lg-5 col-lg-offset-2">
                <a href="" class="btn btn-default">Cancel</a>
              </div>
              <div class="col-lg-5 text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
               <!-- <a href="javascript:void(0)" id='emailSubmit' class="btn btn-primary">Send email</a> -->
              </div>
            </div>
            
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
<?php 


?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment.min.js"></script>
<!-- <script src="https://smtpjs.com/v2/smtp.js">
</script> -->
<script>

 $(function(){

  $("#add_passenger_btn").on('click',function () {
    $("#passengers_wrapper").append(NewPassengerForm());
  });

       $("body").on("click", ".remove_passenger", function (e) {
        var parentDom=$(this).closest(".passenger_wrapper");
        var id=parentDom.find(".passenger_id_input").val();
        parentDom.remove();
    });


 $('#emailSubmit').click(function(){
            
            var pass_num = $('div.passenger_wrapper').length;
            var string = '';
            var cur_date = moment().format('LL');
            var product ='10 Day Japans Golden Route with Hiroshima Tour Classic Package including flights departing Sydney or Melbourne DEPOSIT ONLY - TOTAL COST $3,199 per person twin share. Must purchase 2 vouchers';
            var pass_index = 1;
         //   string += '<div> Product: ' + product + '</div>'; 
            //  $('div.passenger_wrapper').each(function(index){
           
            // string += '<h4>Traveller ' + (pass_index++) + ' - Details As Per Passport </h4><hr>' 
            // var allInputs = $(this).find(':input');
            // for(var i=0;i<allInputs.length;i++)
            // {
            //   var tmp_input = $(allInputs[i]);
            //   var tmp_label = tmp_input.closest('.form-group').find('label').text();
            //   string += '<div>' + tmp_label + '  '+ tmp_input.val(); + '</div>';
 
            // }});

            
});
}); 

</script>
@endsection