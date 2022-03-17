<template>
    <Head title="Log in" />

    <div class="h-full py-24 align-middle">
        <div class="flex justify-center my-4 ">
            <p>
                <span class="font-black text-azul">Iniciar sesión</span> / <Link
                    pref="route('register')" 
                    :href="route('register')"
                    class="font-thin"
                    >Registrarse</Link
                >
            </p>
        </div>
        <div class="flex justify-center">
            <div class="block max-w-sm p-6 bg-white rounded-lg shadow-lg">
                <jet-validation-errors class="mb-4" />

                <div v-if="status" class="mb-4 text-sm font-medium text-green-600">
                    {{ status }}
                </div>

                <form @submit.prevent="submit">
                    <div>
                        <jet-input id="email"  placeholder="Email" type="email" class="block w-full py-2 mt-1 text-center border-amarillo" v-model="form.email" required/>

                    </div>

                    <div class="mt-4">
                        <jet-input id="password"  placeholder="Contraseña" type="password" class="block w-full py-2 mt-1 text-center border-amarillo" v-model="form.password" required autocomplete="current-password" />
                    </div>

                    <div class="block mt-4">
                        <label class="flex items-center">
                            <jet-checkbox class="border-amarillo" name="remember" v-model:checked="form.remember" />
                            <span class="ml-2 text-sm text-gray-600">Recuérdame</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <Link v-if="canResetPassword" :href="route('password.request')" class="text-sm text-gray-600 underline hover:text-gray-900">
                            Recordar contraseña
                        </Link>

                        <jet-button class="ml-4 bg-azul" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Acceder
                        </jet-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import { defineComponent } from "vue";
import JetButton from "@/Jetstream/Button.vue";
import JetInput from "@/Jetstream/Input.vue";
import JetCheckbox from "@/Jetstream/Checkbox.vue";
import JetLabel from "@/Jetstream/Label.vue";
import JetValidationErrors from "@/Jetstream/ValidationErrors.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";

export default defineComponent({
  components: {
    Head,
    JetButton,
    JetInput,
    JetCheckbox,
    JetLabel,
    JetValidationErrors,
    Link,
  },

  props: {
    canResetPassword: Boolean,
    status: String,
  },

  data() {
    return {
      form: this.$inertia.form({
        email: "",
        password: "",
        remember: false,
      }),
    };
  },

  methods: {
    submit() {
      this.form
        .transform((data) => ({
          ...data,
          remember: this.form.remember ? "on" : "",
        }))
        .post(this.route("login"), {
          onFinish: () => this.form.reset("password"),
        });
    },
  },
});
</script>
