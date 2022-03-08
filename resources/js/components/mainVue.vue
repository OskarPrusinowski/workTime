<template>
  <v-app>
    <router-link to="/users/list">Użytkownicy</router-link>
    <router-view></router-view>
  </v-app>
</template>
<script>
export default {
  computed: {},
  data() {
    return {
      message: "Hello World",
    };
  },
};
</script>
