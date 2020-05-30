<template>
  <div>
    <h1>Halaman Level</h1>
    <a href="#" class="right">
      <i class="material-icons">add</i>
    </a>
    <table>
      <thead>
        <tr>
          <th>#</th>
          <!-- <th>Id</th> -->
          <th>Level</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(level,index) in levels" :key="level">
          <td>{{index + 1}}</td>
          <!-- <td>{{level}}</td> -->
          <td>{{level}}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  name: "level",
  data() {
    return {
      levels: [
        "admin",
        "prodi",
        "staf",
        "guru",
        "keuangan",
        "siswa",
        "pimpinan"
      ]
    };
  }
};
</script>

<style>
</style>