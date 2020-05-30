
export const routes = [
    {
        path: '/guru',
        name: 'guru',
        component: () => import(/*webpackChunkName: "mainadmin"*/ './components/mainadmin/Guru')
    },
    {
        path: '/siswa',
        name: 'siswa',
        component: () => import(/*webpackChunkName: "mainadmin"*/ './components/mainadmin/Siswa')
    },
    {
        path: '/matapelajaran',
        name: 'matapelajaran',
        component: () => import(/*webpackChunkName: "mainadmin"*/ './components/mainadmin/MataPelajaran')
    },
    {
        path: '/dashboard',
        name: 'dashboard',
        component: () => import(/*webpackChunkName: "mainadmin"*/ './components/mainadmin/Dashboard')
    },
    {
        path: '/profile',
        name: 'profile',
        component: () => import(/*webpackChunkName: "mainadmin"*/ './components/mainadmin/Profile')
    },
    {
        path: '/transaksi',
        name: 'transaksi',
        component: () => import(/*webpackChunkName: "mainadmin"*/ './components/mainadmin/Transaksi')
    },
    {
        path: '/laporan',
        name: 'laporan',
        component: () => import(/*webpackChunkName: "mainadmin"*/ './components/mainadmin/Laporan')
    },
    {
        path: '/keuangan',
        name: 'keuangan',
        component: () => import(/*webpackChunkName: "mainadmin"*/ './components/mainadmin/Keuangan')
    },

    {
        path: '/profileinfo',
        name: 'profileinfo',
        component: () => import(/*webpackChunkName: "mainadmin"*/ './components/mainadmin/ProfileInfo')
    },
    {
        path: '/level',
        name: 'level',
        component: () => import(/*webpackChunkName: "mainadmin"*/ './components/mainadmin/Level')
    },

]