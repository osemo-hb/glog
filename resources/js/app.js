require('./bootstrap');

import Vue from 'vue';
import ExampleComponent from './components/ExampleComponent.vue';

const app = new Vue({
    el: '#app',
    components: {
        ExampleComponent
    }
});
