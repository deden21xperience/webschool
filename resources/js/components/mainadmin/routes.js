
export const routes = [
  {
    path: '/admin/dashboard',
    name: 'dashboard',
    component: () => import(/*webpackChunkName: "mainadmin"*/ './Dashboard'),
    meta: {
      breadcrumb: [{
        name: 'dashboard'
      }]
    }
  },
  {
    path: '/admin/profile',
    name: 'profile',
    component: () => import(/*webpackChunkName: "mainadmin"*/ './Profile'),
    meta: {
      breadcrumb: [{
        name: "tes", link: "tes"
      },
      { name: "profile" }
      ]
    }
  },
  {
    path: '/admin/profileinfo',
    name: 'profileinfo',
    component: () => import(/*webpackChunkName: "mainadmin"*/ './ProfileInfo'),
    meta: {
      breadcrumb: [{
        name: "tes", link: "tes"
      },
      { name: "profileinfo" }
      ]
    }
  },
  {
    path: '/admin/level',
    name: 'level',
    component: () => import(/*webpackChunkName: "mainadmin"*/ './Level'),
    meta: {
      breadcrumb: [{
        name: "tes", link: "tes"
      },
      { name: "level" }
      ]
    }
  },
  {
    path: '/admin/guru',
    name: 'guru',
    component: () => import(/*webpackChunkName: "mainadmin"*/ './Guru'),
    meta: {
      breadcrumb: [{
        name: "tes", link: "tes"
      },
      { name: "guru" }
      ]
    }

  },
  {
    path: '/admin/siswa',
    name: 'siswa',
    component: () => import(/*webpackChunkName: "mainadmin"*/ './Siswa'),
    meta: {
      breadcrumb: [{
        name: "dashboard", link: "tes"
      },
      { name: "siswa" }
      ]
    }
  },
  {
    path: '/admin/matapelajaran',
    name: 'matapelajaran',
    component: () => import(/*webpackChunkName: "mainadmin"*/ './MataPelajaran'),
    meta: {
      breadcrumb: [{
        name: "tes", link: "tes"
      },
      { name: "matapelajaran" }
      ]
    }
  },
  {
    path: '/admin/transaksi',
    name: 'transaksi',
    component: () => import(/*webpackChunkName: "mainadmin"*/ './Transaksi'),
    meta: {
      breadcrumb: [{
        name: "tes", link: "tes"
      },
      { name: "transaksi" }
      ]
    }
  },
  {
    path: '/admin/laporan',
    name: 'laporan',
    component: () => import(/*webpackChunkName: "mainadmin"*/ './Laporan'),
    meta: {
      breadcrumb: [{
        name: "tes", link: "tes"
      },
      { name: "laporan" }
      ]
    }
  },
  {
    path: '/admin/keuangan',
    name: 'keuangan',
    component: () => import(/*webpackChunkName: "mainadmin"*/ './Keuangan'),
    meta: {
      breadcrumb: [{
        name: "tes", link: "tes"
      },
      { name: "keuangan" }
      ]
    }
  },



]