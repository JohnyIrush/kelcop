import {createApp} from 'vue';

export default class extends window.Controller {
    connect() {
        this.app = createApp({
            data() {
                return {
                    message: 'Hello, Vue.js!'
                }
            }
        });

        this.app.mount(this.element);
    }

    disconnect() {
        this.app.unmount();
    }
}
