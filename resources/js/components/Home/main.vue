<template>
  <div>
    <div>
      <strong>Harmonogram na czas: </strong>
      {{ moment(today).format("MMMM Do YYYY") }}
    </div>
    <v-card>
      <div class="pa-3">
        <v-btn>Rozpocznij pracę</v-btn>
      </div>
    </v-card>
  </div>
</template>

<script>
import moment from "moment";
export default {
  data() {
    return {
      today: new Date(Date.now()),
      moment: moment,
    };
  },
};
</script>