<template>
  <app-layout title="Dashboard">
    <form @submit.prevent="updateProfileInformation">
    <div
      class="
        min-h-screen
        flex
        justify-center
        items-center
        mx-auto
        max-w-7xl
        sm:px-6
        lg:px-8
      "
    >
      <div class="min-h-screen flex flex-col items-center justify-center">
        <div class="flex flex-col items-center justify-center">
          <jet-title>¡QUEREMOS VERTE!</jet-title>
          <jet-sub-title>Elige una de estas imágenes</jet-sub-title>

          <!-- contenedooooooooooooooooooooor imagenesssssssssssssssss -->
          <div class="flex flex-col justify-center align-middle">
            <div
              class="
                flex flex-row flex-wrap
                justify-center
                align-middle
                max-w-sm
                p-12
                bg-white
              "
            >
              <jet-user-avatar v-model="photo" value="photo 1"/>
              <jet-user-avatar v-model="photo" value="photo 2"/>
              <jet-user-avatar v-model="photo" value="photo 3"/>
              <jet-user-avatar v-model="photo" value="photo 4"/>
            </div>

            <Link :href="route('studentTasks')">
              <div class="flex items-center justify-center">
                <jet-btn>Siguiente</jet-btn>
              </div>
            </Link>
            <!-- <jet-btn class="mx-auto font-poppings text-base font-semibold text-center align-middle">Siguiente</jet-btn>  -->
          </div>
        </div>
      </div>
    </div>
    </form>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/NavBar.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import JetTitle from "@/Jetstream/Title.vue";
import JetSubTitle from "@/Jetstream/SubTitle.vue";
import JetBtn from "@/Jetstream/Btn.vue";
import JetUserAvatar from "@/Jetstream/UserAvatar.vue";

export default {
  components: {
    AppLayout,
    JetTitle,
    JetSubTitle,
    JetBtn,
    JetUserAvatar,
    Head,
    Link,
  },
  props: ["user"],
  data() {
    return {
      form: this.$inertia.form({
        _method: "PUT",
        photo: null,
      }),
    };
  },
  methods: {
    updateProfileInformation() {
      if (this.$refs.photo) {
        this.form.photo = this.$refs.photo.files[0];
      }

      this.form.post(route("user-profile-information.update"), {
        errorBag: "updateProfileInformation",
        preserveScroll: true,
        onSuccess: () => this.clearPhotoFileInput(),
      });
    },
  },
};
</script>