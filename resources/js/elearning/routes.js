
export const routes = [
  {
    path: '/login',
    name: 'login',
    component: () => import(/*webpackChunkName: "auth"*/ './components/auth/Login')
  },
  {
    path: '/register',
    name: 'register',
    component: () => import(/*webpackChunkName: "auth"*/ './components/auth/Register')
  },
  {
    path: '/dashboard',
    name: 'dashboard',
    component: () => import(/*webpackChunkName: "elearning"*/ './components/Dashboard')
  },
  // {
  //     path: '/wargasekolah',
  //     component: () => import('./components/Table')
  // },
  // {
  //     path: '/pendaftaran',
  //     name: 'formulirPendaftaran',
  //     component: () => import('./components/ppdb/FormulirPendaftaran')
  // },
  // {
  //     path: '/beranda',
  //     name: 'beranda',
  //     component: () => import('./components/ppdb/BerandaPpdb')
  // }

]