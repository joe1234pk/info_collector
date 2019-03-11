 <template>
<!-- <div class="modal" id="editTourModal" aria-labelledby="myModalLabel" >
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Create</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form class="form-horizontal" action='' method="POST">   
          <div class="form-group">
             <input type="hidden" name="id" :value="tour.id">
          </div> 
          <div class="form-group ">
            <label class="col-lg-2 control-label">
              Tour Name:
            </label>

            <div class="col-lg-10">
              <input name="name" class="form-control" v-model="tour.name">
              <span class="help-block"></span>
            </div>
          </div>
          <div class="form-group ">
            <label class="col-lg-2 control-label">
              Itinerary:
            </label>
            <div class="col-lg-10">
              <textarea name="itinerary" class="form-control" v-model="tour.itinerary"></textarea>
              <span class="help-block"></span>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-6">
              <h4>Tour available Dates</h4>
            </div>
            <div class="col-lg-6 text-right">
              <a href="javascript:void(0);" class="btn btn-primary" id="add_date_btn">Add Date</a>
            </div>
            <table class="table table-striped table-hover">
             <thead class="bg-success">
              <tr>
                <th class="col-lg-8">Date</th>
                <th class="col-lg-4">Action</th>
              </tr>
            </thead>
            <tbody id="dates_wrapper">
              <tr class="dates_wrapper" name="tour_dates">

                <td>
                  <input type="hidden" name="tour_dates" value=''>
                </td>
                <td>
                  <input type = "hidden"  name="" value="">
                 
                  <a href="javascript:void(0);" class="btn btn-danger btn-date-status">Disable</a>
            
                  <a href="javascript:void(0);" class="btn btn-success btn-date-status">Enable</a>
        

                </td>
              </tr>

            </tbody>

          </table>
        </div>
        <div class="form-group">
          <div class="col-lg-5 col-lg-offset-2">
            <a href="" class="btn btn-default">Cancel</a>
          </div>
          <div class="col-lg-5 text-right">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-primary" @click="saveProduct">Save New tour</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
    </div>
</div>
</div> -->
<div class="panel">

  <div class="panel-body">
      <form class="form-horizontal" id="form"  method="POST" @submit.prevent="saveProduct">   
          <div class="form-group">
             <input type="hidden" name="id" :value="tour.id">
          </div> 
          <div class="form-group ">
            <label class="col-lg-2 control-label">
              Tour Name:
            </label>

            <div class="col-lg-10">
              <input name="name" class="form-control" v-validate="'required'" v-model="tour.name">
              <span class="help-block">
                {{ errors.first('name') }}
              </span>
            </div>
          </div>
          <div class="form-group ">
            <label class="col-lg-2 control-label">
              Itinerary:
            </label>
            <div class="col-lg-10">
              <textarea name="itinerary" class="form-control" v-validate="'required'" v-model="tour.itinerary"></textarea>
              <span class="help-block">
                 {{ errors.first('itinerary') }}
              </span>
            </div>
          </div>
      
          <h4>Tour available Dates
             <div class="pull-right">
            <a href="javascript:void(0);" class="btn btn-primary" id="add_date_btn" @click.prevent="tour.departure_date.push({})">Add Date</a>
          </div>
          </h4>
        
          <table class="table table-striped table-hover" v-show="tour.departure_date.length>0">
            <thead class="bg-success">
            <tr>
              <th class="col-lg-8">Date</th>
              <th class="col-lg-4">Action</th>
            </tr>
            </thead>
          <tbody id="dates_wrapper" >
            <tr  v-for="(date,i) in tour.departure_date" :key=i>
              <td>
                <DatePicker v-model="date.date" 
                :name="'tour_dates['+ i + '][date]'"
                :required="true" format='yyyy-MM-dd'
                 placeholder="Pick a time"
                :language="zh"
                :disabled-dates="datePickerConfig" 
                input-class="form-control"></DatePicker>
                <span class="help-block">
                   {{ errors.first("'tour_dates['+ i + '][date]'") }}
                </span>
              </td>
              <td>
    
                <template v-if="date.id">   
                   <input type="hidden" :name="'tour_dates['+ i + '][status]'" :value="date.status">
                <a href="javascript:void(0);" class="btn btn-danger btn-date-status" v-if="date.status==1" @click.prevent="date.status=!date.status">Disable</a>
                <a href="javascript:void(0);" class="btn btn-success btn-date-status" v-else  @click.prevent="date.status=!date.status">Enable</a>
                </template>
                <a v-else class="btn btn-danger btn-sm" @click.prevent="tour.departure_date.splice(i,1)"><i class="fa fa-times"></i></a>

              </td>
            </tr>

          </tbody>
        </table>
      <button type="submit" class="btn btn-primary">Save</button>
      </form>
      
  </div>
   <vue-snotify></vue-snotify>
   <vue-loading v-show="isLoading"></vue-loading>
  <!-- <div class="panel-footer">
    
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div> -->
</div>
 </template>
      
<script>

import Vue  from 'vue';
import * as actions from 'vuex';
import VueLoading from 'vue-loading-template';
import mixins from '../../mixins'
import moment from 'moment';
import DatePicker from 'vuejs-datepicker';
import {zh} from 'vuejs-datepicker/dist/locale'
import axios from 'axios';
import VeeValidate from 'vee-validate';
import Snotify, { SnotifyPosition } from 'vue-snotify'; // 1. Import Snotify

const snotifyConfig = {
  toast:{
    position: SnotifyPosition.centerTop
  }
}

const datePickerConfig = {
  format: 'YYYY-MM-DD',
  limit: {
      type:'fromto',
      to:new Date(),
      }
};

const loadCOnfig = {
            type:'bubbles'
};
Vue.use(VueLoading, loadCOnfig);
Vue.use(VeeValidate);
Vue.use(Snotify);

  export default {
      data(){
        return {
            tour:{},
            startDate: new Date(),
            datePickerConfig,
            zh,
            isLoading: false,
        }
      },
      mixins:[mixins],
      props:{
        tourId:Number
        },
      computed:{
        actionRoute(){
          return this.tourId?'/api/tour/save':'/api/tour/add';
        },
        ...actions.mapState([
          'tours'
          ],
        ),
        ...actions.mapGetters([
        'getTourWithId'
        ],
       ),
      },
      created:function(){
        //  actions.Store;
        this.initTourState();
    
      },
      methods:{
        initTourState(){
            if(this.tourId)
            {
                this.tour = this.getTourWithId(this.tourId);
            }
            if(this.isEmptyObject(this.tour.departure_date))
            {
              this.$set(this.tour,'departure_date',[]);
            }
        },
        saveProduct(){
              if(this.errors.length>0)
              {
                 this.$snotify.error('The form is invalid.');
              }
              else{
                  axios.post(this.actionRoute,new FormData(document.getElementById("form")))
                  .then((res)=>{
                      let data = res.data;
                      if(data.success)
                      this.$snotify.error(data.msg).on( "click", (toast) => {
                          this.$router.push({ name: 'products'});
                          } );
                      else{
                      this.$snotify.error(data.msg);
                      }
                  },(err)=>{
                    console.log(err);
                  });
              }

                  // this.$snotify.success("Yes Optus");
             },
      },
      components:{
        DatePicker
      }
  }
</script>