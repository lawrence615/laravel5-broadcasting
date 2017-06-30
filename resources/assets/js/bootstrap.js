import Echo from "laravel-echo"


window.Vue = require('vue');

window.axios = require('axios');

window.axios.defaults.headers.common = {
    'X-Requested-With': 'XMLHttpRequest'
};



window.Echo = new Echo({
    broadcaster: 'socket.io',
    host: window.location.hostname + ':6001'
});