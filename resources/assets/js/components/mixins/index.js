export default {
    methods:{
        isEmptyObject:(obj)=>{
            if(typeof(object)==='undefined')
                return true;
            else if(typeof(object) ==='object')
            return Object.keys(obj).length === 0 && obj.constructor === Object
        }
    }
}