import Vue from "vue";
import VueRouter from "vue-router";
// import Home from "../components/Home";

//const Home = () => import("../components/App")
const ProductsList = ()=> import('../components/contents/products/ProductsList');
const EditProduct = ()=> import('../components/contents/products/EditProduct');
const News = {
    template:'<div>Heff </div>'
}


Vue.use(VueRouter);

export default new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home', 
        },
        {
            path: '/news',
            name: 'news', 
            component:News
        },
        {
            path: '/products',
            name: 'products', 
            component:ProductsList,
        },
        {
            path:'/products/edit/:tourId', 
            name:'edit_product',
            component:EditProduct,
            props:true
        },
        {
            path:'/products/create', 
            name:'create_product',
            component:EditProduct,
            props:true
        }
    ]

});