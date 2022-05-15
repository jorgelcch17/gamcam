require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import Splide from '@splidejs/splide';

new Splide( '.splide' ).mount();
