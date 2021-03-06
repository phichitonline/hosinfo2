<template>
    <div>
        <div class="row">
            <input type="text" v-model="showtext"  v-debounce:1000ms="myFn">
        </div>
        <br>
        <div class="row">
            <span>text v-model : {{showtext}}</span><br>
            <span>text debounce : {{debouncetext}}</span>
        </div>

    </div>
</template>

<script>
import Vue from 'vue'
import vueDebounce from 'vue-debounce'
Vue.use(vueDebounce)

export default {
    data:function(){
        return{
            showtext:'',
            debouncetext:''

        }
    },
    methods:{
        myFn:function(){
            this.debouncetext = this.showtext
        }
    }
}
</script>

<style>

</style>
