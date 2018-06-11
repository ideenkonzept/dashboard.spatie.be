import './bootstrap.js';

import Echo from 'laravel-echo';
import Vue from 'vue';
import moment from 'moment-timezone';


import Dashboard from './components/Dashboard';
import Calendar from './components/Calendar';
import Github from './components/Github';
import InternetConnection from './components/InternetConnection';
import Music from './components/Music';
import Npm from './components/Npm';
import Packagist from './components/Packagist';
import Tasks from './components/Tasks';
import TimeWeather from './components/TimeWeather';
import Twitter from './components/Twitter';
import Uptime from './components/Uptime';
import WorldCup from './components/WorldCup/WorldCup';
import AnimatedTask from './components/AnimatedTask';
import NumberWidget from './components/NumberWidget';


new Vue({
    el: '#dashboard',

    data: {
        waterThePlants: false,
        scheduler: null
    },

    components: {
        Dashboard,
        Calendar,
        Github,
        InternetConnection,
        Music,
        Npm,
        Packagist,
        Tasks,
        TimeWeather,
        Twitter,
        Uptime,
        WorldCup,
        AnimatedTask,
        NumberWidget
    },

    created() {
        let options = {
            broadcaster: 'pusher',
            key: window.dashboard.pusherKey,
            cluster: window.dashboard.pusherCluster,
        };

        if (window.dashboard.usingNodeServer) {
            options = {
                broadcaster: 'socket.io',
                host: 'http://dashboard.test',
            };
        }

        this.echo = new Echo(options);

        this.scheduler = setInterval(this.handler, 1000 * 60)
    },

    methods: {
        handler() {
            this.updateWaterThePlants();
        },
        updateWaterThePlants() {
            this.waterThePlants = (moment().weekday() === 0 && moment().hour() >= 11 && moment().hour() <= 13) || (moment().weekday() === 3 && moment().hour() >= 11 && moment().hour() <= 13);
        }
    }
});
