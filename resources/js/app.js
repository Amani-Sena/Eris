/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';


/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});

import NavComponent from './components/Header.vue';
app.component('nav-component', NavComponent);

import HeroComponent from './components/Hero.vue';
app.component('hero-component', HeroComponent);

import ServiceComponent from './components/Service.vue';
app.component('service-component', ServiceComponent);

import BrandComponent from './components/Brand.vue';
app.component('brand-component', BrandComponent);

import BookComponent from './components/Book.vue';
app.component('book-component', BookComponent);

import HeaderComponent from './components/HeaderBanner.vue';
app.component('header-component', HeaderComponent);

import ExampleComponent from './components/ExampleComponent.vue';
app.component('example-component', ExampleComponent);

import LoginComponent from './components/Login.vue';
app.component('login-component', LoginComponent);

import RegisterComponent from './components/Register.vue';
app.component('register-component', RegisterComponent);

import EmailComponent from './components/Email.vue';
app.component('email-component', EmailComponent);

import VerifyComponent from './components/VerifyEmail.vue';
app.component('verify-component', VerifyComponent);

import ShowComponent from './components/Show.vue';
app.component('show-component', ShowComponent);

import IndexBudgetComponent from './components/IndexBudget.vue';
app.component('budget-component', IndexBudgetComponent);

import EditComponent from './components/Edit.vue';
app.component('edit-component', EditComponent);

import AccessDeniedComponent from './components/AccessDenied.vue';
app.component('accessdenied-component', AccessDeniedComponent);

import AboutComponent from './components/About.vue';
app.component('about-component', AboutComponent);

import QuestionsComponent from './components/Questions.vue';
app.component('questions-component', QuestionsComponent);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */


app.mount('#app');
