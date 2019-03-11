 <template>
     <div>
      <div class="panel panel-default">
        <div class="panel-body">
          <div style="margin-bottom: 10px;">
            <!-- class="btn btn-primary"  data-toggle="modal" data-target="#editTourModal" -->
            <router-link :to="{name:'create_product'}" tag="a" class="btn btn-primary" >Create New Tour</router-link>
          </div>
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th class="col-lg-2">Tour Id</th>
                <th class="col-lg-8">Tour Name</th>
                <th class="col-lg-2">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="tour in tours" :key="tour.id">
                <td>
                 {{tour.id}}
                </td>
               <td>
                {{tour.tour_name}}
               </td>
              <td>
                <!-- data-toggle="modal" data-target="#editTourModal" -->
                
                <router-link  :to="{name:'edit_product',params:{tourId:tour.id}}">
                 <button class="btn btn-primary" >Edit</button>
                </router-link>
               
                <!-- <a href="/form/" class="btn btn-success">Booking</a> -->
              </td>
            </tr>
          </tbody>
          </table>
        </div>  
      </div>
     </div>
      
 </template>
      
<script>
import * as actions from 'vuex';
// import EditProduct from './EditProduct'


  export default {
      data:function(){
        return {
            curEditId:'',
        }
      },
      computed:{
        ...actions.mapState([
          'tours'
          ],
        ),
      },
      created:function(){
        this.actGetAllTours();
      },
      methods:{
        ...actions.mapActions([
          'actGetAllTours'
        ])
      },
      components:{
          // EditProduct
      }
  }
</script>