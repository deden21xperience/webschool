<template>
  <div :class="backgroundColor" class="card gradient-shadow min-height-100" id="tes">
    <div class="padding-4">
      <div class="col s7 m7">
        <i class="material-icons background-round mt-5">{{ ikon }}</i>
        <p>{{nama}}</p>
      </div>
      <div class="col s5 m5 right-align">
        <h5 class="mb-0">{{jumlah}}</h5>
        <p class="no-margin">New</p>
        <p>{{ total }}</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "card",
  data() {
    return {
      backgroundColor: this.background
      // textColor: this.text
    };
  },
  props: ["nama", "ikon", "jumlah", "total", "background", "text"],
  methods: {}
};
</script>

<style scopped>
#tes:hover {
  cursor: pointer;
  /* background-color: black; */
}
</style>