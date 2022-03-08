<template>
  <div>
    <v-divider></v-divider>
    <div>USERS LIST</div>
  </div>
</template>
<script>
import store from "../../store/index";
export default {
  created() {
    store.commit("setUsers", "użytkownich");
    console.log(store.getters.getUsers);
    store.dispatch("getUsers", this);
  },
};
</script>
