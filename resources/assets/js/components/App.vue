<template>
    <div class="container">
        <Header></Header>
       <router-view></router-view>
        <!-- <keep-alive></keep-alive>       -->
    </div>
</template>

<script>
import Header from './Header';

    export default {
        mounted() {
            //  console.log('Component mounted.')
        },
        components:{
            Header,
        }
    }
</script>
