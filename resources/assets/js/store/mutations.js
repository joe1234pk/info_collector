import * as types from './mutationsTypes';
 const mutations  = {
    [types.GET_ALL_TOURS](state,data){
        state.tours = data;
    }
 };

 export default mutations;