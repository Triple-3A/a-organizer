require('./bootstrap');

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';

//Import new components
import  JetCreateBtn  from '@/Jetstream/CreateBtn.vue';
import JetDeleteBtn from '@/Jetstream/DeleteBtn.vue';
<<<<<<< HEAD

import JetBtn from '@/Jetstream/Btn.vue';

=======
import JetEditBtn from '@/Jetstream/EditBtn.vue';
import JetSubmitBtn from '@/Jetstream/SubmitBtn.vue';
>>>>>>> 16632b610416744a7b419003496e8d54e5d9f0e4
import JetCancelBtn from '@/Jetstream/CancelBtn.vue';
import JetCard from '@/Jetstream/Card.vue';
import JetBasicSvg from '@/Jetstream/BasicSvg.vue';
import JetArrowNextSvg from '@/Jetstream/ArrowNextSvg.vue';
import JetOwnInput from '@/Jetstream/OwnInput.vue';
import JetBasicTitleSvg from '@/Jetstream/BasicTitleSvg.vue';
import JetInstrumentalTitleSvg from '@/Jetstream/InstrumentalTitleSvg.vue';
import JetAdvancedTitleSvg from '@/Jetstream/AdvancedTitleSvg.vue';
import JetArrowBackSvg from '@/Jetstream/ArrowBackSvg.vue';
import JetTitle from '@/Jetstream/Title.vue';


const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => require(`./Pages/${name}.vue`),
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .mixin({ methods: { route } })
            .mount(el);
    },
});


//Globalize new components
app.component('jet-create-btn', JetCreateBtn);
app.component('jet-delete-btn', JetDeleteBtn);

app.component('jet-btn', JetBtn);

app.component('jet-edit-btn', JetEditBtn);
app.component('jet-cancel-btn', JetCancelBtn);
app.component('jet-card', JetCard);
app.component('jet-basic-svg', JetBasicSvg);
app.component('jet-arrow-next-svg', JetArrowNextSvg);
app.component('jet-own-input', JetOwnInput);
app.component('jet-basic-title-svg', JetBasicTitleSvg);
app.component('jet-instrumental-title-svg', JetInstrumentalTitleSvg);
app.component('jet-advanced-title-svg', JetAdvancedTitleSvg);
app.component('jet-arrow-back-svg', JetArrowBackSvg);
app.component('jet-title', JetTitle);

InertiaProgress.init({ color: '#4B5563' });
