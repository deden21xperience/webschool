<template>
  <div class="card-stats">
    <div class="row mt-1">
      <div class="col s12 m6 l3" v-for="(item, index) in items" :key="item.message">
        <card
          :nama="item.message"
          :background="backgroundColor[index].color"
          :ikon="ikon[index].ikon"
        />
      </div>
    </div>
  </div>
</template>

<script>
import card from "./Card";
export default {
  data() {
    return {
      items: [
        { message: "Siswa" },
        { message: "Guru" },
        { message: "Ortu" },
        { message: "bar" }
      ],
      backgroundColor: [
        { color: "gradient-45deg-red-pink" },
        { color: "gradient-45deg-green-teal" },
        { color: "teal" },
        { color: "green" }
      ],
      ikon: [
        { ikon: "perm_identity" },
        { ikon: "attach_money" },
        { ikon: "timeline" },
        { ikon: "supervisor_account" }
      ]
    };
  },

  components: { card }
};
</script>

<style>
</style>