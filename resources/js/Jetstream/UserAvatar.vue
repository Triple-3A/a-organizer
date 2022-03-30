<template>
  <img
    class="h-16 w-1/4 m-4 rounded-full object-cover"
    :src="$page.props.user.profile_photo_url"
    :alt="$page.props.user.name"
  />
</template>