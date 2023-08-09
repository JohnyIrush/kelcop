import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';

import { Tab, Tabs } from 'vant';
import { Col, Row } from 'vant';
import { Picker } from 'vant';
import { Field, CellGroup } from 'vant';
import { Checkbox, CheckboxGroup } from 'vant';
import { Popup } from 'vant';
import { Button } from 'vant';
import { Pagination } from 'vant';
import { ActionSheet } from 'vant';

// 2. Import the components style
import 'vant/lib/index.css';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .use(Tab)
            .use(Tabs)
            .use(Col)
            .use(Row)
            .use(Picker)
            .use(Field)
            .use(CellGroup)
            .use(Checkbox)
            .use(CheckboxGroup)
            .use(Popup)
            .use(Button)
            .use(Pagination)
            .use(ActionSheet)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
