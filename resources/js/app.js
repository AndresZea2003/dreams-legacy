require('./bootstrap');

import { createApp } from "vue";
import Dropdown from "../components/Dropdown";

createApp({
    components: {
        dropdown: Dropdown
    }
}).mount('#app');