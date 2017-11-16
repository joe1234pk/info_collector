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

            <div id="basic-setting" class='col-lg-6'>
            <div class="form-group">
              <label class="col-lg-2 control-label">
                Tour Name:
              </label>
              <div class="col-lg-10" style="text-align: left" >
               <input type="text" name='name' class='form-control' value ="{{$tour->tour_name}}" disabled >
              </div>
            </div>

             <div class="form-group">
              <label class="col-lg-2 control-label">
                voucher:
              </label>
              <div class="col-lg-10" style="text-align: left" >
               <input type="text" name='voucher' class='form-control' value =""  >
              </div>
            </div>
  
            <div class="form-group">
              <label class="col-lg-2 control-label">
                Tour Date:
              </label>
               
               <div class="col-lg-10" style="text-align: left">
      <!--            <input type="text" name='product_date' class='form-control' value ="
                 {{$tour->departure_date}}">  -->

                <select name="tour_date" class="form-control">
                  @foreach($tour->dates  as $date)
                 <option value="{{$date}}">{{$date}}</option>
                 @endforeach
                </select>
                <span class="help-block"></span>
              </div>
          </div>
          </div>
          <div id='customer-prefered-config' class="col-md-6">
            <div class="form-group">
              <label class="col-lg-3 control-label">
                Early arrival
              </label>
              <div class="col-lg-9 " style="text-align: left" >
               <input type="text" name='early_arrival' class='form-control' value ="">
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 control-label">
                Stay behind:
              </label>
              <div class="col-lg-6 " style="text-align: left;padding-left:0" >
              <span class="col-lg-8"><input type="text" name='stay_behind' class='form-control' value =""></span>
              <span class="col-lg-4 control-label" style="padding-left: 0" > nights</span>
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-3 control-label">
                Preferred airline:
              </label>
              <div class="col-lg-4 " style="text-align: left" >
               <input type="text" name='preferred_airline' class='form-control' value ="">
              </div>
            </div>
            

            <div class="form-group">
              <label class="col-lg-3 control-label">
                Preferred class of travel:
              </label>
               <div class="col-lg-4 " style="text-align: left">
                <select name="travel_class" class="form-control">
                 <option value="economy" selected>Economy</option>
                 <option value="business">Business</option>
                </select>
              </div>
          </div>
          
                <div class="form-group">
              <label class="col-lg-3 control-label">
                Bedding configuration:
              </label>
               <div class="col-lg-4 " style="text-align: left">
                <select name="bedding_config" class="form-control">
                <!--  <option value="single">Single</option>
                 <option value="double">Double</option>
                 <option value="twin">Twin</option>
                 <option value="king">King</option> -->
                 @foreach($tour->bedding_availability as $bed)
                 <option value="{{$bed}}">{{$bed}}</option>
                 @endforeach()
                </select>
              </div>
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

 function NewPassengerForm(){
    var string = 
    '<div class="well well-sm passenger_wrapper">' 
    +'<div class="row">'
    +' <div class="col-lg-4"><div class="form-group">'
    +'<label class="col-lg-4 ">Given name:</label>'
    +'<div class="col-lg-8"><input class="form-control" name="new_passengers[given_name][]" value="" required="true"></div></div></div>'
    + '<div class="col-lg-4">'
    +'<div class="form-group"><label class="col-lg-4 ">Middle name:</label>'
    +'<div class="col-lg-8"><input class="form-control" name="new_passengers[mid_name][]" placeholder="N/A" value=""></div></div></div>'
    + '<div class="col-lg-4">'
    +'<div class="form-group"><label class="col-lg-4 ">Surname:</label>'
    +'<div class="col-lg-8"><input class="form-control" name="new_passengers[surname][]" required="true" value=""></div></div></div></div>'
    +'<div class="row">'
    +'<div class="col-lg-6"><div class="form-group">'
    +'<label class="col-lg-4 ">Title: </label>'
    +'<div class="col-lg-8"><select class="form-control" name="new_passengers[title][]" required="true" value=""><option value="mr">Mr</option><option value="mrs">Mrs</option><option value="miss">Miss</option><option value="sir">Sir</option><option value="madam">Madam</option><option value="dr">Dr</option></select></div></div></div>'
    +'<div class="col-lg-6">'
    +'<div class="form-group"><label class="col-lg-4 "> Gender:</label>'
    +'<div class="col-lg-8"><select class="form-control" required="true"  name="new_passengers[gender][]" value=""><option value="male">Male</option><option value="female">Female</option></select></div></div></div></div>'
    +'<div class="row">'
    +'<div class="col-lg-6"><div class="form-group">'
    +'<label class="col-lg-4 ">Email: </label>'
    +'<div class="col-lg-8"><input class="form-control"  required="true" name="new_passengers[email][]" value=""></div></div></div>'
    +'<div class="col-lg-6">'
    +'<div class="form-group"><label class="col-lg-4 "> Mobile:</label>'
    +'<div class="col-lg-8"><input class="form-control" required="true" name="new_passengers[mobile][]" value=""></div></div></div></div>'
    +'<div class="row">'
    +'<div class="col-lg-6"><div class="form-group">'
    +'<label class="col-lg-4 ">Date of birth:</label>'
    +'<div class="col-lg-8"><input class="form-control" name="new_passengers[birth_date][]" required="true" value="" data-provide="datepicker"></div></div></div>'
    +'<div class="col-lg-6"><div class="form-group">'
    +'<label class="col-lg-4 ">Emergency contact information:</label>'
    +'<div class="col-lg-8"><input class="form-control" name="new_passengers[emgcy_contact][]" required="true" value="" ></div></div></div></div>'
    +'<div class="passport-block"><h4>Passport information</h4><hr><div class="row">'
    +'<div class="col-lg-6"><div class="form-group">'
    +'<label class="col-lg-4 ">Passport number: </label>'
    +'<div class="col-lg-8"><input class="form-control" name="new_passengers[passport_num][]" required="true" value=""></div></div></div>'
    +'<div class="col-lg-6">'
    +'<div class="form-group"><label class="col-lg-3">Passport nationality:</label>'
    +'<div class="col-lg-9"><input class="form-control" name="new_passengers[passport_nationality][]" required="true" value=""></div></div></div></div>'
    +'<div class="row">'
    +' <div class="col-lg-4"><div class="form-group">'
    +'<label class="col-lg-4 ">Date of issue:</label>'
    +'<div class="col-lg-8"><input class="form-control" name="new_passengers[passport_date_of_issue][]" required="true" value="" data-provide="datepicker"></div></div></div>'
    + '<div class="col-lg-4">'
    +'<div class="form-group"><label class="col-lg-4 ">Expiry date:</label>'
    +'<div class="col-lg-8"><input class="form-control" name="new_passengers[passport_expiry_date][]" required="true" value="" data-provide="datepicker"></div></div></div>'
    + '<div class="col-lg-4">'
    +'<div class="form-group"><label class="col-lg-4 ">Place of birth:</label>'
    +'<div class="col-lg-8"><input class="form-control" name="new_passengers[place_of_birth][]" required="true"  value=""></div></div></div></div></div>'
     +'<div class="address-block"><h4>Pensonal residential details</h4><hr><div class="row">'
    +'<div class="col-lg-8"><div class="form-group">'
    +'<label class="col-lg-3 ">Resident address:</label>'
    +'<div class="col-lg-9"><input class="form-control" name="new_passengers[address][]" value="" ></div></div></div>'
    +'<div class="col-lg-4"><div class="form-group">'
    +'<label class="col-lg-4 ">Suburb:</label>'
    +'<div class="col-lg-8"><input class="form-control" name="new_passengers[address_sub][]" value="" ></div></div></div></div>'
    +'<div class="row">'
    +'<div class="col-lg-6"><div class="form-group">'
    +'<label class="col-lg-4 ">State:</label>'
    +'<div class="col-lg-8"><input class="form-control" name="new_passengers[address_state][]" value=""></div></div></div>'
    +'<div class="col-lg-6"><div class="form-group">'
    +'<label class="col-lg-4 ">Postcode:</label>'
    +'<div class="col-lg-8"><input class="form-control" name="new_passengers[address_postcode][]" value="" ></div></div></div></div></div>'
    +'<div class="row">'
    +'<div class="col-lg-2 pull-right"><a href="javascript:void(0);" class="btn btn-danger remove_passenger">Remove</a></div></div></div>'
    return string ;
}

</script>
@endsection