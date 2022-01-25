require('./bootstrap');

import { createApp } from "vue";
import Dropdown from "../components/Dropdown";
import CSwitch from "../components/CSwitch";
import UsersTable from "../components/UsersTable";
import VueSetup from "./VueSetup";


createApp({
    components: {
        'vue-setup': VueSetup,
        'dropdown': Dropdown,
        'c-switch': CSwitch,
        'users-table': UsersTable
    }
}).mount('#app');