<template>
    <Head title="Log in" />

    <div class="h-full align-middle py-24">
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
            <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
                <jet-validation-errors class="mb-4" />

                <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                    {{ status }}
                </div>

                <form @submit.prevent="submit">
                    <div>
                        <jet-input id="email"  placeholder="Email" type="email" class="mt-1 block w-full 
                        border-amarillo py-2 text-center" v-model="form.email" required/>

                    </div>

                    <div class="mt-4">
                        <jet-input id="password"  placeholder="Contraseña" type="password" class="mt-1 block w-full border-amarillo py-2 text-center" v-model="form.password" required autocomplete="current-password" />
                    </div>

                    <div class="block mt-4">
                        <label class="flex items-center">
                            <jet-checkbox class="border-amarillo" name="remember" v-model:checked="form.remember" />
                            <span class="ml-2 text-sm text-gray-600">Recuérdame</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <Link v-if="canResetPassword" :href="route('password.request')" class="underline text-sm text-gray-600 hover:text-gray-900">
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
