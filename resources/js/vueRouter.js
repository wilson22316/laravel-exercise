import { createRouter, createWebHistory } from "vue-router";
import HomePage from "../pages/HomePage.vue";
import AboutPage from "../pages/AboutPage.vue";
import ElectricityBillPage from "../pages/ElectricityBillPage.vue";

const routes = [
    {
        path: "/",
        name: "Home",
        component: HomePage,
    },
    {
        path: "/about",
        name: "About",
        component: AboutPage,
    },
    {
        path: "/electricity_bill",
        name: "ElectricityBill",
        component: ElectricityBillPage,
    },
    // 捕捉所有其他路徑並重定向到首頁
    {
        path: "/:pathMatch(.*)*", // 用於捕捉所有未匹配的路徑
        redirect: "/",
    },
];

const router = createRouter({
    history: createWebHistory(), // 使用 HTML5 History 模式
    routes,
});

export default router;
