// resources/js/router.js

import { createRouter, createWebHistory } from 'vue-router';
import Home from './components/Home.vue';
import ArticleList from './components/ArticleList.vue';
import ArticleCreate from './components/ArticleCreate.vue';
import ArticleEdit from './components/ArticleEdit.vue';
import ArticleDetail from './components/ArticleDetail.vue';

const routes = [
    { path: '/', component: Home },
    { path: '/articles', component: ArticleList },
    { path: '/articles/create', component: ArticleCreate },
    { path: '/articles/edit/:id', component: ArticleEdit, props: true },
    { path: '/articles/:id', component: ArticleDetail, props: true },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
