<template>
  <div>
    <table class="table">
      <thead>
        <tr>
          <th>No.</th>
          <th>Kabupaten</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(tes, index) in kabupaten" v-bind:key="tes.id">
          <td>{{ index +1 }}</td>
          <td>{{ tes.kecamatan }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  data() {
    return {
      kabupaten: []
    };
  },
  created() {
    this.fetchWarga("api/biodata/kecamatan");
  },
  methods: {
    fetchWarga(url) {
      var fetchUrl = url || "api/biodata/kabupaten";
      fetch(fetchUrl)
        .then(res => res.json())
        .then(res => {
          console.log(res);
          this.kabupaten = res;
        });
    }
  }
};
</script>

<style>
</style>