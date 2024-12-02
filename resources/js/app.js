/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';
import AOS from 'aos';
import 'aos/dist/aos.css';
AOS.init();


/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});

import NavTransparentComponent from './components/Partials/HeaderTransparent.vue';
app.component('navtransparent-component', NavTransparentComponent);

import NavComponent from './components/Partials/Header.vue';
app.component('nav-component', NavComponent);

import FooterComponent from './components/Partials/Footer.vue';
app.component('footer-component', FooterComponent);

import HeroComponent from './components/Hero.vue';
app.component('hero-component', HeroComponent);

import ServiceComponent from './components/Service.vue';
app.component('service-component', ServiceComponent);

import BrandComponent from './components/Brand.vue';
app.component('brand-component', BrandComponent);

import BookComponent from './components/Book.vue';
app.component('book-component', BookComponent);

import LoginComponent from './components/Login.vue';
app.component('login-component', LoginComponent);

import RegisterComponent from './components/Register.vue';
app.component('register-component', RegisterComponent);

import EmailComponent from './components/Email.vue';
app.component('email-component', EmailComponent);

import ResetComponent from './components/Reset.vue';
app.component('reset-component', ResetComponent);

import VerifyComponent from './components/VerifyEmail.vue';
app.component('verify-component', VerifyComponent);

import ServiceDetailsComponent from './components/ServiceDetails.vue';
app.component('servicedetails-component', ServiceDetailsComponent);

import BenefitsComponent from './components/Benefits.vue';
app.component('benefits-component', BenefitsComponent);

import BudgetListComponent from './components/BudgetList.vue';
app.component('budgetlist-component', BudgetListComponent);

import BudgetAdminComponent from './components/Admin/BudgetListAdmin.vue';
app.component('budgetadmin-component', BudgetAdminComponent);

import BudgetEditAdminComponent from './components/Admin/BudgetEditAdmin.vue';
app.component('editadmin-component', BudgetEditAdminComponent);

import EditComponent from './components/Edit.vue';
app.component('edit-component', EditComponent);

import AccessDeniedComponent from './components/AccessDenied.vue';
app.component('accessdenied-component', AccessDeniedComponent);

import AboutComponent from './components/About.vue';
app.component('about-component', AboutComponent);

import ErisComponent from './components/Eris.vue';
app.component('eris-component', ErisComponent);

import ServiceListComponent from './components/ServiceList.vue';
app.component('serviceslist-component', ServiceListComponent);

import SupportListComponent from './components/Support.vue';
app.component('support-component', SupportListComponent);




app.mount('#app');
