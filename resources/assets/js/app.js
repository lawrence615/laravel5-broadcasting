import './bootstrap';

import Vue from 'vue';
import App from './components/App.vue';

// Vue.use(Echo);

new Vue({
    el: '#app',
    template: '<App/>',
    components: {App},
    data: {
        message: 'Hello World!'
    }
});
