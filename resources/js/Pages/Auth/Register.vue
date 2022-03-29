<template>
  <Head title="Register" />

  <div class="h-full px-10 align-middle py-24">
    <div class="flex justify-center">
      <h2>
        <Link class="font-medium text-azul" :href="route('login')">Iniciar sesión</Link> / <span class="font-medium "
          >Registrarse</span
        >
      </h2>
    </div>
    <div class="flex justify-center">
      <div class="block max-w-sm p-12 bg-white rounded-lg shadow-lg">
        <jet-validation-errors class="mb-4" />

        <form @submit.prevent="submit">
          <div>
            <jet-input
              id="name"
              placeholder="Nombre"
              type="text"
              class="block w-full mt-1 text-center" 
              v-model="form.name"
              required
              autocomplete="name"
            />
          </div>

          <div class="mt-4">

            <jet-input
              id="email"
              placeholder="Email"
              type="email"
              class="block w-full mt-1 text-center"
              v-model="form.email"
              required
            />
          </div>

          <div class="mt-4">
            <jet-input
              id="password"
              placeholder="Contraseña"
              type="password"
              class="block w-full mt-1 text-center"
              v-model="form.password"
              required
              autocomplete="new-password"
            />
          </div>

          <div class="mt-4">
            <jet-input
              id="password_confirmation"
               placeholder="Confirmar contraseña"
              type="password"
              class="block w-full mt-1 text-center"
              v-model="form.password_confirmation"
              required
              autocomplete="new-password"
            />
          </div>

          <div
            class="mt-4"
            v-if="$page.props.jetstream.hasTermsAndPrivacyPolicyFeature"
          >
            <jet-label for="terms">
              <div class="flex items-center">
                <jet-checkbox
                  name="terms"
                  id="terms"
                  v-model:checked="form.terms"
                />

                <div class="ml-2">
                  I agree to the
                  <a
                    target="_blank"
                    :href="route('terms.show')"
                    class="text-sm text-gray-600 underline hover:text-gray-900"
                    >Terms of Service</a
                  >
                  and
                  <a
                    target="_blank"
                    :href="route('policy.show')"
                    class="text-sm text-gray-600 underline hover:text-gray-900"
                    >Privacy Policy</a
                  >
                </div>
              </div>
            </jet-label>
          </div>

          <div class="flex justify-center mt-6">
            <jet-button
              :href="route('attach')"
              class=" bg-azul"
              :class="{ 'opacity-25': form.processing }"
              :disabled="form.processing"
            >
              Registrarse
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

  data() {
    return {
      form: this.$inertia.form({
        name: "",
        email: "",
        password: "",
        password_confirmation: "",
        terms: false,
      }),
    };
  },

  methods: {
    submit() {
      this.form.post(this.route("register"), {
        onFinish: () => this.form.reset("password", "password_confirmation"),
      });
    },
  },
});
</script>
