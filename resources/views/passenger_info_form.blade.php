@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-2">
      <div class="panel panel-default">

        <form class="form-horizontal" action='{{route("passenger.save")}}' method="POST">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name='tour_id' value=> 
          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif            
          <fieldset>
            <div class="form-group">
              <label class="col-lg-2 control-label">
                Tour Name:
              </label>
              <label class="col-lg-2 control-label">
                <b></b>
              </label>
            </div>
            <div class="form-group ">
              <label class="col-lg-2 control-label">
                Tour Date:
              </label>

             <!--  <div class="col-lg-6">
                <select name="tour_date" class="form-control">
                 <option value=""></option>
                </select>
                <span class="help-block"></span>
              </div>
            </div> -->
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
              </div>
            </div>
            
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
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


}); 

</script>
@endsection