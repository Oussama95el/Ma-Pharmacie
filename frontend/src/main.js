import {createApp} from "vue";
import App from "./App.vue";
import "./index.css";
import "flowbite";
import router from "./router";
import AOS from "aos";
import 'aos/dist/aos.css';
const app = createApp(App);

AOS.init();
app.use(router);

app.mount("#app");
