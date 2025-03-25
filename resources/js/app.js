import { createApp } from 'vue';
import router from './vueRouter';

import { Quasar, Dialog } from 'quasar';
import 'quasar/src/css/index.sass';

import './bootstrap';

import App from '../components/App.vue';

import DatePicker from 'vue-datepicker-next';
import 'vue-datepicker-next/index.css';
// import './datepicker-zh-tw.js';
import "vue-datepicker-next/locale/zh-tw.es.js";

// 確保DOM完全加載後再掛載Vue應用
document.addEventListener('DOMContentLoaded', () => {
    const app = createApp(App);

    app.component('DatePicker', DatePicker);

    app.use(Quasar, {
        plugins: { // 這裡可以加入 Quasar 插件，如 Notify, Dialog 等
            Dialog // 註冊 Dialog 插件
        }
    });

    app.use(router); // 註冊 Vue Router

    app.mount('#app');
});