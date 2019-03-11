import axios from 'axios';
// import * as mutations from './mutations';
import * as types from './mutationsTypes';

export default {
    actGetAllTours:({commit})=>{
        axios.get('api/tours').then(data =>{
           commit(types.GET_ALL_TOURS,data.data.content);
         }).catch(function (error) {
            console.log(error.msg);
          });

    },
    actCreateNewTour:({commit},)=>{
        axios.get('api/tours').then(data =>{
           commit(types.GET_ALL_TOURS,data.data.content);
         }).catch(function (error) {
            console.log(error.msg);
          });

    },
}

