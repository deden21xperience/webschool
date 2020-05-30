<template>
  <div>
    <h1>halaman Mata Pelajaran</h1>
    <table>
      <thead>
        <tr>
          <th>Prodi</th>
          <th>Kode</th>
          <th>Nama</th>
          <th>Aktif</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>TKR</td>
          <td>123</td>
          <td>Pendidikan Agama</td>
          <td>
            <span class="switch">
              <label>
                Off
                <input type="checkbox" :checked="isChecked" @click="check" />
                <span class="lever"></span>
                On
              </label>
            </span>
            <!-- <label>
              <input type="checkbox" checked="checked" />
              <span>*</span>
            </label>-->
          </td>
          <td>
            <a href="#">
              <i class="material-icons">edit</i>
            </a>
            &nbsp;
            <a href="#">
              <i class="material-icons">delete</i>
            </a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  name: "mapel",
  data() {
    return {
      isChecked: true
    };
  },
  methods: {
    check() {
      return (this.isChecked = false);
    }
  }
};
</script>

<style>
</style>