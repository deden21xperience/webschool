<template>
  <div>
    <h1>Hello from Guru</h1>
    <table>
      <thead>
        <tr>
          <th>#</th>
          <th>No Induk</th>
          <th>Nama</th>
          <th>L/P</th>
          <th>Phone</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>123</td>
          <td>Alvin</td>
          <td>L</td>
          <td>0821</td>
          <td>aktif</td>
          <td>
            <a href="#" class="tooltipped" data-position="bottom" data-tooltip="Edit Guru">
              <i class="material-icons">edit</i>
            </a>
            &nbsp;
            <a
              href="#"
              class="tooltipped"
              data-position="bottom"
              data-tooltip="Hapus Guru"
            >
              <i class="material-icons">delete</i>
            </a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import M from "materialize-css";
export default {
  name: "guru",
  data() {
    return {};
  },
  mounted() {
    var elems = document.querySelectorAll(".tooltipped");
    M.Tooltip.init(elems);
  }
};
</script>

<style>
</style>