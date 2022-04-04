require('./bootstrap');


import {createApp} from 'vue';
import App from './components/App.vue';

let app = createApp({})
app.component('App', App);

app.mount("#app")